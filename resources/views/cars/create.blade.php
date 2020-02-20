@extends('layouts.app')
@inject('model','App\Models\Car')
@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">اضافه مركبة</div>
    </div>
  </div>
        <div class="box-body">
        {!! Form::model($model, ['action' => 'CarController@store','enctype' => 'multipart/form-data']) !!}
      
          @include('partials.validation-errors')
          @include('cars.form')

          
      <!-- /.box -->
      <div>

    </section>

@endsection








