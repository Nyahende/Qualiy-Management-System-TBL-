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
             MANAGEMENT PAGE OF OUR QMS 
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
   

   <div class="insert-worker-flash">
   @if(Session::get('addmeeting'))
     {{Session::get('addmeeting')}}
   @endif
   @if(Session::get('deletemeeting'))
     {{Session::get('deletemeeting')}}
   @endif
   @if(Session::get('addconclusions'))
     {{Session::get('addconclusions')}}
   @endif
   @if(Session::get('deleteconclusions'))
     {{Session::get('deleteconclusions')}}
   @endif
   @if(Session::get('updatemeeting'))
     {{Session::get('updatemeeting')}}
   @endif
   @if(Session::get('updateconclusions'))
     {{Session::get('updateconclusions')}}
   @endif
   </div>  
   <div class="all"  style="background:url({{asset('images/dark-fog.jpg')}});">

   @include('qms.heads')
   @include('qms.announcements')
  <div class="rawmaterialstab">
      <ul>
          <li><a href="#kilitablediv">MEETING HISTORY</a></li>
          <li><a href="#safaritablediv">CONCLUSIONS MADE</a></li>
      </ul>
   <div id="kilitablediv">
   <h1 class="raw-material-product-name">MEETING HISTORY</h1>
   <button class="add-raw-material-btn">Add</button>
   <div class="raw-material-form-div">
   <form action="{{route('meeting.addmeeting')}}" method="POST" class="raw-material-input-form">
       @csrf
       <span class="raw-material-input-span">
        <label for="date" class="input-raw-label"> Date:</label>
       <input type="date" id="name" name="date" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Agenda:</label>
        <input type="text" id="name" name="agenda" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="chairperson" class="input-raw-label"> Chairperson:</label>
        <input type="text" id="name" name="chairperson" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" > Status:</label>
       <select type="text" id="status" name="status" class="raw-input">
           <option value="" disabled selected>Select</option>
           <option value="not-yet">Not Yet</option>
           <option value="not-yet">Ongoing</option>
           <option value="not-yet">Done</option>
        </select>
       </span>
       <span class="raw-material-input-span">
        <label for="approval" class="input-raw-label"> Approval:</label>
        <input type="text" id="name" name="approval" class="raw-input">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       <table class="rawmaterialstable">
           <tr>
           <th>SN</th>
           <th>Date</th>
           <th>Agenda</th>
           <th>Chairperson</th>
           <th>Status</th>
           <th>Approval</th>
           <th>Delete</th>
           <th>Edit</th>
           </tr>
           @foreach($meeting as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Date}}</td>
           <td>{{$item->Agenda}}</td>
           <td>{{$item->Chairperson}}</td>
           <td>{{$item->Status}}</td>
           <td>{{$item->Approval}}</td>
           <td><a href="{{'deletemeeting/'.$item->id}}">Delete</a></td>
           <td><a href="{{'editmeeting/'.$item->id}}"> Edit </a></td>
           </tr>
          @endforeach
       </table>
   </div>
   <div id="safaritablediv">
   <h1 class="raw-material-product-name">CONCLUSIONS MADE</h1>
   <button class="add-raw-material-btn">Add</button>
   <div class="raw-material-form-div">
   <form action="{{route('conclusion.addconclusion')}}" method="POST" class="raw-material-input-form">
       @csrf
       <span class="raw-material-input-span">
        <label for="date" class="input-raw-label"> Date:</label>
       <input type="date" id="name" name="date" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Agenda:</label>
       <input type="text" id="quantity" name="agenda" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Conclusions:</label>
       <textarea type="text" id="quantity" name="conclusion" class="non-conformity-input"></textarea>
       </span>
       <span class="raw-material-input-span">
        <label for="approval" class="input-raw-label"> Approval:</label>
       <input type="text" id="quantity" name="approval" class="non-conformity-input">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       <table class="non-conformity-table">
           <tr>
           <th>SN</th>
           <th>Date</th>
           <th>Agenda</th>
           <th>Conclusions Made</th>
           <th>Approval</th>
           <th>Delete</th>
           <th>Edit</th>
           </tr>
           @foreach($conclusions as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Date}}</td>
           <td class="non-scroll">{{$item->Agenda}}</td>
           <td class="the-issue">{{$item->Conclusions}}</td>
           <td>{{$item->Approval}}</td>
           <td><a href="{{'deleteconclusion/'.$item->id}}">Delete</a></td>
           <td><a href="{{'editconclusion/'.$item->id}}"> Edit </a></td>
           </tr>
           @endforeach
       </table>
   </div>
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