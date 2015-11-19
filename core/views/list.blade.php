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
    <h2 class="page-header"><i class="fa fa-square"></i> Products</h2>
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Recap Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">

    <table class="table table-bordered">
      <tbody>
          <tr>
              <th>Ref</th>
              <th style="width:140px;">VAT</th>
              <th style="width:140px;">Price</th>
              <th style="width:140px;">Total Price</th>
              <th style="width:50px;">Type</th>
              <th style="width:100px;"></th>
          </tr>
          @foreach($products as $product)
          <tr class="animated fadeInUp">
            <td>{{$product->name}}</td>
            <td>{{$product->vat}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->price + ($product->price*($product->vat/100))}}</td>
            <td>
              @if($product->type == 1)
                <label class="btn btn-xs btn-primary">Product</label>
              @endif
              @if($product->type == 2)
                <label class="btn btn-xs btn-warning">Service</label>
              @endif
              @if($product->type == 3)
                <label class="btn btn-xs btn-default">Other</label>
              @endif
            </td>
            <!-- actions -->
            <td class="center">
              <a href="{{URL::to('/products/view/'.$product->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
              <a href="{{URL::to('/products/delete/'.$product->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
</div>
      </div>
    </div>
  </div>
</div>
</section>
@stop
