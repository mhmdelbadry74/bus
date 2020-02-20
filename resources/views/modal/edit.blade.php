
@extends('layouts.app')
<?php  

?>
@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">تعديل مركبة</div>
    </div>
  </div>
        <div class="box-body">
        
        {!! Form::model($model,[
                    'action' => ['ModalCarController@update',$model->id],
                    'method' => 'put',
                    'enctype' => 'multipart/form-data'

                ]) !!}
       
     @include('partials.validation-errors')
     @include('modal.form')
     {!! Form::close() !!}
      <!-- /.box -->
</div>
    </section>

@endsection








