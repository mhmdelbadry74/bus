
@extends('layouts.app')
<?php  

?>
@section('content')
<section class="content-header">
      <h1>
       City
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
 

      <!-- Default box -->
      <div class="box">
        
        <div class="box-header with-border">
          <h3 class="box-title">Edit City </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        
        {!! Form::model($model,[
                    'action' => ['CitiesController@update',$model->id],
                    'method' => 'put',
                    'enctype' => 'multipart/form-data'

                ]) !!}
       
     @include('partials.validation-errors')
     @include('cities.form')
     {!! Form::close() !!}
      <!-- /.box -->
</div>
    </section>

@endsection







