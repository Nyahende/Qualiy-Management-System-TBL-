<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Quality Management</title>
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
        <h1 class="loginfor">QM DEPARTMENT</h1>
        <h1 class="homeQpolicy">
            This is our Quality Policy
        </h1>
        
        <div class="passportdiv">
        <img src="" alt="" class="passport">
        <h1 class="passname">Michael Nyahende</h1>
        <button type="" class="logoutbtn">Logout</button>
        </div>
        
    </div>
    <div class="insert-worker-flash">
   @if(Session::get('updatemachine'))
     {{Session::get('updatemachine')}}
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
   <h1 class="raw-material-product-name">MACHINES/VEHICLES/TOOLS' TABLE</h1>
   <div class="engine-machine-edit-input-form">
   <form action="{{route('qmupdatemachine')}}" class="raw-material-input-form" method="POST">
       @csrf
       <input type="hidden" name="id" value="{{$updatemachine['id']}}">
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label">Name:</label>
       <input type="text" id="name" name="name" class="raw-input" value="{{$updatemachine['Name']}}">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> For:</label>
       <input type="text" id="quantity" name="for" class="raw-input" value="{{$updatemachine['For']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Operator(s):</label>
       <textarea type="text" id="experience" name="operator" class="raw-input" value="{{$updatemachine['Operator']}}"></textarea>
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Status:</label>
       <input type="text" id="experience" name="status" class="raw-input" value="{{$updatemachine['Status']}}">
      
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   
</body>
</html>