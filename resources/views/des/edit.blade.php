
@extends('layouts.app')
<?php  

?>
@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">تعديل المدرسة </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="box-body">
        
        {!! Form::model($model,[
                    'action' => ['DestinionController@update',$model->id],
                    'method' => 'put',
                    'enctype' => 'multipart/form-data'

                ]) !!}
       
     @include('partials.validation-errors')
     @include('des.form')
     {!! Form::close() !!}
      <!-- /.box -->
</div>
    </section>

@endsection








