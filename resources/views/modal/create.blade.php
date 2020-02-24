@extends('layouts.app')
@inject('model','App\Models\CarModal')
@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">اضافه مركبة</div>
    </div>
  </div>
        <div class="box-body">
        {!! Form::model($model, ['action' => 'ModalCarController@store','enctype' => 'multipart/form-data']) !!}
      
          @include('partials.validation-errors')
          @include('modal.form')

          
      <!-- /.box -->
      <div>

    </section>

@endsection








