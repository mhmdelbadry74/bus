
@extends('layouts.app')

@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">تعديل  مدينة</div>
    </div>
  </div>
        
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








