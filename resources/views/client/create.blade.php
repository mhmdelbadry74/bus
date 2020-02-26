
@extends('layouts.app')
@inject('model','App\Models\City')

@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">اضافه عميل</div>
    </div>
  </div>
        <div class="box-body">
        {!! Form::model($model,['action' => 'ClientController@store','enctype' => 'multipart/form-data']) !!}
      
          @include('partials.validation-errors')
          @include('client.form')

          
      <!-- /.box -->
      <div>

    </section>

@endsection








