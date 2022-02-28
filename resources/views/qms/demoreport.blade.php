<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | QM Department</title>
</head>
<script src="https://kit.fontawesome.com/00cc939b56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/qms.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/competence.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/tabs.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/css/jquery-ui.theme.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.theme.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
<body>
    <div class="homeheader" style="background:url({{asset('images/beer-foam-1.jpg')}})">

    <div class="left-logo">
        <img src="{{asset('images/tbl-left-logo.jpg')}}" alt="">
    </div>
    <div class="right-logo">
        <img src="{{asset('images/tbl-plc.jpg')}}" alt="">
    </div>
   
        <h1 class="homeheaderwelcome">
            Welcome to the Quality Management System 
        </h1>
        <h1 class="homeQpolicy">
            This is our Quality Policy
        </h1>
        <!-- <div class="authbuttonshome">
        <button id="loginslide">Login</button>
        <button id="signupslide">Signup</button>
        </div> -->
        <div class="passportdiv">
        <!-- <img src="" alt="" class="passport">
        <h1 class="passname">Michael Nyahende</h1> -->
        <button type="submit" class="logoutbtn"><a href="pull">Logout</a> </button>
        </div>
    </div>
    <div class="fonts">
   
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
   <div class="insert-worker-flash">
   @if(Session::get('success'))
     {{Session::get('success')}}
   @endif
   @if(Session::get('delete'))
     {{Session::get('delete')}}
   @endif
   @if(Session::get('addmachine'))
     {{Session::get('addmachine')}}
   @endif
   @if(Session::get('deletemachine'))
     {{Session::get('deletemachine')}}
   @endif
   @if(Session::get('addsafety'))
     {{Session::get('addsafety')}}
   @endif
   @if(Session::get('deletesafety'))
     {{Session::get('deletesafety')}}
   @endif
   @if(Session::get('addtrain'))
     {{Session::get('addtrain')}}
   @endif
   @if(Session::get('deletetrain'))
     {{Session::get('deletetrain')}}
   @endif
   @if(Session::get('adddefects'))
     {{Session::get('adddefects')}}
   @endif
   @if(Session::get('deletedefects'))
     {{Session::get('deletedefects')}}
   @endif
   </div> 
   @include('qms.heads')
   @include('qms.announcements')
   <div id="tabbedpanel">
       <div class="report-form-div">
           <form action="{{route('report-form')}}" method="post">
               @csrf
               <label for="report-year" class="input-report-label"> Report Year:</label>
               <input type="text" id="report-year" name="reportyear" class="raw-input"><br> <br>

               <label for="report-year" class="input-report-label"> Challenges Faced:</label>
               <textarea type="text" id="report-year" name="challenge" class="raw-input"></textarea><br> <br>

               <label for="report-year" class="input-report-label"> Highlights During the Year:</label>
               <textarea type="text" id="report-year" name="highlight" class="raw-input"></textarea><br> <br>

               <label for="report-year" class="input-report-label"> Risk Observed:</label>
               <textarea type="text" id="report-year" name="risk" class="raw-input"></textarea><br> <br>

               <label for="report-year" class="input-report-label"> Next Year Plans:</label>
               <textarea type="text" id="report-year" name="nextplans" class="raw-input"></textarea><br> <br>

               <label for="report-year" class="input-report-label"> Prepared By:</label>
               <input type="text" id="report-year" name="by" class="raw-input"><br> <br>

               <label for="report-year" class="input-report-label"> Date:</label>
               <input type="date" id="report-year" name="date" class="raw-input"><br> <br>

               <button type="submit">Submit $ Download</button>

           </form>
       </div>
   </div>
   @include('qms.plans')
   <div class="qmsteam">
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