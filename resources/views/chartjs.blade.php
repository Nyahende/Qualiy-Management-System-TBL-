<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MY CHARTS</title>
</head>
<link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style --> 
  <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
 <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.css')}}"/>
 <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}"/>
<script src="{{asset('assets/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/plugins/chart.js/Chart.js')}}"></script>
 <link rel="stylesheet" href="{{asset('assets/plugins/chart.js/Chart.css')}}"/>
 <link rel="stylesheet" href="{{asset('assets/plugins/chart.js/Chart.min.css')}}"/>
 


<body >
  <div class="charts-filter">
    <form action="{{route('chartjs')}}" method="post">
      @csrf
    <input type="text" name="year" id="year">
    <button type="submit">Submit</button>
    </form>
    <span>showing results of year: {{$year}}</span>
  </div>
  <div class="the-canvas-div">
    <canvas id="barChart"  ></canvas>
  </div> 

    <form action="{{route('dailychartjs')}}" method="post">
      @csrf
    <input type="text" name="year" id="year">
    <input type="text" name="month" id="month">
    <button type="submit">Submit</button>
    </form>
    <span>showing results of year: {{$year}} <br>Month: {{$month}}</span>
    {{$maximum}}
  <div class="the-canvas-div">
    <canvas id="dailybarChart"  ></canvas>
  </div> 
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- BAR CHART -
    //--------------
    var arrayRec = {{@json_encode($dataRec) }};
    var arrayKiliRejRec = {{@json_encode($KiliRej) }};
    var arrayKiliRawRec = {{@json_encode($KiliRaw)}}
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#barChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      datasets: [
        {
          label               : 'Released Kili',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : arrayRec
        },
        {
          label               : 'Kili Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :arrayKiliRejRec
        },
        {
          label               : 'Kili Raw Materials',
          backgroundColor     : 'red',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : arrayKiliRawRec
        },
        
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      title:{
        display:true,
        text:['Released Kili vs Time','Source:QMS Software'],
        fontSize:25,
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'bottom'
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- DAILY BAR CHART -->

<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- BAR CHART -
    //--------------
    var dailyarrayRec = {{@json_encode($dailydataRec) }};
    var dailyarrayKiliRejRec = {{@json_encode($dailyKiliRej) }};
    var dailyarrayKiliRawRec = {{@json_encode($dailyKiliRaw)}}
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var dailyareaChartCanvas = $('#dailybarChart').get(0).getContext('2d')

    var dailybarChartData = {
      labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
      datasets: [
        {
          label               : 'Released Kili',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : dailyarrayRec
        },
        {
          label               : 'Kili Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :dailyarrayKiliRejRec
        },
        {
          label               : 'Kili Raw Materials',
          backgroundColor     : 'red',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : dailyarrayKiliRawRec
        },
        
      ]
    }

    var dailybarChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      title:{
        display:true,
        text:['Released Kili vs Time','Source:QMS Software'],
        fontSize:25,
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'bottom'
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(dailyareaChartCanvas, {
      type: 'bar',
      data: dailybarChartData,
      options: dailybarChartOptions
    });
  });
</script>
</body>
</html>
