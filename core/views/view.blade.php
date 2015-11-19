<?php

use App\Http\Helpers\ModuleHelper;
use App\Http\Helpers\TriggerHelper;
use App\Http\Helpers\HookHelper;
use App\Http\Controllers\SettingsController;
?>
@extends('template')
@section('content')
<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
    <h2 class="page-header"><i class="fa fa-square"></i> #{{$product->id}} - {{$product->name}}</h2>
    <form action="{{URL::to('/products/new')}}" method="post">
        {!! csrf_field() !!}
        <div class="box box-default color-palette-box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-genderless"></i> Basic info</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ref.</label>
                            <input type="text" class="form-control" name="name" value="{{$product->name}}" disabled="disabled"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" value="{{$product->description}}" disabled="disabled"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>VAT %</label>
                            <input type="text" class="form-control" name="vat" value="{{$product->vat}}" disabled="disabled"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}" disabled="disabled"/>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box box-default color-palette-box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-ellipsis-v"></i> Extra info</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="text" class="form-control" name="weight" value="{{$product->weight}}" disabled="disabled"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dimension X</label>
                            <input type="text" class="form-control" name="d_x" value="{{$product->d_x}}" disabled="disabled"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dimension Y</label>
                            <input type="text" class="form-control" name="d_y" value="{{$product->d_y}}" disabled="disabled"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dimension Z</label>
                            <input type="text" class="form-control" name="d_z" value="{{$product->d_z}}" disabled="disabled"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Provider price</label>
                            <input type="text" class="form-control" name="provider_price" value="{{$product->provider_price}}" disabled="disabled"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="type" disabled="disabled">
                              <option value="1">Product</option>
                              <option value="2">Service</option>
                              <option value="3">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
    </form>
</section>
@stop
