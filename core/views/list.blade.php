<?php

use App\Http\Helpers\ModuleHelper;
use App\Http\Helpers\TriggerHelper;
use App\Http\Helpers\HookHelper;
?>
@extends('template')
@section('content')
<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
    <h2 class="page-header"><i class="fa fa-cog"></i> Client's List</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">All the clients</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Phone (1)</th>
                                <th>City</th>
                                <th></th>
                            </tr>
                            @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->lastname}}</td>
                                <td>{{$customer->phone_1}}</td>
                                <td>{{$customer->city}}</td>
                                <td class="center">
                                    <a href="{{URL::to('/customers/view/'.$customer->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-xs btn-danger" onclick="deleteCustomer({{$customer->id}})"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

<script>
            /*
             * Ask's for delete confirmation, and, after, deletes the customer
             */
                    function deleteCustomer(id)
                    {
                    if (confirm("Are you sure do you want to delete this customer?")){
                    window.location.href = "{{URL::to('/customers/delete/')}}/" + id;
                    } else{

                    }
                    }
</script>
@stop

