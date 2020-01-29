
@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
      car Modal  
       
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
          <h3 class="box-title">LIST Modal  </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>



        




        <div class="box-body">
        <a href="{{url(route('modal.create'))}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Add car  modal  </a>

      
        @include('flash::message')

       @if(count($recordes))
        <div class="table-responsive">
        <table class="table table-bordered">
       <thead>
       <tr>
        <th>#</th>
        
        <th>الاسم  </th>
        <th>Modal   </th>
       
       
        
     
        
        <th class="text-center">edit </th>
        <th class="text-center">delete </th>
        </tr>
       </thead>
       <tbody>
       @foreach($recordes as $recorde)
        <tr>
        <td>{{$loop->iteration}} </td>
       
        <td>{{$recorde->name}} </td>
        <td>{{optional($recorde->admin_cars)->name}} </td>
       
       
      
 
        
        <td class="text-center">
        
          <a href="{{url(route('modal.edit',$recorde->id))}}" class="btn btn-success btn-xs"> <i class="fa fa-edit" ></i> </a> 
        </td>
        <td class="text-center">
        {!! Form::open ([
          'action' => ['ModalCarController@destroy',$recorde->id],
                    'method' => 'delete',

        ])!!}
        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash-o"> </i> </button>

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








