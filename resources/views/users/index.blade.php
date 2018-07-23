<meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">
    *, table { font-size: 14px; }
    .business{  display: none; }
    .im-box-body { width: 100%; display: block; margin: auto; }
    .box { padding: 0 15px !important; }
    .box-header h4 { line-height: 34px; font-size: 16px; margin-bottom: 0; }
    .box-header h4 strong { font-size: 16px; }
    .dataTables_paginate span .paginate_button { font-size: 12px; line-height: 1.5; box-shadow: none; padding: 4px 10px !important; }
</style>

@include('layouts.alerts')
@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="box box-primary">
            <div class="box-header">
                <div class="row">
                    <div class="col-md-12">
                        <h4>
                            Staff
                            <a class="btn btn-primary pull-right" href="{{url('dashboard/staff/create')}}">Add New</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="box-body im-box-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="staff-list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th> 
                                <th>Email</th> 
                                <th></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

<script src="{{asset('js/app.js')}}"></script>
<script>
    let staff = {
        load: function () {
            staff.bind();
            staff.generateDataTable();
        },
        bind: function () {  },
        generateDataTable: function () {
            $('#staff-list').dataTable({
                "ajax": {
                    "url": '/dashboard/staff/_ajax',
                    "dataSrc": "users"
                },
                "columns": [
                    {"data": "row", "width": "5%"},
                    {"data": "name", "width": "40%"},
                    {"data": "email", "width": "40%"},
                    {
                        "data": null,
                        "class": "action",
                        "width": "15%",
                        "render": function (data, type, row, meta) {
                            // console.log(row);
                            let id = row.id;
                            return  '<a href="/dashboard/staff/'+id+'" class="btn btn-sm btn-info">    <i class="fa fa-eye "></i> </a> &nbsp;'+
                                '<a href="/dashboard/staff/'+id+'/edit" class="btn btn-sm btn-primary"> <i class="fa fa-pencil-square-o "></i> </a> &nbsp;'+
                                '<a href="#" class="btn btn-sm btn-danger" onclick="staff.delete('+id+')"> <i class="fa fa-trash-o "></i> </a>';
                        }
                    }
                ],
            });
        },
        delete: function (id=null) {
            if (confirm("Confirm delete?") && id!==null)
                window.location.href  = "/dashboard/staff/"+id+"/delete";
            return false;
        },
    };

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        staff.load();
    });
</script>


