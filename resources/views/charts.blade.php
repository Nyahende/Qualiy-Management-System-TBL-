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
  echo $kili;
  <div class="the-canvas-div">
    <canvas id="barChart"  ></canvas>
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
        // {
        //   label               : 'Released Products',
        //   backgroundColor     : 'green',
        //   borderColor         : 'rgba(210, 214, 222, 1)',
        //   pointRadius         : false,
        //   pointColor          : 'rgba(210, 214, 222, 1)',
        //   pointStrokeColor    : '#c1c7d1',
        //   pointHighlightFill  : '#fff',
        //   pointHighlightStroke: 'rgba(220,220,220,1)',
        //   data                : [30, 100, 40, 50, 70, 25, 90]
        // },
        // {
        //   label               : 'Accidented Products',
        //   backgroundColor     : 'red',
        //   borderColor         : 'rgba(210, 214, 222, 1)',
        //   pointRadius         : false,
        //   pointColor          : 'rgba(210, 214, 222, 1)',
        //   pointStrokeColor    : '#c1c7d1',
        //   pointHighlightFill  : '#fff',
        //   pointHighlightStroke: 'rgba(220,220,220,1)',
        //   data                : [30, 40, 30, 90, 50, 40, 60]
        // },
        
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
</body>
</html>
