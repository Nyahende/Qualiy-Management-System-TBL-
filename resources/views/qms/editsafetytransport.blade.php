<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Transport</title>
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
    <div class="chaticon">
    
    <i class="fas fa-comments" id="chaticon"style="color:white;font-size: 150px;"></i>
    <h1 class="chatword">CHATS</h1>
    </div>
        <h1 class="homeheaderwelcome">
            Welcome to the Quality Management System 
        </h1>
        <h1 class="loginfor">TRANSPORT DEPARTMENT</h1>
        <h1 class="homeQpolicy">
            This is our Quality Policy
        </h1>
        
        <div class="passportdiv">
        <img src="" alt="" class="passport">
        <h1 class="passname">Michael Nyahende</h1>
        <button type="" class="logoutbtn">Logout</button>
        </div>
        
    </div>
    
   @include('qms.heads')
   <div id="tabbed-panel-competence">
       <div class="engineerstabbedul">
       <ul>
           <li class="active"><a href="#engineershome" >Home</a></li> 
           <li ><a href="#engineerssops">SOPs</a></li> 
           <li ><a href="#engineersdefectst">Defects</a></li> 
           <li ><a href="#engineersreport">Report</a></li> 
       </ul>
       </div>
<div class="tabbedcontent">
<div id="engineershome" >
  
   <div class="table">
   <button class="add-tool-btn">Add</button>
   <h1 class="raw-material-product-name">SAFETY GEARS TABLE</h1>
   <div class="engine-edit-safety-form-div">
   <form action="{{route('transportupdatesafety')}}" class="raw-material-input-form" method="POST">
       @csrf
       <input type="hidden" name="id" value="{{$updatesafety['id']}}">
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label">Name:</label>
       <input type="text" id="name" name="name" class="raw-input" value="{{$updatesafety['Name']}}">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Size:</label>
       <input type="text" id="quantity" name="size" class="raw-input" value="{{$updatesafety['Size']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Quantity:</label>
       <input type="text" id="experience" name="quantity" class="raw-input" value="{{$updatesafety['Quantity']}}">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
</body>
</html>