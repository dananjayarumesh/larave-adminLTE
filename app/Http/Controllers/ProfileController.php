<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $id =  \Auth::user()->id; 
        $user = \App\User::findOrFail($id); 
        if (empty($role)) { $role = (object)['name'=>'-']; } 
        // 
        return view('users.profile.index', compact('user')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id=null)
    {
        //
        $user = \App\User::findOrFail(\Auth::user()->id);
        unset($user->password);

        return view('users.profile.edit', compact('user')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
        $id = \Auth::user()->id;
        //
        $validatedData = $request->validate([
                'name'=> 'required',
                'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($id)], 
            ]);

        $requestData = $request->all();
        $requestData['password'] = \App\User::select('password')->where('id', $id)->first()['password']; 

        \DB::beginTransaction();

        try { 
            $user = \App\User::find($id);
            $user->name= $request->name;
            $user->email     = $request->email;
            $user->save();

            // dd($address);
        } catch (Exception $e) {
            \DB::rollBack();
            return redirect('')->back()->withInput()->with('flash_message_error', 'Profile update unsuccessful, Please tey again!');
        }

        \DB::commit();
        return redirect('dashboard/profile')->with('flash_message_success', 'Profile updated successfully!');
        // flash_message_error
        // flash_message_info
    }

    public function change_psw()
    {
        // 
        $user = \App\User::findOrFail(\Auth::user()->id);
        unset($user->password); 
        return view('users.profile.password', compact('user')); 
    }

    public function update_psw(Request $request, $id=null)
    {
        $id = \Auth::user()->id;
        // 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
            'new_password_confirmation' => 'required']); 


        $user = \App\User::find($id);
        // The passwords match...
        if (!\Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withInput()->with('flash_message_error', 'Please enter valid current password!'); 
        }

        $user->password = \Hash::make($request->new_password);
        if ($user->save()) { 
            \Auth::logout();
            return redirect()->route('login'); 
        } 
        // 
        return redirect()->back()->withInput()->with('flash_message_error', 'Password couldn`t change. Please try again!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
