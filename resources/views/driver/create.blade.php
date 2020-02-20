
@extends('layouts.app')
@inject('model','App\Models\City')

@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">اضافه مستخدم</div>
    </div>
  </div>
        <div class="box-body">
        {!! Form::model($model,['action' => 'DriverController@store','enctype' => 'multipart/form-data']) !!}
      
          @include('partials.validation-errors')
          @include('driver.form')

          
      <!-- /.box -->
      <div>

    </section>

@endsection








