@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
      driver  
       
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
          <h3 class="box-title">LIST driver  </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>



        




        <div class="box-body">
      
      
        @include('flash::message')

       @if(count($recordes))
     
        <div class="table-responsive">
        <table class="table table-bordered">
       <thead>
       <tr>
        <th>#</th>
        
        <th>الاسم  </th>
       
       
        <th class="text-center">statue  </th>
        
        <th class="text-center">active   </th>
        <th class="text-center">عرض الطلب  </th>
     
        
      
        </tr>
       </thead>
       <tbody>
       @foreach($recordes as $recorde)
        <tr>
          @if($recorde->statue == 'desactive')
        <td>{{$loop->iteration}} </td>
       
        <td>{{$recorde->name}} </td>
        @if($recorde->statues == 1)
        <td class="text-center">
            مفعل
        </td>
        <td class="text-center">
            <a href="active/{{$recorde->id}}">
                <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-"></i> مفعل </button>
            </a>
        </td>
    @else
        <td class="text-center">
           غير مفعل 
        </td>
        <td class="text-center">
            <a href="disactive/{{$recorde->id}}">
                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-"></i>غير مفعل </button>
            </a>
        </td>
        <td class="text-center">
        
          <a href="{{url(route('driver.show',$recorde->id))}}" class="btn btn-default btn-xs"> <i class="fa fa-eye" ></i> </a> 
        </td>
    @endif

        @endif
      
 
        
       
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








