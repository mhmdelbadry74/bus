@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-12">
<div class="card gradient-blackberry">
  <div class="card-content">
    <div class="card-body pt-2 pb-0">
      <div class="media">
        <div class="media-body white text-left">
          <h3 class="font-large-1 mb-0">75</h3>
          <span>الاشتراكات</span>
        </div>
        <div class="media-right white text-right">
          <i class="icon-pie-chart font-large-1"></i>
        </div>
      </div>
    </div>
    <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
    </div>
  </div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-12">
<div class="card gradient-ibiza-sunset">
  <div class="card-content">
    <div class="card-body pt-2 pb-0">
      <div class="media">
        <div class="media-body white text-left">
          <h3 class="font-large-1 mb-0">8755 ريال</h3>
          <span>التكاليف</span>
        </div>
        <div class="media-right white text-right">
          <i class="icon-bulb font-large-1"></i>
        </div>
      </div>
    </div>
    <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
    </div>

  </div>
</div>
</div>

<div class="col-xl-3 col-lg-6 col-md-6 col-12">
<div class="card gradient-green-tea">
  <div class="card-content">
    <div class="card-body pt-2 pb-0">
      <div class="media">
        <div class="media-body white text-left">
          <h3 class="font-large-1 mb-0">375</h3>
          <span>المستخدمين</span>
        </div>
        <div class="media-right white text-right">
          <i class="icon-graph font-large-1"></i>
        </div>
      </div>
    </div>
    <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
    </div>
  </div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-12">
<div class="card gradient-pomegranate">
  <div class="card-content">
    <div class="card-body pt-2 pb-0">
      <div class="media">
        <div class="media-body white text-left">
          <h3 class="font-large-1 mb-0">8745 ريال</h3>
          <span>اجمالي الدخل</span>
        </div>
        <div class="media-right white text-right">
          <i class="icon-wallet font-large-1"></i>
        </div>
      </div>
    </div>
    <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
    </div>
  </div>
</div>
</div>
</div>

<div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">المستخدمين والاشتراكات</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="chart-info mb-3 ml-3">
              <span class="gradient-blackberry d-inline-block rounded-circle mr-1" style="width:15px; height:15px;"></span>
              الاشتراكات
              <span class="gradient-mint d-inline-block rounded-circle mr-1 ml-2" style="width:15px; height:15px;"></span>
              المستخدمين
            </div>
            <div id="line-area" class="height-350 lineArea">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  </div>
          </div>
@endsection
