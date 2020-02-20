@extends('layouts.app')


@section('content')
<section class="content-header">
      
  <div class="row">
    <div class="col-12 pa-2">
      <div class="row">
        
        <div class="col-md-6">
          <div class="content-header"> الاشتراكات </div>
      
            
          
          </div>
         
        </div>
      </div>

    </div>
    <section id="extended">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> قائمة الاشتراكات</h4>
            </div>
            <div class="card-content">
              <div class="card-body table-responsive">

        
        



        <div class="box-body">
      
      
        @include('flash::message')

       @if(count($recordes))
     
        <div class="table-responsive">
        <table class="table table-bordered">
       <thead>
       <tr>
        <th>#</th>
        <th>اسم العميل </th>
        <th>اسم الطفل</th>
        <th>اسم السائق</th>
               </tr>
       </thead>
       <tbody>
       @foreach($recordes as $recorde)
        <tr>
        
        <td>{{$loop->iteration}} </td>
        <td>{{optional($recorde->clients->drclients)->name}}</td>
        <td>{{optional($recorde->kids)->name}}</td>
        <td>{{optional($recorde->drivers->drclients)->name}}</td>
       
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








