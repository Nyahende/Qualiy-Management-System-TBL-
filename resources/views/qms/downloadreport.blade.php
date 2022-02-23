<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | REPORTING</title>
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
    <div class="chaticon">
    
    <i class="fas fa-comments" id="chaticon"style="color:white;font-size: 150px;"></i>
    <h1 class="chatword">CHATS</h1>
    </div>
        <h1 class="homeheaderwelcome">
            Welcome to the Quality Management System 
        </h1>
        <h1 class="loginfor">Login or signup for more Adventure</h1>
        <h1 class="homeQpolicy">
            This is our Quality Policy
        </h1>
        <!-- <div class="authbuttonshome">
        <button id="loginslide">Login</button>
        <button id="signupslide">Signup</button>
        </div> -->
        <div class="passportdiv">
        <img src="" alt="" class="passport">
        <h1 class="passname">Michael Nyahende</h1>
        <button type="" class="logoutbtn">Logout</button>
        </div>
    </div>
    <div class="fonts">
   <div class="releaseddiv"><a href="sop">
   <i class="fas fa-file-contract" style="font-size:50px; padding:50px;color:red;"></i>
   <h1 class='fontsh1'>SOPs</h1>
   </a>
   </div>
   <div class="releaseddiv"><a href="rawmaterials">
   <i class="fas fa-align-center" style="font-size:50px; padding:50px;color:red;"></i>
   <h1 class='fontsh1'>Raw Materials Used</h1>
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
   <div class="the-report-div">
       <div class="duration-title">
       <h1>YEARLY QMS REPORT</h1>
   </div>
   <div class="report-title-form">
       <form action="{{route('report-year')}}" method="post">
           @csrf
           <input type="text" id="reportyear" name="reportyear" placeholder="Year of the report"> <br> <br>
           <input type="text" id="reporter-name" name="reportername" placeholder="Name of the reporter"> <br> <br>
           <button type="submit" id="report-tittle-form-button">SUBMIT</button>
       </form>
   </div>
   </div>
   <div class="the-report">
   <div class="the-report-tables">


           <!-- RELEASED TABLES -->


       <h1>YEARLY RELEASED-KILIMANJARO</h1>
       <table class="report-tables">
           <tr>
               <th>Total</th>
               <th>Monthly Max</th>
               <th>Monthly Min</th>
               <th>Monthyl Avg</th>
           </tr>
           <tr>
               <td>{{$total}}</td>
               <td>{{$maximum}}</td>
               <td>{{$min}}</td>
               <td>{{$avg}}</td>
           </tr>
       </table>
       <form action="{{route('kili-comment')}}" method="post" class="report-comment-form">
           @csrf
           <span class="table-comments">Comments:</span><input type="text" id="kili-yearly-comment" name="kiliyearlycomment" placeholder="Comments if any">
           <button type="submit" id="kili-yearly-comment">Submit</button>
       </form>
       <h1>YEARLY RELEASED-SAFARI</h1>
       <table class="report-tables">
           <tr>
               <th>Total</th>
               <th>Monthly Max</th>
               <th>Monthly Min</th>
               <th>Monthyl Avg</th>
           </tr>
           <tr>
               <td>{{$safaritotal}}</td>
               <td>{{$safarimaximum}}</td>
               <td>{{$safarimin}}</td>
               <td>{{$safariavg}}</td>
           </tr>
       </table>
       <form action="{{route('safari-comment')}}" method="post" class="report-comment-form">
           @csrf
           <span class="table-comments">Comments:</span><input type="text" id="safari-yearly-comment" name="safariyearlycomment"  placeholder="Comments if any">
           <button type="submit" id="safari-yearly-comment">Submit</button>
       </form>
       <h1>YEARLY RELEASED-CASTLE LAGER</h1>
       <table class="report-tables">
           <tr>
               <th>Total</th>
               <th>Monthly Max</th>
               <th>Monthly Min</th>
               <th>Monthyl Avg</th>
           </tr>
           <tr>
               <td>{{$clagertotal}}</td>
               <td>{{$clagermaximum}}</td>
               <td>{{$clagermin}}</td>
               <td>{{$clageravg}}</td>
           </tr>
       </table>
       <form action="{{route('clager-comment')}}" method="post" class="report-comment-form">
           @csrf
           <span class="table-comments">Comments:</span><input type="text" id="clager-yearly-comment" name="clageryearlycomment" placeholder="Comments if any">
           <button type="submit" id="clager-yearly-comment">Submit</button>
       </form>
       <h1>YEARLY RELEASED-CASTLE LITE</h1>
       <table class="report-tables">
           <tr>
               <th>Total</th>
               <th>Monthly Max</th>
               <th>Monthly Min</th>
               <th>Monthyl Avg</th>
           </tr>
           <tr>
               <td>{{ $clitetotal}}</td>
               <td>{{$clitemaximum}}</td>
               <td>{{$clitemin}}</td>
               <td>{{$cliteavg}}</td>
           </tr>
       </table>

       <form action="{{route('clite-comment')}}" method="post" class="report-comment-form">
           @csrf
           <span class="table-comments">Comments:</span><input type="text" id="clite-yearly-comment" name="cliteyearlycomment" placeholder="Comments if any">
           <button type="submit" id="clite-yearly-comment">Submit</button>
       </form>


       <!-- YEARLY REJECTS -->

       <h1>YEARLY REJECTS-KILIMANJARO</h1>
       <table class="report-tables">
           <tr>
               <th>Total</th>
               <th>Monthly Max</th>
               <th>Monthly Min</th>
               <th>Monthyl Avg</th>
           </tr>
           <tr>
               <td>{{$rejtotal}}</td>
               <td>{{ $maximumrej}}</td>
               <td>{{$minrej}}</td>
               <td>{{ $rejavg}}</td>
           </tr>
       </table>

       <form action="{{route('kilirej-comment')}}" method="post" class="report-comment-form">
           @csrf
           <span class="table-comments">Comments:</span><input type="text" id="kili-rej-yearly-comment" name="kilirejyearlycomment" placeholder="Comments if any">
           <button type="submit" id="kili-rej-yearly-comment-btn">Submit</button>
       </form>
       <h1>YEARLY REJECTS-SAFARI</h1>
       <table class="report-tables">
           <tr>
               <th>Total</th>
               <th>Monthly Max</th>
               <th>Monthly Min</th>
               <th>Monthyl Avg</th>
           </tr>
           <tr>
               <td>{{$safarirejtotal}}</td>
               <td>{{$safarimaximumrej}}</td>
               <td>{{$safarimaximumrej}}</td>
               <td>{{$safarirejavg}}</td>
           </tr>
       </table>

       <form action="{{route('safarirej-comment')}}" method="post" class="report-comment-form">
           @csrf
           <span class="table-comments">Comments:</span><input type="text" id="safari-rej-yearly-comment" name="safarirejyearlycomment" placeholder="Comments if any">
           <button type="submit" id="safari-rej-yearly-comment-btn">Submit</button>
       </form>
       <h1>YEARLY REJECTS-CASTLE LAGER</h1>
       <table class="report-tables">
           <tr>
               <th>Total</th>
               <th>Monthly Max</th>
               <th>Monthly Min</th>
               <th>Monthyl Avg</th>
           </tr>
           <tr>
               <td>{{$clagerrejtotal}}</td>
               <td>{{$clagermaximumrej}}</td>
               <td>{{$clagerminrej}}</td>
               <td>{{$clagerrejavg}}</td>
           </tr>
       </table>

       <form action="{{route('clagerrej-comment')}}" method="post" class="report-comment-form">
           @csrf
           <span class="table-comments">Comments:</span><input type="text" id="clager-rej-yearly-comment" name="clagerrejyearlycomment" placeholder="Comments if any">
           <button type="submit" id="clager-rej-yearly-comment-btn">Submit</button>
       </form>
       <h1>YEARLY REJECTS-CASTLE LITE</h1>
       <table class="report-tables">
           <tr>
               <th>Total</th>
               <th>Monthly Max</th>
               <th>Monthly Min</th>
               <th>Monthyl Avg</th>
           </tr>
           <tr>
               <td>{{$cliterejtotal}}</td>
               <td>{{ $clitemaximumrej}}</td>
               <td>{{$cliteminrej}}</td>
               <td>{{$cliterejavg}}</td>
           </tr>
       </table>

       <form action="{{route('cliterej-comment')}}" method="post" class="report-comment-form">
           @csrf
           <span class="table-comments">Comments:</span><input type="text" id="clite-rej-yearly-comment" name="cliterejyearlycomment" placeholder="Comments if any">
           <button type="submit" id="clite-rej-yearly-comment-btn">Submit</button>
       </form>
   </div>
   <canvas id="yearly-report-chart"  ></canvas>
   <canvas id="another-yearly-report-chart"  ></canvas>
   <div class="highlight-issues-div">
      <form action="{{route('highlight-form')}}" method="post">
          @csrf
          <div class="inside-form-div">
      <span class="table-comments">Highlights:</span> <br>
      <textarea name="highlight" id="highlight" cols="30" rows="5"></textarea> <br>
      <span class="table-comments">Risks:</span> <br>
      <textarea name="risks" id="risks" cols="30" rows="5"></textarea> <br>
      <span class="table-comments">Changes:</span> <br>
      <textarea name="changes" id="changes" cols="30" rows="5"></textarea> <br><br>
      <span class="table-comments">Next Year Plans:</span> <br>
       <textarea name="nextplans" id="" cols="30" rows="5"></textarea>
       <span class="table-comments">Conclusion:</span> <br> 
       <textarea name="conclusion" id="" cols="30" rows="5"></textarea>
      </div>
      <span class="approve-report">Approved By:</span> <br>
       <span class="table-comments">Name:</span><input type="text" name="approvalname"> <br>  <br>
       <span class="table-comments">Position:</span><input type="text" name="position"> <br> <br>
      <button type="submit" id="highlight-form-btn">Submit</button>
   </div>
  
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
    // var arrayRec = {{@json_encode($dataRec) }};
    // var arrayKiliRejRec = {{@json_encode($KiliRej) }};
    // var arrayKiliRawRec = {{@json_encode($KiliRaw)}}
    // var arrayRecLast = {{@json_encode($dataRecLast)}};
    
    var kilireleased = {{@json_encode($dataRec) }};
    var safarireleased = {{@json_encode($safaridataRec) }};
    var clagerreleased = {{@json_encode($clagerdataRec) }};
    var clitereleased = {{@json_encode($clitedataRec) }};
   

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#yearly-report-chart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Kili',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : kilireleased
        },
        {
          label               : 'Safari',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :safarireleased
        },   
        {
          label               : 'Castle Lager',
          backgroundColor     : 'red',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :clagerreleased
        }, 
        {
          label               : 'Castle Lite',
          backgroundColor     : 'grey',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :clitereleased
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
            fontColor:'black',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'black',
          },
        }],
        },
      title:{
        display:true,
        text:['Released Products vs Time','Source:QMS Software'],
        fontSize:18,
        fontColor:'black',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'black',
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
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- BAR CHART -
    //--------------
   
    var kilirej = {{@json_encode($KiliRej) }};
    var safarirej = {{@json_encode($SafariRej) }};
    var clagerrej= {{@json_encode($ClagerRej) }};
    var cliterej = {{@json_encode($CliteRej) }};

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#another-yearly-report-chart').get(0).getContext('2d')

    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'],
      
      datasets: [
        { 
          label               : 'Kili',
          backgroundColor     : 'yellow',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : kilirej
        },
        {
          label               : 'Safari',
          backgroundColor     : 'green',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : safarirej
        },   
        {
          label               : 'Castle Lager',
          backgroundColor     : 'red',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :clagerrej
        }, 
        {
          label               : 'Castle Lite',
          backgroundColor     : 'grey',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :cliterej
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
            fontColor:'black',
          },
        }],
        xAxes:[{
          ticks:{
            fontColor:'black',
          },
        }],
        },
      title:{
        display:true,
        text:['Rejects vs Time','Source:QMS Software'],
        fontSize:18,
        fontColor:'black',
      },
      subtitle:{
        display:true,
        text:'subtitle'
      },
      legend:{
        display:true,
        position:'top',
        labels:{
          fontColor:'black',
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
<a href="downloadpdf">Download</a>
   <div class="report-qms-team">
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