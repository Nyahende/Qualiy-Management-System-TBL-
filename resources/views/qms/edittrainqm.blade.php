<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Engineers</title>
</head>
<script src="https://kit.fontawesome.com/00cc939b56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/qms.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/tabs.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/competence.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/css/jquery-ui.theme.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.theme.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
<body>
<div class="homeheader" style="background:url({{asset('images/waterdrops.jpg')}})">
    
    <h1 class="homeheaderwelcome">
        THIS IS THE AUDIT PAGE OF OUR QMS
    </h1>
    <h1 class="homeQpolicy">
        This is our Quality Policy
    </h1>
    <div class="passportdiv">
    <!-- <h1 class="passname">Michael Nyahende</h1> -->
    <button type="" class="logoutbtn"><a href="pull">Logout</a></button>
    </div>
</div>
    <div class="insert-worker-flash">
   @if(Session::get('updatetrain'))
     {{Session::get('updatetrain')}}
   @endif
   </div>
   @include('qms.heads')
   <div id="tabbed-panel-competence">
   <div class="engineerstabbedul">   
       <li class="active"><a href="{{route('qualityroute')}}" >Home</a></li> 
   </div>
<div class="tabbedcontent">
<div id="engineershome" >
   
       <div class="table">
   <h1 class="raw-material-product-name">ENGENEERING DEP TRAININGS RECORDS</h1>
   <div class="train-update-form-div">
   <form action="{{route('updateqmtrain')}}" class="raw-material-input-form" method="POST">
       @csrf
       <input type="hidden" name="id" value="{{$updatetrain['id']}}">
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label"> Title:</label>
       <input type="text" id="name" name="title" class="raw-input" value="{{ $updatetrain['Title']}}">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Participants:</label>
       <input type="text" id="quantity" name="participants" class="raw-input" value="{{ $updatetrain['Participants']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Starts:</label>
       <input type="date" id="experience" name="starts" class="raw-input" value="{{ $updatetrain['Starts']}}">
       </span>
      
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Ends:</label>
       <input type="date" id="experience" name="ends" class="raw-input" value="{{ $updatetrain['Ends']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="experience" name="approval" class="raw-input" value="{{ $updatetrain['Approval']}}">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
     
       </div>
       </div>

      
       </div>
       </div>
       </div>
   <div class="competence-qms-team">
       <h1>ENGINEERING DEPARTMENT TEAM</h1>
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