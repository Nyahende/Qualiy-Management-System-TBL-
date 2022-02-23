<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Trainings</title>
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
   @include('qms.heads')
   <div id="tabbed-panel-competence">
       <div class="tabbedul">
       <ul>
           <li class="active"><a href="#Engeneering_department" >Eng.Dep</a></li> 
           <li ><a href="#finance_department">Finance.Dep</a></li> 
           <li ><a href="#q.a_department">Q.A.Dep</a></li> 
           <li ><a href="#q.c_department">QC.Dep</a></li> 
           <li ><a href="#marketing_department">Marketing.Dep</a></li> 
           <li ><a href="#store_department">Store/Warehouse.Dep</a></li> 
           <li ><a href="#transport_department">Transport.Dep</a>
       </ul>
       </div>
       <div class="tabbedcontent">
            <!--Engeneering Department  -->
    <div id="Engeneering_department" >
   <div class="table">
   <button class="add-worker-btn">Add</button>
   <h1 class="raw-material-product-name">ENGENEERING DEP TRAININGS RECORDS</h1>
   <div class="worker-form-div">
   <form action="" class="raw-material-input-form">
       <span class="raw-material-input-span">
        <label for="name" class="input-raw-label"> Title:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Participants:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Starts:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
      
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Ends:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="experience" name="experience" class="raw-input">
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
           <tr>
           <td>01</td>
           <td>ISO</td>
           <td class="training-participants">michael <br>
               joseph <br>
               george
           </td>
           <td>01/04/2022</td>
           <td>01/04/2022</td>
           <td>anna</td>
           <td>edit</td>
           <td>Delete</td>
           </tr> 
   </table>
       </div>
       </div>
       <!-- Finance Department -->
    <div id="finance_department">
   <div class="table">
   <button class="add-worker-btn">Add</button>
   <h1 class="raw-material-product-name">FINANCE DEP TRAININGS RECORDS</h1>
   <div class="worker-form-div">
   <form action="" class="raw-material-input-form">
       <span class="raw-material-input-span">
       <label for="name" class="input-raw-label"> Title:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Participants:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Starts:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
      
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Ends:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="experience" name="experience" class="raw-input">
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
           <tr>
           <td>01</td>
           <td>ISO</td>
           <td class="training-participants">michael <br>
               joseph <br>
               george
           </td>
           <td>01/04/2022</td>
           <td>01/04/2022</td>
           <td>anna</td>
           <td>edit</td>
           <td>Delete</td>
           </tr>
   </table>  
       </div>
       </div>  
       <!-- Q.A Department -->
       <div id="q.a_department">
   <div class="table">
   <button class="add-worker-btn">Add</button>
   <h1 class="raw-material-product-name">Q.A DEP TRAININGS RECORDS</h1>
   <div class="worker-form-div">
   <form action="" class="raw-material-input-form">
       <span class="raw-material-input-span">
       <label for="name" class="input-raw-label"> Title:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Participants:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Starts:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
      
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Ends:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="experience" name="experience" class="raw-input">
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
           <tr>
           <td>01</td>
           <td>ISO</td>
           <td class="training-participants">michael <br>
               joseph <br>
               george
           </td>
           <td>01/04/2022</td>
           <td>01/04/2022</td>
           <td>anna</td>
           <td>edit</td>
           <td>Delete</td>
           </tr>
   </table>
       </div>    
       </div>
       <!-- Q.C Department -->
       <div id="q.c_department">    
   <div class="table">
   <button class="add-worker-btn">Add</button>
   <h1 class="raw-material-product-name">Q.C TRAININGS RECORDS</h1>
   <div class="worker-form-div">
   <form action="" class="raw-material-input-form">
       <span class="raw-material-input-span">
       <label for="name" class="input-raw-label"> Title:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Participants:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Starts:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
      
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Ends:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="experience" name="experience" class="raw-input">
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
           <tr>
           <td>01</td>
           <td>ISO</td>
           <td class="training-participants">michael <br>
               joseph <br>
               george
           </td>
           <td>01/04/2022</td>
           <td>01/04/2022</td>
           <td>anna</td>
           <td>edit</td>
           <td>Delete</td>
           </tr>
   </table>
       </div>
       </div>
       <!-- Marketing Department -->
       <div id="marketing_department">    
   <div class="table">
   <button class="add-worker-btn">Add</button>
   <h1 class="raw-material-product-name">MARKETING DEP TRAININGS RECORDS</h1>
   <div class="worker-form-div">
   <form action="" class="raw-material-input-form">
       <span class="raw-material-input-span">
       <label for="name" class="input-raw-label"> Title:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Participants:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Starts:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
      
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Ends:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="experience" name="experience" class="raw-input">
       </span>
       <span class="raw-material-input-span">
      
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
           <tr>
           <td>01</td>
           <td>ISO</td>
           <td class="training-participants">michael <br>
               joseph <br>
               george
           </td>
           <td>01/04/2022</td>
           <td>01/04/2022</td>
           <td>anna</td>
           <td>edit</td>
           <td>Delete</td>
           </tr>
   </table>
       </div>
       </div>
       <!-- Store Department -->
       <div id="store_department">   
   <div class="table">
   <button class="add-worker-btn">Add</button>
   <h1 class="raw-material-product-name">STORE DEP TRAININGS RECORDS</h1>
   <div class="worker-form-div">
   <form action="" class="raw-material-input-form">
       <span class="raw-material-input-span">
       <label for="name" class="input-raw-label"> Title:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Participants:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Starts:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
      
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Ends:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="experience" name="experience" class="raw-input">
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
           <tr>
           <td>01</td>
           <td>ISO</td>
           <td class="training-participants">michael <br>
               joseph <br>
               george
           </td>
           <td>01/04/2022</td>
           <td>01/04/2022</td>
           <td>anna</td>
           <td>edit</td>
           <td>Delete</td>
           </tr>
   </table>
       </div>
       </div>
       <!-- Transport Department -->
       <div id="transport_department"> 
   <div class="table">
   <button class="add-worker-btn">Add</button>
   <h1 class="raw-material-product-name">TRANSPORT DEP TRAININGS RECORDS</h1>
   <div class="worker-form-div">
   <form action="" class="raw-material-input-form">
       <span class="raw-material-input-span">
       <label for="name" class="input-raw-label"> Title:</label>
       <input type="text" id="name" name="name" class="raw-input">
       </span>
       <span class="raw-material-input-span">
        <label for="quantity" class="input-raw-label"> Participants:</label>
       <input type="text" id="quantity" name="quantity" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Starts:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
      
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Ends:</label>
       <input type="date" id="experience" name="experience" class="raw-input">
       </span>
       <span class="raw-material-input-span">
       <label for="quantity" class="input-raw-label" class="raw-input"> Approval:</label>
       <input type="text" id="experience" name="experience" class="raw-input">
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
           <tr>
           <td>01</td>
           <td>ISO</td>
           <td class="training-participants">michael <br>
               joseph <br>
               george
           </td>
           <td>01/04/2022</td>
           <td>01/04/2022</td>
           <td>anna</td>
           <td>edit</td>
           <td>Delete</td>
           </tr>
   </table>
       </div>
       </div>
       </div>
   </div>
   @include('qms.anotherplan')
   <div class="competence-qms-team">
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