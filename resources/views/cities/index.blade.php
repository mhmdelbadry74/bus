@extends('layouts.app')


@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-12 pa-2">
      <div class="row">
        
        <div class="col-md-6">
          <div class="content-header"> المدن</div>
      
            
          
          </div>
          <div class="col-md-6 text-right">
            @if (auth()->user()->hasPermission('create_users'))
            <a type="button" href="{{url(route('cities.create'))}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1 fontm"><i class="ft-plus-square fa-1x"></i>
              اضافة مدينة</a>
              @endif
          </div>
        </div>
      </div>
  </div>
  <section id="extended">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> قائمة المدن</h4>
          </div>

          <div class="card-content">
            <div class="card-body table-responsive">
              <table class="table text-center">
      
        @include('flash::message')

       @if(count($recordes))
        <div class="table-responsive">
        <table class="table table-bordered">
       <thead>
       <tr>
        <th>#</th>
        
        <th>الاسم  </th>
       
       
        
     
        
        <th class="text-center">edit </th>
        <th class="text-center">delete </th>
        </tr>
       </thead>
       <tbody>
       @foreach($recordes as $recorde)
        <tr>
        <td>{{$loop->iteration}} </td>
       
        <td>{{$recorde->name}} </td>
       
      
 
        
        <td class="text-center">
          @if (auth()->user()->hasPermission('update_users'))
        
          <a href="{{url(route('cities.edit',$recorde->id))}}" class="btn btn-success btn-xs"> <i class="ft-edit-2 font-medium-3" ></i> </a> 
          @else
          <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> تعديل</a>
      
          @endif
        </td>
        <td class="text-center">
          @if (auth()->user()->hasPermission('delete_users'))
        {!! Form::open ([
          'action' => ['CitiesController@destroy',$recorde->id],
                    'method' => 'delete',

        ])!!}
        
        <button type="submit" class="btn btn-danger"> <i class="ft-x font-medium-3"> </i> </button>
        @else
        <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('حذف')</button>
    @endif
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








