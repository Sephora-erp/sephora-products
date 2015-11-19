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
    <h2 class="page-header"><i class="fa fa-square"></i> New Product</h2>
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
                            <input type="text" class="form-control" name="name"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>VAT %</label>
                            <input type="text" class="form-control" name="vat" value="{{SettingsController::fetchSetting('company_vat')}}"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price"/>
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
                            <input type="text" class="form-control" name="weight"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dimension X</label>
                            <input type="text" class="form-control" name="d_x"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dimension Y</label>
                            <input type="text" class="form-control" name="d_y"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dimension Z</label>
                            <input type="text" class="form-control" name="d_z"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Provider price</label>
                            <input type="text" class="form-control" name="provider_price"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="type">
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
        <p class="center">
            <button type="submit" class="btn btn-xs btn-success"><i class="fa fa-save"></i> Save</button>
        </p>
    </form>
</section>
@stop
