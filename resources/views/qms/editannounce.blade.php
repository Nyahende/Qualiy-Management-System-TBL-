<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Announcements</title>
</head>
<script src="https://kit.fontawesome.com/00cc939b56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/qms.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/tabs.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/css/jquery-ui.theme.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.theme.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
<body>
    <div class="homeheader" style="background:url({{asset('images/waterdrops.jpg')}})">
    
    </div>
        <h1 class="editannouncehomeheaderwelcome">
            Welcome to the Quality Management System 
        </h1>
        <h1 class="edithomeQpolicy">
            This is our Quality Policy
        </h1> 
   <button class="upload-raw-btn"><a href="{{route('qualityroute')}}">BACK</a></button>
   <div class="edit-announce-form-div">
   <form action="{{route('updateannounce')}}" method="POST" class="raw-material-input-form">
       @csrf
       <input type="hidden" name="id" value="{{$updateannounce['id']}}">
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label">Edit Announcement:</label>
       <textarea type="text" id="name" cols="30" rows="30" name="announce" class="raw-input" value="{{$updateannounce['Announce']}}">
        </textarea>
       </span> 
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
  
</body>
</html>