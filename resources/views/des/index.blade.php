@extends('layouts.app')


@section('content')
<section class="content-header">
 <div class="row">
  <div class="col-12 pa-2">
    <div class="row">
      
      <div class="col-md-6">
        <div class="content-header"> الاحياء</div>
    
          
        
        </div>
        <div class="col-md-6 text-right">
          <a type="button" href="{{url(route('des.create'))}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1 fontm"><i class="ft-plus-square fa-1x"></i>
            اضافة حىء</a>
        </div>
      </div>
    </div>
</div>
<section id="extended">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> قائمة الاحياء</h4>
        </div>
        <div class="card-content">
          <div class="card-body table-responsive">
       

      
        @include('flash::message')

       @if(count($recordes))
        <div class="table-responsive">
        <table class="table table-bordered">
       <thead>
       <tr>
        <th>#</th>
        
        <th>الاسم  </th>
        <th>خريطة جوجل  </th>
       
       
        
     
        
        <th class="text-center">تعديل  </th>
        <th class="text-center">حذف </th>
        </tr>
       </thead>
       <tbody>
       @foreach($recordes as $recorde)
        <tr>
        <td>{{$loop->iteration}} </td>
       
        <td>{{$recorde->name}} </td>
        <td>{{$recorde->gps}} </td>
       
      
 
        
        <td class="text-center">
        
          <a href="{{url(route('des.edit',$recorde->id))}}" class="btn btn-success btn-xs"> <i class="ft-edit-2 font-medium-3" ></i> </a> 
        </td>
        <td class="text-center">
        {!! Form::open ([
          'action' => ['DestinionController@destroy',$recorde->id],
                    'method' => 'delete',

        ])!!}
        <button type="submit" class="btn btn-danger"> <i class="ft-x font-medium-3"> </i> </button>

        {!! Form::close() !!}
        </td>
        </tr>

        @endforeach
       </tbody>
</table>

        
        </div>
       @else 
       <div class="alert alert-success" role="alert">
                          no Data 
                        </div>
       @endif
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

@endsection








