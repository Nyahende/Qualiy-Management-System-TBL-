<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Statistics</title>
</head>
    <script src="https://kit.fontawesome.com/00cc939b56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/qms.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/statistics.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/competence.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/css/jquery-ui.theme.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.theme.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>

     <!-- Charts Links -->
    
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style --> 
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
<body>
    <div class="homeheader" style="background:url({{asset('images/waterdrops.jpg')}})">
    
        <h1 class="homeheaderwelcome">
            THIS IS THE STATISTICS PAGE OF OUR QMS
        </h1>
        
        <h1 class="homeQpolicy">
            This is our Quality Policy
        </h1>
       
        <div class="passportdiv">
        <!-- <img src="" alt="" class="passport">
        <h1 class="passname">Michael Nyahende</h1> -->
        <button type="" class="logoutbtn"><a href="pull">Logout</a></button>
        </div>
    </div>
    <div class="fonts">
    <div class="releaseddiv"><a href="quality">
   <i class="fas fa-file-contract" style="font-size:50px; padding:50px;color:red;"></i>
   <h1 class='fontsh1'>HOME</h1>
   </a>
   </div>
   <div class="releaseddiv"><a href="sop">
   <i class="fas fa-file-contract" style="font-size:50px; padding:50px;color:red;"></i>
   <h1 class='fontsh1'>SOPs</h1>
   </a>
   </div>
   
   <div class="releaseddiv"><a href="released">
   <i class="fas fa-dolly" style="font-size:50px; padding:50px;color:red;"></i>
   <h1 class='fontsh1'>Released Products</h1>
   </a>
   </div>
   <div class="releaseddiv"><a href="rejects">
   <i class="fas fa-exclamation-triangle" style="font-size:50px; padding:50px;color:red"></i>
   <h1 class='nonh1'>Rejects</h1>
   </a>
   </div>
   <div class="releaseddiv"><a href="audit">
   <i class="fas fa-tasks" style="font-size:50px; padding:50px;color:red"></i>
   <h1 class='fontsh1'>Audit</h1>
   </a>
   </div>
   <div class="releaseddiv"><a href="management">
   <i class="fas fa-file-pdf" style="font-size:50px; padding:50px;color:red"></i>
   <h1 class='fontsh1'>Management Review</h1>
   </a>
   </div>
   <div class="releaseddiv"><a href="archive">
   <i class="fas fa-archive" style="font-size:50px; padding:50px;color:red"></i>
   <h1 class='fontsh1'>Archive</h1>
   </a>
   </div> 
   <div class="releaseddiv"><a href="statistics">
   <i class="fas fa-chart-line" style="font-size:50px; padding:50px;color:red"></i>
   <h1 class='fontsh1'>Statistics</h1>
   </a>
   </div>
   </div>
   
   <div id="stat-tabbed-panel">
       <div class="stat-tabbed-ul">
       <ul>
           <li class="active"><a href="#rmrpr" > Released Products vs Rejects vs Time</a></li> <hr>
           <li ><a href="#rp">Released Products vs Time</a></li> <hr>
           <li ><a href="#rj">Rejects Products vs Time</a></li> <hr>
       </ul>
       </div>
       <div class="stat-tab-content">


         <!-- CHARTS FOR ALL -->


       <div id="rmrpr">
       <div class="inner-stat-tabbed-panel">
           <div class="inner-stat-tabbed-ul">
             <ul>
               <li  class="active"><a href="#inner-kili">KILI RECORDS</a></li> 
               <li><a href="#inner-safari">SAFARI RECORDS</a></li>
               <li><a href="#inner-castle-lager">CASTLE LAGER RECORDS</a></li>
               <li><a href="#inner-castle-lite">CASTLE LITE RECORDS</a></li>
             </ul>
           </div>
           <div id="inner-kili">
           <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">KILIMANJARO MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
       <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="barChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($total)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($maximum)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($min)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($avg, 2))}} </span>

        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($rejtotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($maximumrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($minrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average:{{number_format(round($rejavg, 2))}} </span>
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

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#barChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Released Kili',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
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
     
        
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Kili vs Rejects Kili vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
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

<!-- DAILY CHART RECORDS -->
    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="dailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($dailytotal)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($dailymaximum)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($dailymin)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($dailyavg, 2))}} </span>
        <h1 class="canvas-side-div-h1">Rejects</h1>
       <span class="canvas-side-div-span">Daily Total: {{number_format($dailytotalrejkili)}}</span><br>
       <span class="canvas-side-div-span">Daily Maximum: {{number_format($dailymaxrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($dailyminrej)}}</span><br>
        <span class="canvas-side-div-span" >Daily Average:{{number_format(round($dailyavgrejkili, 2))}} </span>
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
    var dailyarrayRec = {{@json_encode($dailydataRec) }};
    var dailyarrayKiliRejRec = {{@json_encode($dailyKiliRej) }};
    var dailyarrayKiliRawRec = {{@json_encode($dailyKiliRaw)}}
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var barChartCanvas = $('#dailybarChart').get(0).getContext('2d')

    var barChartData = {
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
        
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Kili vs Rejects Kili vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>
           </div>
           <div id="inner-safari">

             <!-- SAFARI CHART RECORDS -->

         <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">SAFARI MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
        <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="safaribarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($safaritotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($safarimaximum)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($safarimin)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($safariavg, 2))}} </span>
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($safarirejtotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($safarimaximumrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($safariminrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($safarirejavg, 2))}} </span>
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
    var safariarrayRec = {{@json_encode($safaridataRec) }};
    var arraySafariRejRec = {{@json_encode($SafariRej) }};

    // Get context with jQuery - using jQuery's .get() method.
    var safariareaChartCanvas = $('#safaribarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Released Safari',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : safariarrayRec
        },   
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :arraySafariRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Safari vs Safari Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(safariareaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">SAFARI DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="safaridailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($safaridailytotal)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($safaridailymaximum)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($safaridailymin)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($safaridailyavg, 2))}} </span>
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($dailytotalrejsafari)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($safaridailymaxrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($safaridailyminrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($dailyavgrejsafari, 2))}} </span>
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
    var safaridailyarrayRec = {{@json_encode($safaridailydataRec) }};
    var dailyarraySafariRejRec = {{@json_encode($dailySafariRej) }};
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var safaridailybarChartCanvas = $('#safaridailybarChart').get(0).getContext('2d')

    var barChartData = {
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
          data                : safaridailyarrayRec
        },
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :dailyarraySafariRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Safari vs Safari Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(safaridailybarChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

           </div>
           <div id="inner-castle-lager">

                 <!-- CASTLE LAGER RECORDS -->

         
         <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">CASTLE LAGER MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
        <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="clagerbarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($calagertotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($clagermaximum)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($clagermin)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($clageravg, 2))}} </span>
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($clagerrejtotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($clagermaximumrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($clagerminrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($clagerrejavg, 2))}} </span>
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
    var clagerarrayRec = {{@json_encode($clagerdataRec) }};
    var arrayClagerRejRec = {{@json_encode($ClagerRej) }};

    // Get context with jQuery - using jQuery's .get() method.
    var clagerareaChartCanvas = $('#clagerbarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Released Safari',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : clagerarrayRec
        },   
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :arrayClagerRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Castle Lager vs Castle Lager Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(clagerareaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">CASTLE LAGER DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="clagerdailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($clagerdailytotal)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($clagerdailymaximum)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($clagerdailymin)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($clagerdailyavg, 2))}} </span>
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($dailytotalrejclager)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($clagerdailymaxrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($clagerdailyminrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($dailyavgrejclager, 2))}} </span>
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
    var clagerdailyarrayRec = {{@json_encode($clagerdailydataRec) }};
    var dailyarrayClagerRejRec = {{@json_encode($dailyClagerRej) }};
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var clagerdailybarChartCanvas = $('#clagerdailybarChart').get(0).getContext('2d')

    var barChartData = {
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
          data                : clagerdailyarrayRec
        },
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :dailyarrayClagerRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Castle Lager vs Castle Lager Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(clagerdailybarChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>
</div>
           <div id="inner-castle-lite">

              <!-- CASTLE LITE CHART RECORDS -->

         
      <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">CASTLE LITE MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
        <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="clitebarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($clitetotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($clitemaximum)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($clitemin)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($cliteavg, 2))}} </span>
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($cliterejtotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($clitemaximumrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($cliteminrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($cliterejavg, 2))}} </span>
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
    var clitearrayRec = {{@json_encode($clitedataRec) }};
    var arrayCliteRejRec = {{@json_encode($CliteRej) }};

    // Get context with jQuery - using jQuery's .get() method.
    var cliteareaChartCanvas = $('#clitebarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Released Safari',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : clitearrayRec
        },   
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :arrayCliteRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Castle Lite vs Castle Lite Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(cliteareaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- CASTLE LITE DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">CASTLE LITE DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="clitedailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($clitedailytotal)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($clitedailymaximum)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($clitedailymin)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($clitedailyavg, 2))}} </span>
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($dailytotalrejclite)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($clitedailymaxrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($clitedailyminrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($dailyavgrejclite, 2))}} </span>
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
    var clitedailyarrayRec = {{@json_encode($clitedailydataRec) }};
    var dailyarrayCliteRejRec = {{@json_encode($dailyCliteRej) }};
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var clitedailybarChartCanvas = $('#clitedailybarChart').get(0).getContext('2d')

    var barChartData = {
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
          data                : clitedailyarrayRec
        },
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :dailyarrayCliteRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Castle Lager vs Castle Lager Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(clitedailybarChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>
</div>
</div>
</div>

     <!-- END ALL -->


       <!-- RELEASED PRODUCTS START-->

       <div id="rp">
       <div class="inner-stat-tabbed-panel">
           <div class="inner-stat-tabbed-ul">
             <ul>
               <li  class="active"><a href="#inner-kili">KILI RECORDS</a></li> 
               <li><a href="#inner-safari">SAFARI RECORDS</a></li>
               <li><a href="#inner-castle-lager">CASTLE LAGER RECORDS</a></li>
               <li><a href="#inner-castle-lite">CASTLE LITE RECORDS</a></li>
             </ul>
           </div>
           <div id="inner-kili">
           <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
       <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="released-kilibarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($total)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($maximum)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($min)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($avg, 2))}} </span>
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
    var areaChartCanvas = $('#released-kilibarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Released Kili',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : arrayRec
        },
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Kili vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
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

<!-- DAILY CHART RECORDS -->
    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
</div> 
      <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
      <canvas id="releaseddailybarChart"  ></canvas>
      </div>
      <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($dailytotal)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($dailymaximum)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($dailymin)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($dailyavg, 2))}} </span>
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
    var dailyarrayRec = {{@json_encode($dailydataRec) }};
    
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var barChartCanvas = $('#releaseddailybarChart').get(0).getContext('2d')

    var barChartData = {
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
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Kili vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>
           </div>
           <div id="inner-safari">

             <!-- SAFARI CHART RECORDS -->

         <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">SAFARI MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
        <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="releasedsafaribarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($safaritotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($safarimaximum)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($safarimin)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($safariavg, 2))}} </span>
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
    var safariarrayRec = {{@json_encode($safaridataRec) }};

    // Get context with jQuery - using jQuery's .get() method.
    var safariareaChartCanvas = $('#releasedsafaribarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Released Safari',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : safariarrayRec
        },      
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Safari vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(safariareaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">SAFARI DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="releasedsafaridailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($safaridailytotal)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($safaridailymaximum)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($safaridailymin)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($safaridailyavg, 2))}} </span>
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
    var safaridailyarrayRec = {{@json_encode($safaridailydataRec) }};
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var safaridailybarChartCanvas = $('#releasedsafaridailybarChart').get(0).getContext('2d')

    var barChartData = {
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
          data                : safaridailyarrayRec
        },   
      ]
    }
    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Safari vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(safaridailybarChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

           </div>
           <div id="inner-castle-lager">

                 <!-- CASTLE LAGER RECORDS -->

         
         <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">CASTLE LAGER MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
        <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="releasedclagerbarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($calagertotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($clagermaximum)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($clagermin)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($clageravg, 2))}} </span>
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
    var clagerarrayRec = {{@json_encode($clagerdataRec) }};

    // Get context with jQuery - using jQuery's .get() method.
    var clagerareaChartCanvas = $('#releasedclagerbarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Released Safari',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : clagerarrayRec
        },      
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Castle Lager vs  Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(clagerareaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">CASTLE LAGER DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="releasedclagerdailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($clagerdailytotal)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($clagerdailymaximum)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($clagerdailymin)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($clagerdailyavg, 2))}} </span>
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
    var clagerdailyarrayRec = {{@json_encode($clagerdailydataRec) }};

    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var clagerdailybarChartCanvas = $('#releasedclagerdailybarChart').get(0).getContext('2d')

    var barChartData = {
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
          data                : clagerdailyarrayRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Castle Lager vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(clagerdailybarChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>
</div>
           <div id="inner-castle-lite">

              <!-- CASTLE LITE CHART RECORDS -->

         
      <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">CASTLE LITE MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
        <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="releasedclitebarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($clitetotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($clitemaximum)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($clitemin)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($cliteavg, 2))}} </span>
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
    var clitearrayRec = {{@json_encode($clitedataRec) }};

    // Get context with jQuery - using jQuery's .get() method.
    var cliteareaChartCanvas = $('#releasedclitebarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Released Safari',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : clitearrayRec
        },      
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Castle Lite vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(cliteareaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- CASTLE LITE DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">CASTLE LITE DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="releasedclitedailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Released</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($clitedailytotal)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($clitedailymaximum)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($clitedailymin)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($clitedailyavg, 2))}} </span>
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
    var clitedailyarrayRec = {{@json_encode($clitedailydataRec) }};
    var dailyarrayCliteRejRec = {{@json_encode($dailyCliteRej) }};
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var clitedailybarChartCanvas = $('#releasedclitedailybarChart').get(0).getContext('2d')

    var barChartData = {
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
          data                : clitedailyarrayRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Castle Lite vs  Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(clitedailybarChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>
</div>
       </div>
       </div>
       <div id="rj">
       <div class="inner-stat-tabbed-panel">
           <div class="inner-stat-tabbed-ul">
             <ul>
               <li  class="active"><a href="#inner-kili">KILI RECORDS</a></li> 
               <li><a href="#inner-safari">SAFARI RECORDS</a></li>
               <li><a href="#inner-castle-lager">CASTLE LAGER RECORDS</a></li>
               <li><a href="#inner-castle-lite">CASTLE LITE RECORDS</a></li>
             </ul>
           </div>
           <div id="inner-kili">
           <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">KILIMANJARO MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
       <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="rejectsbarChart" ></canvas>
       </div>
       <div class="canvas-side-div" >    
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($rejtotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($maximumrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($minrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average:{{number_format(round($rejavg, 2))}} </span>
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
    var arrayKiliRejRec = {{@json_encode($KiliRej) }};

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#rejectsbarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],     
      datasets: [
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
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Kili Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
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

<!-- DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">KILIMANJARO DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="rejectsdailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Daily Total: {{number_format($dailytotalrejkili)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($dailymaxrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($dailyminrej)}}</span><br>
        <span class="canvas-side-div-span" >Daily Average:{{number_format(round($dailyavgrejkili, 2))}} </span>
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
    var dailyarrayKiliRejRec = {{@json_encode($dailyKiliRej) }};
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var barChartCanvas = $('#rejectsdailybarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
      datasets: [
        
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
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Kili Rejcts vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>
           </div>
           <div id="inner-safari">

             <!-- SAFARI CHART RECORDS -->

         <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">SAFARI MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
        <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="rejectssafaribarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($safarirejtotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($safarimaximumrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($safariminrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($safarirejavg, 2))}} </span>
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
    var arraySafariRejRec = {{@json_encode($SafariRej) }};

    // Get context with jQuery - using jQuery's .get() method.
    var safariareaChartCanvas = $('#rejectssafaribarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [  
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :arraySafariRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Safari Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(safariareaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">SAFARI DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="rejectssafaridailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($dailytotalrejsafari)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($safaridailymaxrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($safaridailyminrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($dailyavgrejsafari, 2))}} </span>
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
    var dailyarraySafariRejRec = {{@json_encode($dailySafariRej) }};

    // Get context with jQuery - using jQuery's .get() method.
    var safaridailybarChartCanvas = $('#rejectssafaridailybarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
      datasets: [
       
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :dailyarraySafariRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Safari Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(safaridailybarChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

           </div>
           <div id="inner-castle-lager">

                 <!-- CASTLE LAGER RECORDS -->

         
         <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">CASTLE LAGER MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
        <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="rejectsclagerbarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($clagerrejtotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($clagermaximumrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($clagerminrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($clagerrejavg, 2))}} </span>
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
    var arrayClagerRejRec = {{@json_encode($ClagerRej) }};

    // Get context with jQuery - using jQuery's .get() method.
    var clagerareaChartCanvas = $('#rejectsclagerbarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [  
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :arrayClagerRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Castle Lager Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(clagerareaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">CASTLE LAGER DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="get">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="rejectsclagerdailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($dailytotalrejclager)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($clagerdailymaxrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($clagerdailyminrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($dailyavgrejclager, 2))}} </span>
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
    var dailyarrayClagerRejRec = {{@json_encode($dailyClagerRej) }};
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var clagerdailybarChartCanvas = $('#rejectsclagerdailybarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
      datasets: [
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :dailyarrayClagerRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Castle Lager Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(clagerdailybarChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>
</div>
           <div id="inner-castle-lite">

              <!-- CASTLE LITE CHART RECORDS -->

         
      <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
         <h1 class="charts-header">CASTLE LITE MONTHLY CHART RECORDS</h1>
         <div class="charts-filter">
        <form action="{{route('statistics')}}" method="post">
         @csrf
        <input type="text" name="year" class="year-input" placeholder="Type a year to display, eg:2022">
        <button type="submit" class="filter-stat-button">Search</button>
        </form>
        <span class="chart-results">showing results of year: {{$year}}</span>
        </div>
        </div>
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="rejectsclitebarChart"  ></canvas>
       </div>
       <div class="canvas-side-div" >
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Yearly Total: {{number_format($cliterejtotal)}}</span><br>
        <span class="canvas-side-div-span">Monthly Maximum: {{number_format($clitemaximumrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Minimum: {{number_format($cliteminrej)}}</span><br>
        <span class="canvas-side-div-span">Monthly Average: {{number_format(round($cliterejavg, 2))}} </span>
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
    var arrayCliteRejRec = {{@json_encode($CliteRej) }};

    // Get context with jQuery - using jQuery's .get() method.
    var cliteareaChartCanvas = $('#rejectsclitebarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [   
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :arrayCliteRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:['Castle Lite vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(cliteareaChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>

<!-- CASTLE LITE DAILY CHART RECORDS -->

    <div class="above-canvas" style="background:url({{asset('images/moon.jpg')}})">
     <h1 class="charts-header">CASTLE LITE DAILY CHART RECORDS</h1>
      <div class="charts-filter">
      <form action="{{route('statistics')}}" method="post">
      @csrf
    <input type="text" name="year" id="year" placeholder="Type a year to display, eg:2022" class="year-input">
    <input type="text" name="month" id="month" placeholder="month to display, eg:02" class="year-input">
    <button type="submit" class="filter-stat-button">Submit</button>
    </form>
    <span class="chart-results">showing results of year: {{$year}} <br>Month: {{$month}}</span>
</div> 
        </div> 
        <div class="the-canvas-div" style="background:url({{asset('images/nature-side.jpg')}})">
       <canvas id="rejectsclitedailybarChart"  ></canvas>
       </div>
       <div class="canvas-side-div">
        <h1 class="canvas-side-div-h1">Rejects</h1>
        <span class="canvas-side-div-span">Monthly Total: {{number_format($dailytotalrejclite)}}</span><br>
        <span class="canvas-side-div-span">Daily Maximum: {{number_format($clitedailymaxrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Minimum: {{number_format($clitedailyminrej)}}</span><br>
        <span class="canvas-side-div-span">Daily Average: {{number_format(round($dailyavgrejclite, 2))}} </span>
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
    var dailyarrayCliteRejRec = {{@json_encode($dailyCliteRej) }};
    // var arrayRecLast = {{@json_encode($dataRecLast)}};

    // Get context with jQuery - using jQuery's .get() method.
    var clitedailybarChartCanvas = $('#rejectsclitedailybarChart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['Day 01', 'Day 02', 'Day 03', 'Day 04', 'Day 05', 'Day 06', 'Day 07','Day 08','Day 09','Day 10','Day 11','Day 12','Day 13', 'Day 14', 'Day 15', 'Day 16', 'Day 17', 'Day 18', 'Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31'],
      datasets: [
        {
          label               : 'Safari Rejects',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :dailyarrayCliteRejRec
        },    
      ]
    }

    var barChartOptions = {
      responsive              : false,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales:{
        yAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'white',
          },
        }],
        },
      title:{
        display:true,
        text:[' Castle Lite Rejects vs Time','Source:Quality Management System'],
        fontSize:18,
        fontColor:'white',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'white',
        }
      }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(clitedailybarChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    });
  });
</script>
</div>
       </div>
       </div>
       
       </div>
    </div>
   <div class="statqmsteam">
       <h1>QUALITY MANAGEMENT DEPARTMENT TEAM</h1>
       <div class="theqmul">
           <ul>
               <li>AnaMagreth Andrew
                   <div class="memberdetails">
                   <ul>
                       <li>Position:Q.A Manager</li>
                       <li>Phone:+255784392668</li>
                       <li>Email:Ana@gmail.com</li>
                   </ul>
                   </div>
               </li>
               <li>Godrule Mrema
               <div class="memberdetails">
                    <ul>
                       <li>Position:Q.A Manager</li>
                       <li>Phone:+255784392668</li>
                       <li>Email:Ana@gmail.com</li>
                    </ul>
                   </div>
               </li>
               <li>Michael Nyahende
               <div class="memberdetails">
                    <ul>
                       <li>Position:Q.A Manager</li>
                       <li>Phone:+255784392668</li>
                       <li>Email:Ana@gmail.com</li>
                    </ul>
                   </div>
               </li>
               <li>David Mirambo
               <div class="memberdetails">
                    <ul>
                       <li>Position:Q.A Manager</li>
                       <li>Phone:+255784392668</li>
                       <li>Email:Ana@gmail.com</li>
                   </ul>
                   </div>
               </li>
               <li>Benson Lyatuu
               <div class="memberdetails">
                    <ul>
                       <li>Position:Q.A Manager</li>
                       <li>Phone:+255784392668</li>
                       <li>Email:Ana@gmail.com</li>
                    </ul>
                   </div>
               </li>
           </ul>
       </div>
   </div>
</body>
</html>