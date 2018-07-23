<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User; 

class UserController extends Controller
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
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        // 
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, \App\User::$rules);
        
        $user = new \App\User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);

        if ($user->save()) {
            // 
            return redirect('dashboard/staff')->with('flash_message_success', 'User created successfully!');
        }
        
        return redirect()->back()->withInput()->with('flash_message_error', 'User couldn`t create successfully! Please chack entered data.');
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = \App\User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        // 
        $id =  \Auth::user()->id; 
        $user = \App\User::findOrFail($id);

        return view('users.profile', compact('user')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::findOrFail($id);
        unset($user->password);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
        $validatedData = $request->validate([
                'name'=> 'required',
                'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($id)],  
            ]); 

        \DB::beginTransaction();
            try { 
                $user = \App\User::find($id);
                $user->name= $request->name;
                $user->email     = $request->email;
                $user->save();
                // 
            } catch (Exception $e) { 
                \DB::rollBack(); 
                return redirect('')->back()->withInput()->with('flash_message_error', 'User update unsuccessful, Please tey again!');
            }
        \DB::commit();
        return redirect('dashboard/staff')->with('flash_message_success', 'User updated successfully!');
        // flash_message_error // flash_message_info
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::beginTransaction();
        // 
            try {
                $user = \App\User::find($id);
                $user->delete(); 
            } catch (Exception $es) {
                \DB::rollBack();
                return redirect('')->back()->with('flash_message_error', 'User delete unsuccessful, Please tey again!');
            }
        \DB::commit();
        return redirect('dashboard/staff')->with('flash_message_success', 'User deleted successfully!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _ajaxData()
    {
        $users = \App\User::select('id', 'name', 'email') 
            ->get();

        foreach ($users as $k => $user):
            // row id
            $user->row = $k+1;
        endforeach;

        return response()->json(['users' => $users]);
    }

}
