@extends('admin.admin')
@section('css')
@parent
@endsection
@section('thongke')
  <li class="nav-item active" >
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Thống kê</span></a>
    </li>
@endsection()
@section('tenbang')
  <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Thống kê</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
  </ol>
@endsection
@section('table')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<h1 style="text-align: center;"> Doanh thu </h1>
<div id="myfirstchart" style="height: 250px;"></div>

<script type="text/javascript">
  new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    @foreach($thongke as $thongkes)
    { year: '{{ \Carbon\Carbon::parse($thongkes->thang)->format("m") }}/{{ \Carbon\Carbon::parse($thongkes->thang)->format("y") }}', value: {{ $thongkes->tong_tien }} },
    @endforeach
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Doanh thu']
});
</script>
@endsection

