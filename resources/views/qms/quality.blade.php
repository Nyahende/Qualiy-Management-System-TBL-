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
    <div class="homeheader" style="background:url({{asset('images/waterdrops.jpg')}})">
   
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
       <div class="tabbedul">
       <ul>
           <li class="active"><a href="#Engeneering_department" >Eng.Dep</a></li> 
           <li ><a href="#finance_department">Finance.Dep</a></li> 
           <li ><a href="#q.m_department">Q.M.Dep</a></li> 
           <li ><a href="#marketing_department">Marketing.Dep</a></li> 
           <li ><a href="#store_department">Store/Warehouse.Dep</a></li> 
           <li ><a href="#transport_department">Transport.Dep</a>
           <li ><a href="#defects">Defects</a>
       </ul>
       </div>
       <div class="tabbedcontent">
       <div id="Engeneering_department" >
           <div class="table">
        <h1 class="raw-material-product-name">ENGENEERING DEPARTMENT WORKERS</h1>
        <table class="quality-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Education</th>
           <th>Exp</th>
           <th>Emp.Type</th>
           <th>Position</th>
           <th>Since</th>
           <th>Until</th>
           <th>Disabled</th>
           <th>Extra</th>
           
           </tr>
           @foreach($engworker as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Full_Name}}</td>
           <td>{{$item->Education}}</td>
           <td>{{$item->Experience}}</td>
           <td>{{$item->Employment_Type}}</td>
           <td>{{$item->Position}}</td>
           <td>{{$item->Since}}</td>
           <td>{{$item->Until}}</td>
           <td>{{$item->Disability}}</td>
           <td>{{$item->Extra}}</td>
           
           </tr> 
           @endforeach
        </table>
        </div>
        <div class="table">
   <h1 class="raw-material-product-name">MACHINES/VEHICLES/TOOLS' TABLE</h1>
   
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>     
           </tr>
           @foreach($engmachine as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Status}}</td>
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
       <h1 class="raw-material-product-name">SAFETY GEARS(PPE)</h1>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Size</th>
           <th>Quantity</th>        
           </tr>
           @foreach($engsafety as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Size}}</td>
           <td>{{$item->Quantity}}</td>
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
   <h1 class="raw-material-product-name">ENGENEERING DEP TRAININGS RECORDS</h1>
  
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Title</th>
           <th>Participants</th>
           <th>Start</th>
           <th>End</th>
           <th>Aprroval</th>
           <th>Edit</th>
           <th>Delete</th>
           </tr>
           @foreach($engtrain as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Title}}</td>
           <td class="training-participants">{{$item->Participants}}</td>
           <td>{{$item->Starts}}</td>
           <td>{{$item->Ends}}</td>
           <td>{{$item->Approval}}</td>
           <td><a href="{{'edittrainengine/'.$item->id}}"> Edit </a></td>
           <td><a href="{{'deleteenginetrain/'.$item->id}}">Delete</a></td>
           </tr> 
           @endforeach
   </table>
       </div>
       </div>
       <div id="finance_department">
       <div class="table">
   <h1 class="raw-material-product-name">FINANCE DEPARTMENT WORKERS</h1>
       <table class="quality-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Education</th>
           <th>Exp</th>
           <th>Emp.Type</th>
           <th>Position</th>
           <th>Since</th>
           <th>Until</th>
           <th>Disabled</th>
           <th>Extra</th>
           </tr>
           @foreach($financeworker as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Full_Name}}</td>
           <td>{{$item->Education}}</td>
           <td>{{$item->Experience}}</td>
           <td>{{$item->Employment_Type}}</td>
           <td>{{$item->Position}}</td>
           <td>{{$item->Since}}</td>
           <td>{{$item->Until}}</td>
           <td>{{$item->Disability}}</td>
           <td>{{$item->Extra}}</td>          
           </tr> 
           @endforeach
        </table>
        </div>
       <div class="table">
       <h1 class="raw-material-product-name">MACHINES/VEHICLES/TOOLS' TABLE</h1>  
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>         
           </tr>
           @foreach($financemachine as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Status}}</td>
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
       <h1 class="raw-material-product-name">SAFETY GEARS(PPE)</h1>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Size</th>
           <th>Quantity</th>          
           </tr>
           @foreach($financesafety as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Size}}</td>
           <td>{{$item->Quantity}}</td>
           
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
       <h1 class="raw-material-product-name">FINANCE DEP TRAININGS RECORDS</h1>
       <table class="competence-workers-table">
       <tr>
           <th>SN</th>
           <th>Title</th>
           <th>Participants</th>
           <th>Start</th>
           <th>End</th>
           <th>Aprroval</th>          
           </tr>
           @foreach($financetrain as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Title}}</td>
           <td class="training-participants">{{$item->Participants}}</td>
           <td>{{$item->Starts}}</td>
           <td>{{$item->Ends}}</td>
           <td>{{$item->Approval}}</td>         
           </tr> 
           @endforeach
   </table>  
       </div>
       </div>
       <div id="q.m_department">
       <div class="table">
       <div class="worker-form-div">
       <form action="{{route('addqmworker')}}" class="raw-material-input-form" method="POST">
         @csrf
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label"> Full Name:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Education:</label>
       <input type="text" id="quantity" name="education" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Experience:</label>
       <input type="text" id="experience" name="experience" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Employment Type:</label>
       <select type="text" id="experience" name="employment_type" class="raw-input">
           <option value="" disabled selected>Choose Here</option>
           <option value="full-time" id="full-time" name="full-time">Full time</option>
           <option value="contract" id="contract" name="contract">Contract</option>
           <option value="Internship" id="Internship" name="Internship">Internship</option>
           <option value="practical-training" id="practical-training" name="practical-training">Practical Training</option>
      </select>
        </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Position:</label>
       <input type="text" id="experience" name="position" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Since:</label>
       <input type="date" id="experience" name="since" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Until:</label>
       <input type="date" id="experience" name="until" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Disability:</label>
       <input type="text" id="experience" name="disability" class="raw-input">
       </span><span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Extra:</label>
       <input type="text" id="experience" name="extra" class="raw-input">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
   <button class="add-worker-btn">Add</button>

        <h1 class="raw-material-product-name">Q.M DEPARTMENT WORKERS</h1>
        <table class="quality-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Education</th>
           <th>Exp</th>
           <th>Emp.Type</th>
           <th>Position</th>
           <th>Since</th>
           <th>Until</th>
           <th>Disabled</th>
           <th>Extra</th>
           <th>Delete</th>
           <th>Edit</th>
           
           </tr>
           @foreach($qmworker as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Full_Name}}</td>
           <td>{{$item->Education}}</td>
           <td>{{$item->Experience}}</td>
           <td>{{$item->Employment_Type}}</td>
           <td>{{$item->Position}}</td>
           <td>{{$item->Since}}</td>
           <td>{{$item->Until}}</td>
           <td>{{$item->Disability}}</td>
           <td>{{$item->Extra}}</td>
           <td><a href="{{'deleteqmworker/'.$item->id}}">Delete</a></td>
           <td><a href="{{'editqmworker/'.$item->id}}"> Edit </a></td>

           
           </tr> 
           @endforeach
        </table>
        </div>
        <div class="table">
   <div class="tool-form-div">
   <form action="{{route('addqmmachines')}}" class="raw-material-input-form" method="POST">
       @csrf
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label">Name:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> For:</label>
       <input type="text" id="quantity" name="for" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Operator(s):</label>
       <textarea type="text" id="experience" name="operator" class="raw-input"></textarea>
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Status:</label>
       <input type="text" id="experience" name="status" class="raw-input">
      
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
   <h1 class="raw-material-product-name">MACHINES/VEHICLES/TOOLS' TABLE</h1>
   <button class="add-tool-btn">Add</button> 
   
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>     
           <th>Delete</th>     
           <th>Edit</th>     
           </tr>
           @foreach($qmmachine as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Status}}</td>
           <td><a href="{{'deleteqmmachine/'.$item->id}}">Delete</a></td>
           <td><a href="{{'editqmmachine/'.$item->id}}"> Edit </a></td>
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
   <div class="safety-form-div">
   <form action="{{route('addqmsafety')}}" class="raw-material-input-form" method="POST">
       @csrf
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label">Name:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Size:</label>
       <input type="text" id="quantity" name="size" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Quantity:</label>
       <input type="text" id="experience" name="quantity" class="raw-input">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       <h1 class="raw-material-product-name">SAFETY GEARS(PPE)</h1>
       <button class="add-safety-gear-btn">Add</button>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Size</th>
           <th>Quantity</th>        
           <th>Delete</th>        
           <th>Edit</th>        
           </tr>
           @foreach($qmsafety as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Size}}</td>
           <td>{{$item->Quantity}}</td>
           <td><a href="{{'deleteqmsafety/'.$item->id}}">Delete</a></td>
           <td><a href="{{'editqmsafety/'.$item->id}}"> Edit </a></td>
           </tr>
           @endforeach
       </table>
       </div>
       
       <div class="table">
   <div class="training-form-div">
   <form action="{{route('addqmtrain')}}" class="raw-material-input-form" method="POST">
       @csrf
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label"> Title:</label>
       <input type="text" id="name" name="title" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Participants:</label>
       <input type="text" id="quantity" name="participants" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Starts:</label>
       <input type="date" id="experience" name="starts" class="raw-input">
       </span>
      
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Ends:</label>
       <input type="date" id="experience" name="ends" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="experience" name="approval" class="raw-input">
       </span>
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
   <h1 class="raw-material-product-name">TRAININGS RECORDS</h1>
   <button class="add-training-btn">Add</button>
  
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Title</th>
           <th>Participants</th>
           <th>Start</th>
           <th>End</th>
           <th>Aprroval</th>
           <th>Edit</th>
           <th>Delete</th>
           </tr>
           @foreach($qmtrainings as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Title}}</td>
           <td class="training-participants">{{$item->Participants}}</td>
           <td>{{$item->Starts}}</td>
           <td>{{$item->Ends}}</td>
           <td>{{$item->Approval}}</td>
           <td><a href="{{'edittrainqm/'.$item->id}}"> Edit </a></td>
           <td><a href="{{'deleteqmtrain/'.$item->id}}">Delete</a></td>
           </tr> 
           @endforeach
   </table>
       </div>
       </div>
       <div id="marketing_department">
       <div class="table">
   <h1 class="raw-material-product-name">MARKETING & PROCUREMENT DEPARTMENT WORKERS</h1>
       <table class="quality-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Education</th>
           <th>Exp</th>
           <th>Emp.Type</th>
           <th>Position</th>
           <th>Since</th>
           <th>Until</th>
           <th>Disabled</th>
           <th>Extra</th>
           </tr>
           @foreach ($marketingworker as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Full_Name}}</td>
           <td>{{$item->Education}}</td>
           <td>{{$item->Experience}}</td>
           <td>{{$item->Employment_Type}}</td>
           <td>{{$item->Position}}</td>
           <td>{{$item->Since}}</td>
           <td>{{$item->Until}}</td>
           <td>{{$item->Disability}}</td>
           <td>{{$item->Extra}}</td>
           </tr> 
           @endforeach
        </table>
        </div>
        <div class="table">
        <h1 class="raw-material-product-name">MACHINES/VEHICLES/TOOLS' TABLE</h1>
        <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>          
           </tr>
           @foreach($marketingmachine as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Status}}</td>     
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
       <h1 class="raw-material-product-name">SAFETY GEARS(PPE)</h1>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Size</th>
           <th>Quantity</th>          
           </tr>
           @foreach($marketingsafety as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Size}}</td>
           <td>{{$item->Quantity}}</td>
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
       <h1 class="raw-material-product-name">MARKETING DEP TRAININGS RECORDS</h1>
       <table class="competence-workers-table">
       <tr>
           <th>SN</th>
           <th>Title</th>
           <th>Participants</th>
           <th>Start</th>
           <th>End</th>
           <th>Aprroval</th>          
           </tr>
           @foreach($marketingtrain as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Title}}</td>
           <td class="training-participants">{{$item->Participants}}</td>
           <td>{{$item->Starts}}</td>
           <td>{{$item->Ends}}</td>
           <td>{{$item->Approval}}</td>
           </tr> 
           @endforeach
   </table>
       </div>
       </div>
       <div id="store_department">
       <div class="table">
   <h1 class="raw-material-product-name">STORE/WAREHOUSE DEPARTMENT WORKERS</h1>
       <table class="quality-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Education</th>
           <th>Exp</th>
           <th>Emp.Type</th>
           <th>Position</th>
           <th>Since</th>
           <th>Until</th>
           <th>Disabled</th>
           <th>Extra</th>
           </tr>
           @foreach($storeworkers as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Full_Name}}</td>
           <td>{{$item->Education}}</td>
           <td>{{$item->Experience}}</td>
           <td>{{$item->Employment_Type}}</td>
           <td>{{$item->Position}}</td>
           <td>{{$item->Since}}</td>
           <td>{{$item->Until}}</td>
           <td>{{$item->Disability}}</td>
           <td>{{$item->Extra}}</td>
           </tr> 
           @endforeach
        </table>
        </div>
   <div class="table">
   <h1 class="raw-material-product-name">MACHINES/VEHICLES/TOOLS' TABLE</h1>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>          
           </tr>
           @foreach($storemachine as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Status}}</td>          
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
   <h1 class="raw-material-product-name">SAFETY GEARS(PPE)</h1>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Size</th>
           <th>Quantity</th>     
           </tr>
           @foreach($storesafety as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Size}}</td>
           <td>{{$item->Quantity}}</td>        
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
   <h1 class="raw-material-product-name">STORE DEP TRAININGS RECORDS</h1>
       <table class="competence-workers-table">
       <tr>
           <th>SN</th>
           <th>Title</th>
           <th>Participants</th>
           <th>Start</th>
           <th>End</th>
           <th>Aprroval</th>         
           </tr>
           @foreach( $storetrain as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Title}}</td>
           <td class="training-participants">{{$item->Participants}}</td>
           <td>{{$item->Starts}}</td>
           <td>{{$item->Ends}}</td>
           <td>{{$item->Approval}}</td>          
           </tr> 
           @endforeach
   </table>
       </div>
       </div>
       <div id="transport_department">
       <div class="table">
      <h1 class="raw-material-product-name">TRANSPORT DEPARTMENT WORKERS</h1>
   
       <table class="quality-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Education</th>
           <th>Exp</th>
           <th>Emp.Type</th>
           <th>Position</th>
           <th>Since</th>
           <th>Until</th>
           <th>Disabled</th>
           <th>Extra</th>
           </tr>
           @foreach($transportworker as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Full_Name}}</td>
           <td>{{$item->Education}}</td>
           <td>{{$item->Experience}}</td>
           <td>{{$item->Employment_Type}}</td>
           <td>{{$item->Position}}</td>
           <td>{{$item->Since}}</td>
           <td>{{$item->Until}}</td>
           <td>{{$item->Disability}}</td>
           <td>{{$item->Extra}}</td>
         
           </tr> 
           @endforeach
        </table>
        </div>
  
   <div class="table">
   <h1 class="raw-material-product-name">MACHINES/VEHICLES/TOOLS' TABLE</h1>
 
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>
         
           </tr>
           @foreach($transmachine as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Status}}</td>
           
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
   <h1 class="raw-material-product-name">SAFETY GEARS(PPE)</h1>
   
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Size</th>
           <th>Quantity</th>
           
           </tr>
           @foreach($transsafety as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Size}}</td>
           <td>{{$item->Quantity}}</td>
        
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
   <h1 class="raw-material-product-name">TRANSPORT DEP TRAININGS RECORDS</h1>
   
       <table class="competence-workers-table">
       <tr>
           <th>SN</th>
           <th>Title</th>
           <th>Participants</th>
           <th>Start</th>
           <th>End</th>
           <th>Aprroval</th>     
           </tr>
           @foreach( $transporttrain as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Title}}</td>
           <td class="training-participants">{{$item->Participants}}</td>
           <td>{{$item->Starts}}</td>
           <td>{{$item->Ends}}</td>
           <td>{{$item->Approval}}</td>
           </tr> 
           @endforeach
        </table>
       </div>
       </div>
       <div id="defects">
       <div class="table">
       <h1 class="raw-material-product-name">ENG DEP DEFECTS MACHINES/VEHICLES/TOOLS' TABLE</h1>   
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>        
           </tr>
           @foreach($engdefects as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Approve}}</td>        
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
       <h1 class="raw-material-product-name">MARKETING DEFECTS MACHINES/VEHICLES/TOOLS' TABLE</h1>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>       
           </tr>
           @foreach($marketingdefects as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Approve}}</td>          
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
       <h1 class="raw-material-product-name">TRANSPORT DEFECTS MACHINES/VEHICLES/TOOLS' TABLE</h1>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>
           </tr>
           @foreach($transdefects as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Approve}}</td>
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
       <div class="tool-form-div">
       <form action="{{route('addqualitydefects')}}" method="POST" class="raw-material-input-form">
       @csrf
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label">Name:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> For:</label>
       <input type="text" id="quantity" name="for" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Operator(s):</label>
       <textarea type="text" id="experience" name=" operator" class="raw-input"></textarea>
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approve:</label>
       <input type="text" id="experience" name="approve" class="raw-input">
       </span>      
       <button type="submit" class="upload-raw-btn">Upload</button>
       </form>
      </div>
       <h1 class="raw-material-product-name">Q.M DEFECTS MACHINES/VEHICLES/TOOLS' TABLE</h1>
      <button class="add-tool-btn">Add</button>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>       
           <th>Delete</th>       
           <th>Edit</th>       
           </tr>
           @foreach($qmdefects as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Approve}}</td>          
           <td><a href="{{'deleteqmdefects/'.$item->id}}">Delete</a></td>
           <td><a href="{{'editdefectsquality/'.$item->id}}"> Edit </a></td>
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
      <h1 class="raw-material-product-name">STORE DEFECTS MACHINES/VEHICLES/TOOLS' TABLE</h1>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>
           </tr>
           @foreach($storedefects as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Approve}}</td>
           </tr>
           @endforeach
       </table>
       </div>
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