<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Management Review</title>
</head>
<script src="https://kit.fontawesome.com/00cc939b56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/qms.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/rawmaterials.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/tabs.js')}}" type="text/javascript"></script>  
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
   <div class="releaseddiv">
   <i class="fas fa-chart-line" style="font-size:50px; padding:50px;color:red"></i>
   <h1 class='fontsh1'>Statistics</h1>
   </div>
   </div>
   <span id="raw-home"><a href="{{route('management')}}" class="raw-home">HOME</a></span>   
   @include('qms.heads')
  <div class="rawmaterialstab">
      <ul>
          <li><a href="#kilitablediv">MEETING HISTORY</a></li>
      </ul>
   <div id="kilitablediv">
   <h1 class="raw-material-product-name">MEETING HISTORY</h1>
   <div class="releasededit-form-div">
   <form action="{{route('updatemeeting')}}" method="POST" class="raw-material-input-form">
       @csrf
       <input type="hidden" name="id" value="{{$editmeeting['id']}}">
       <span class="raw-material-input-span">
        <label for="date" class="input-raw-label"> Date:</label>
       <input type="date" id="name" name="date" class="raw-input" value="{{$editmeeting['Date']}}">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Agenda:</label>
        <input type="text" id="name" name="agenda" class="raw-input" value="{{$editmeeting['Agenda']}}">
       </span>
       <span class="raw-material-input-span">
        <label for="chairperson" class="input-raw-label"> Chairperson:</label>
        <input type="text" id="name" name="chairperson" class="raw-input" value="{{$editmeeting['Chairperson']}}">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" > Status:</label>
       <select type="text" id="status" name="status" class="raw-input" value="{{$editmeeting['Status']}}">
           <option value="" disabled selected>Select</option>
           <option value="not-yet">Not Yet</option>
           <option value="not-yet">Ongoing</option>
           <option value="not-yet">Done</option>
       </select>
       </span>
       <span class="raw-material-input-span">
        <label for="approval" class="input-raw-label"> Approval:</label>
        <input type="text" id="name" name="approval" class="raw-input" value="{{$editmeeting['Approval']}}">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       
   </div>
   
   </div>
   <div class="editreleasedqmsteam">
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