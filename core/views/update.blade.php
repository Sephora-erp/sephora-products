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
    <h2 class="page-header"><i class="fa fa-square"></i> #{{$product->id}} - {{$product->name}}
    </h2>
    <form action="{{URL::to('/products/update')}}" method="post">
      <input type="hidden" name="id" value="{{$product->id}}"/>
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
                            <input type="text" class="form-control" name="name" value="{{$product->name}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" value="{{$product->description}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>VAT %</label>
                            <input type="text" class="form-control" name="vat" value="{{$product->vat}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}" />
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
                            <input type="text" class="form-control" name="weight" value="{{$product->weigth}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dimension X</label>
                            <input type="text" class="form-control" name="d_x" value="{{$product->d_x}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dimension Y</label>
                            <input type="text" class="form-control" name="d_y" value="{{$product->d_y}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dimension Z</label>
                            <input type="text" class="form-control" name="d_z" value="{{$product->d_z}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Provider price</label>
                            <input type="text" class="form-control" name="provider_price" value="{{$product->provider_price}}" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="type" >
                              <option value="1">Product</option>
                              <option value="2">Service</option>
                              <option value="3">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 center">
                      <button type="submit" class="btn btn-xs btn-success"><i class="fa fa-save"></i> Save </button>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
    </form>
</section>
@stop
