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
    <h2 class="page-header"><i class="fa fa-user"></i> {{$customer->name}} {{$customer->lastname}} </h2>
    <form action="{{URL::to('/customers/update')}}" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$customer->id}}"/>
        <div class="box box-default color-palette-box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-genderless"></i> Basic info</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{$customer->name}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" class="form-control" name="lastname" value="{{$customer->lastname}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>NIF / DNI</label>
                            <input type="text" class="form-control" name="cif" value="{{$customer->cif}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Client type</label>
                            <select class="form-control" name="status" value="{{$customer->status}}" >
                                <option value="1">Potential customer</option>
                                <option value="2">Customer</option>
                                <option value="3">Ex-Customer</option>
                            </select>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box box-default color-palette-box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-bookmark-o"></i> Address / Contact info</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Adress</label>
                            <input type="text" class="form-control" name="address" value="{{$customer->address}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" name="country" value="{{$customer->country}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" value="{{$customer->city}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control" name="state" value="{{$customer->state}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Phone (1)</label>
                            <input type="text" class="form-control" name="phone_1" value="{{$customer->phone_1}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Phone (2)</label>
                            <input type="text" class="form-control" name="phone_2" value="{{$customer->phone_2}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Phone (3)</label>
                            <input type="text" class="form-control" name="phone_3" value="{{$customer->phone_3}}" />
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <div class="box box-default color-palette-box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-commenting" name="note" value="{{$customer->note}}" ></i> Other info</h3>
            </div>
            <div class="box-body">
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Notes</label>
                            <textarea class="form-control full-width"></textarea>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <p class="center">
            <button type="submit" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Save</button>
        </p>
    </form>
</section>
@stop

