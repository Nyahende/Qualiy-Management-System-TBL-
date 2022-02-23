<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Raw Materials</title>
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
   <div class="releaseddiv">
   <i class="fas fa-chart-line" style="font-size:50px; padding:50px;color:red"></i>
   <h1 class='fontsh1'>Statistics</h1>
   </div>
   </div>
   <span id="raw-home"><a href="home" class="raw-home">HOME</a></span>   
   @include('qms.heads')
   @include('qms.announcements')
  <div class="rawmaterialstab">
      <ul>
          <li><a href="#kilitablediv">KILIMANJARO</a></li>
          <li><a href="#safaritablediv">SAFARI</a></li>
          <li><a href="#clagertablediv">CASTLE LAGER</a></li>
          <li><a href="#clitetablediv">CASTLE LITE</a></li>
      </ul>
   <div id="kilitablediv">
   <h1 class="raw-material-product-name">KILIMANJARO</h1>
   <button class="add-raw-material-btn">Add</button>
   <div class="raw-material-form-div">
   <form action="{{route('kili.addkiliraw')}}" method="POST" class="raw-material-input-form">
       @csrf
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label"> Name:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Quantity:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Date:</label>
       <input type="date" id="date" name="date" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="approval" name="approval" class="raw-input">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       <table class="rawmaterialstable">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Quantity</th>
           <th>Date</th>
           <th>Delete</th>
           <th>Edit</th>
           <th>Approval</th>
           </tr>
           @foreach($kili as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Quantity}}</td>
           <td>{{$item->Date}}</td>
           <td>delete</td>
           <td>edit</td>
           <td>{{$item->Approval}}</td>
           </tr>
           @endforeach
       </table>
   </div>
   <div id="safaritablediv">
   <h1 class="raw-material-product-name">SAFARI </h1>
   <button class="add-raw-material-btn">Add</button>
   <div class="raw-material-form-div">
   <form action="{{route('safari.addsafariraw')}}" method="POST" class="raw-material-input-form">
       @csrf
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label"> Name:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Quantity:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Date:</label>
       <input type="date" id="date" name="date" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="approval" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="date" name="approval" class="raw-input">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       <table class="rawmaterialstable">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Quantity</th>
           <th>Date</th>
           <th>Delete</th>
           <th>Edit</th>
           <th>Approve</th>
           </tr>
           @foreach($safari as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Quantity}}</td>
           <td>{{$item->Date}}</td>
           <td>delete</td>
           <td>edit</td>
           <td>{{$item->Approval}}</td>
           </tr>
           @endforeach
       </table>
   </div>
   <div id="clagertablediv">
   <h1 class="raw-material-product-name">CASTLE LAGER</h1>
   <button class="add-raw-material-btn">Add</button>
   <div class="raw-material-form-div">
   <form action="{{route('clager.addclagerraw')}}" method="POST" class="raw-material-input-form">
       @csrf
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label"> Name:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Quantity:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Date:</label>
       <input type="date" id="date" name="date" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="approval" class="input-raw-label" class="raw-input"> Aprroval:</label>
       <input type="text" id="date" name="approval" class="raw-input">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       <table class="rawmaterialstable">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Quantity</th>
           <th>Date</th>
           <th>Delete</th>
           <th>Edit</th>
           <th>Approve</th>
           </tr>
           @foreach($castle_lager as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Quantity}}</td>
           <td>{{$item->Date}}</td>
           <td>delete</td>
           <td>edit</td>
           <td>{{$item->Approval}}</td>
           </tr>
           @endforeach
       </table>
   </div>
   <div id="clitetablediv">
       <h1 class="raw-material-product-name">CASTLE LITE</h1>
       <button class="add-raw-material-btn">Add</button>
   <div class="raw-material-form-div">
    <form action="{{route('clite.addcliteraw')}}" method="POST" class="raw-material-input-form">
        @csrf
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label"> Name:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Quantity:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Date:</label>
       <input type="date" id="date" name="date" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="date" name="approval" class="raw-input">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       <table class="rawmaterialstable">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Quantity</th>
           <th>Date</th>
           <th>Delete</th>
           <th>Edit</th>
           <th>Approve</th>
           </tr>
           <tr>
           @foreach($castle_lite as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Quantity}}</td>
           <td>{{$item->Date}}</td>
           <td>delete</td>
           <td>edit</td>
           <td>{{$item->Approval}}</td>
           </tr>
           @endforeach
       </table>
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