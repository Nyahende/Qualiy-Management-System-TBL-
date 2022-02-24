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
   @if(Session::get('updateworker'))
     {{Session::get('updateworker')}}
   @endif
   </div>
   @include('qms.heads')
   <div id="tabbed-panel-competence">
       <div class="engineerstabbedul">
           <li class="active"><a href="{{route('qualityroute')}}" >Home</a></li>   
       </div>
   <h1 class="raw-material-product-name">Q.M DEPARTMENT WORKERS</h1>
   <div class="edit-worker-form-div">
   <form action="{{route('updateqmworker')}}" class="raw-material-input-form" method="POST">
         @csrf
        <input type="hidden" name="id" value="{{$updateworker['id']}}">
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label"> Full Name:</label>
       <input type="text" id="name" name="name" class="raw-input" value="{{$updateworker['Full_Name']}}">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Education:</label>
       <input type="text" id="quantity" name="education" class="raw-input" value="{{$updateworker['Education']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Experience:</label>
       <input type="text" id="experience" name="experience" class="raw-input" value="{{$updateworker['Experience']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Employment Type:</label>
       <select type="text" id="experience" name="employment_type" class="raw-input" value="{{$updateworker['Employment_Type']}}">
           <option value="" disabled selected>Choose Here</option>
           <option value="full-time" id="full-time" name="full-time">Full time</option>
           <option value="contract" id="contract" name="contract">Contract</option>
           <option value="Internship" id="Internship" name="Internship">Internship</option>
           <option value="practical-training" id="practical-training" name="practical-training">Practical Training</option>
      </select>
        </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Position:</label>
       <input type="text" id="experience" name="position" class="raw-input" value="{{$updateworker['Position']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Since:</label>
       <input type="date" id="experience" name="since" class="raw-input" value="{{$updateworker['Since']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Until:</label>
       <input type="date" id="experience" name="until" class="raw-input" value="{{$updateworker['Until']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Disability:</label>
       <input type="text" id="experience" name="disability" class="raw-input" value="{{$updateworker['Disability']}}">
       </span><span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Extra:</label>
       <input type="text" id="experience" name="extra" class="raw-input" value="{{$updateworker['Extra']}}">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
  
</body>
</html>