@inject('model','App\Models\Destination')
@extends('layouts.app')
@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">اضافه مدرسة</div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
  
        
        <div class="box-body">
        {!! Form::model($model, ['action' => 'DestinionController@store','enctype' => 'multipart/form-data']) !!}
      
          @include('partials.validation-errors')
          @include('des.form')

          
      <!-- /.box -->
      
        </div>
        </div>
        </div>
      </div>

    </section>

@endsection








