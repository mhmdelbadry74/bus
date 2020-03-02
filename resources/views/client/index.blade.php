@extends('layouts.app')


@section('content')
<section class="content-header">
 
  <div class="row">
  <div class="col-12 pa-2">
    <div class="row">
      
      <div class="col-md-6">
        <div class="content-header"> العملاء</div>
    
          
        
        </div>
        <div class="col-md-6 text-right">
          @if (auth()->user()->hasPermission('create_users'))
          <a type="button" href="{{url(route('client.create'))}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1 fontm"><i class="ft-plus-square fa-1x"></i>
            اضافة عميل</a>
          
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
          <h4 class="card-title"> قائمة العملاء</h4>
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
          @if($recorde->type == 'client')
        <td>{{$loop->iteration}} </td>
       
        <td>{{$recorde->name}} </td>
        @if($recorde->statue== 'active')
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
        @endif

        <td class="text-center">
        
          <a href="{{url(route('client.show',$recorde->id))}}" class="btn btn-success btn-xs"> <i class="ft-eye font-medium-3 " ></i> </a> 
        </td>
    

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








