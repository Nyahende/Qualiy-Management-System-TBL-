<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Finance</title>
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
        FINANCE  DEPARTMENT OF QMS
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
   @if(Session::get('addworker'))
     {{Session::get('addworker')}}
   @endif
   @if(Session::get('deleteworker'))
     {{Session::get('deleteworker')}}
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
   @if(Session::get('deletesop'))
     {{Session::get('deletesop')}}
   @endif
   @if(Session::get('updateworker'))
     {{Session::get('updateworker')}}
   @endif
   @if(Session::get('updatemachine'))
     {{Session::get('updatemachine')}}
   @endif
   @if(Session::get('updatesafety'))
     {{Session::get('updatesafety')}}
   @endif
   @if(Session::get('updatetrain'))
     {{Session::get('updatetrain')}}
   @endif
   @if(Session::get('updatedefects'))
     {{Session::get('updatedefects')}}
   @endif
   </div> 
   @include('qms.heads')
   <div id="tabbed-panel-competence">
       <div class="engineerstabbedul">
       <ul>
           <li class="active"><a href="#engineershome" >Home</a></li> 
           <li ><a href="#engineerssops">SOPs</a></li> 
           <li ><a href="#engineersdefectst">Defects</a></li> 
           <li ><a href="#engineersreport">Audit</a></li> 
       </ul>
       </div>
<div class="tabbedcontent">
<div id="engineershome" >
   <div class="table">
   <button class="add-worker-btn">Add</button>
   <h1 class="raw-material-product-name">FINANCE DEPARTMENT WORKERS</h1>
   <div class="worker-form-div">
   <form action="{{route('finance.addworker')}}" class="raw-material-input-form" method="POST">
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
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Full Name</th>
           <th>Education</th>
           <th>Experience</th>
           <th>Employment Type</th>
           <th>Position</th>
           <th>Since</th>
           <th>Until</th>
           <th>Disability</th>
           <th>Extra</th>
           <th>Edit</th>
           <th>Delete</th>
           </tr>
           @foreach($data as $item)
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
           <td><a href="{{'editfinanceworker/'.$item->id}}"> Edit </a></td>
           <td><a href="{{'deletefinance/'.$item->id}}">delete</a></td>
           </tr> 
           @endforeach
        </table>
        </div>
  
   <div class="table">
   <button class="add-tool-btn">Add</button>
   <h1 class="raw-material-product-name">MACHINES/VEHICLES/TOOLS' TABLE</h1>
   <div class="tool-form-div">
   <form action="{{route('finance.addfinancemachines')}}" class="raw-material-input-form" method="POST">
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
       </span>
      
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>
           <th>Edit</th>
           <th>Delete</th>
           </tr>
           @foreach($machine as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Status}}</td>
           <td><a href="{{'editmachinefinance/'.$item->id}}"> Edit </a></td>
           <td><a href="{{'deletefinancemachine/'.$item->id}}">delete</a></td>

           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
       <button class="add-safety-gear-btn">Add</button>
   <h1 class="raw-material-product-name">SAFETY GEARS(PPE)</h1>
   <div class="safety-form-div">
   <form action="{{route('engineers.addfinancesafety')}}" class="raw-material-input-form" method="POST">
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
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Size</th>
           <th>Quantity</th>
           <th>Edit</th>
           <th>Delete</th>
           </tr>
           @foreach($safety as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->Size}}</td>
           <td>{{$item->Quantity}}</td>
           <td><a href="{{'editsafetyfinance/'.$item->id}}"> Edit </a></td>
           <td><a href="{{'deletefinancesafety/'.$item->id}}">Delete</a></td>
           </tr>
           @endforeach
       </table>
       </div>
       <div class="table">
   <button class="add-worker-btn">Add</button>
   <h1 class="raw-material-product-name">FINANCE DEP TRAININGS RECORDS</h1>
   <div class="worker-form-div">
   <form action="{{route('finance.addtrain')}}" class="raw-material-input-form" method="POST">
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
           @foreach($financetrain as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Title}}</td>
           <td class="training-participants">{{$item->Participants}}</td>
           <td>{{$item->Starts}}</td>
           <td>{{$item->Ends}}</td>
           <td>{{$item->Approval}}</td>
           <td><a href="{{'edittrainfinance/'.$item->id}}"> Edit </a></td>
           <td><a href="{{'deletefinancetrain/'.$item->id}}">Delete</a></td>
           </tr> 
           @endforeach
   </table>  
       </div>
       </div>

       <!-- FINANCE SOPS -->


       <div id="engineerssops"> 
       <div id="qcsops" >
           <h1 class="sopdepheader">SOPS OF ALL DEPARTMENTS</h1>
           <div class="adsopformdiv">
               <form action="{{route('engine.uploadsop')}}" method="POST" class="adsopform" enctype="multipart/form-data">
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
       <!-- DEFECTS -->
       <div id="engineersdefectst">
   <div class="table">
   <button class="add-tool-btn">Add</button>
   <h1 class="raw-material-product-name">DEFECTS MACHINES/VEHICLES/TOOLS' TABLE</h1>
   <div class="tool-form-div">
   <form action="{{route('finance.addfinancedefects')}}" method="POST" class="raw-material-input-form">
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
       <label for="quantity" class="input-raw-label" class="raw-input"> Approve:</label>
       <input type="text" id="experience" name="approve" class="raw-input">
       </span>
      
       <button type="submit" class="upload-raw-btn">Upload</button>
   </form>
   </div>
       <table class="competence-workers-table">
           <tr>
           <th>SN</th>
           <th>Name</th>
           <th>For</th>
           <th>Operator(s)</th>
           <th>Status</th>
           <th>Edit</th>
           <th>Delete</th>
           </tr>
           @foreach($defects as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Name}}</td>
           <td>{{$item->For}}</td>
           <td>{{$item->Operator}}</td>
           <td>{{$item->Approve}}</td>
           <td><a href="{{'editdefectsfinance/'.$item->id}}"> Edit </a></td>
           <td><a href="{{'deletefinancedefects/'.$item->id}}">Delete</a></td>

           </tr>
           @endforeach
       </table>
       </div>
       
       </div>
       <!-- ENGINEERS REPORT -->
   <div id="engineersreport">    
   <h1 class="raw-material-product-name">AUDIT HISTORY</h1>
   <div class="engauditdiv">
       <table class="rawmaterialstable">
           <tr>
           <th>SN</th>
           <th>Date</th>
           <th>Audit Type</th>
           <th>Status</th>
           <th>Approval</th>
           
           </tr>
           @foreach($audit as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Date}}</td>
           <td>{{$item->Audit_Type}}</td>
           <td>{{$item->Status}}</td>
           <td>{{$item->Approval}}</td>  
         
           </tr>
           @endforeach
       </table>
   </div>  
   <div class="engauditdiv">

   <table class="non-conformity-table">
           <tr>
           <th>SN</th>
           <th>Non-Conformity</th>
           <th>Preventive Actions</th>
           <th>Date</th>
           <th>Approval</th>
           
           </tr>
           @foreach($nonC as $item)
           <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->Non_Conformity}}</td>
           <td>{{$item->Preventive_Action}}</td>
           <td>{{$item->Date}}</td>
           <td>{{$item->Approval}}</td>
           
           </tr>
           @endforeach
       </table>
   </div>
       </div>
       </div>
       </div>
       </div>
       </div>
   @include('qms.engineersannouncements')
   <div class="competence-qms-team">
       <h1>FINANCE DEPARTMENT TEAM</h1>
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