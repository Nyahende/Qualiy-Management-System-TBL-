<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | SOPs</title>
</head>
<script src="https://kit.fontawesome.com/00cc939b56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/qms.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/tabs.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/sop.js')}}" type="text/javascript"></script>  
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
    <div class="passportname">
       <span>{{Session::get('First_Name')}} {{Session::get('Last_Name')}}</span>
   </div>
        <h1 class="homeheaderwelcome">
            THIS IS THE SOP PAGE OF OUR QMS
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
   <div class="insert-worker-flash">
   @if(Session::get('addsop'))
     {{Session::get('addsop')}}
   @endif
   @if(Session::get('deletesop'))
     {{Session::get('deletesop')}}
   @endif
   </div>
   <div class="all"  style="background:url({{asset('images/dark-fog.jpg')}});">
   @include('qms.heads')
   @include('qms.announcements')
   <div id="soptabbedpanel">
      
       <div class="soptabbedcontent">
       <div id="qcsops" >
           <h1 class="sopdepheader">SOPS OF ALL DEPARTMENTS</h1>
           <div class="adsopformdiv">
               <form action="{{route('uploadsop')}}" method="POST" class="adsopform" enctype="multipart/form-data">
                   @csrf
                <span class="raw-material-input-span">
                <label for="name" class="input-raw-label"> File Name:</label>
                   <input type="text" name="name" class="adsopinput">
                </span>
                <span class="raw-material-input-span">
                <label for="name" class="input-raw-label"> Department:</label>
                   <input type="text" name="department" class="adsopinput">
                </span>
                <span class="raw-material-input-span">
                <label for="date" class="input-raw-label"> Date:</label>
                   <input type="date" name="date" class="adsopinput">
                </span>
                   <input type="file" name="file" class="adsopinput">
                   <button type="submit"  class="upload-raw-btn">Upload</button>
               </form>
           </div>
          <div class="adsopbtn">
              <button class="add-sop-btn">Add</button>
          </div>
                  <table class="rawmaterialstable">
                      <tr>
                      <th>SN</th>
                      <th>File Name</th>
                      <th>Department</th>
                      <th>View</th>
                      <th>Uploading Date</th>
                      <th>Download</th>
                      <th>Delete</th>
                      </tr>
                      @foreach($sop as $item)
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->Name}}</td>
                          <td>{{$item->Department}}</td>
                          <td><a href="view/{{$item->File}}">View</a></td>
                          <td>{{$item->Date}}</td>
                          <td><a href='download/{{$item->File}}'> Download</a></td>
                          <td><a href="{{'deletesop/'.$item->id}}">Delete</a></td>
                      </tr>
                      @endforeach
                  </table>
       </div>

      

       </div>
       </div>
   </div>
   </div>
   @include('qms.sopplans')
   <div class="sopqmsteam">
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