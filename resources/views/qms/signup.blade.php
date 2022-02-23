<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Signup</title>
</head>
<script src="https://kit.fontawesome.com/00cc939b56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
     <!-- <script src="{{asset('/js/qms.js')}}" type="text/javascript"></script>   -->
     <script src="{{asset('/js/indexslideshow.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/tabs.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/css/jquery-ui.theme.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.theme.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
<body>
       
    <div class="thebackground-image"  style="background:url({{asset('images/indexpaint.jpg')}})">
  
   <div class="indexwords">
       <h1 class="welcome-index">WELCOME TO OUR QUALITY MANAGEMENT 
        SYSTEM</h1>
   <h1 class="signup-index-word"> Signup by your respective <br> department for more</h1>
   </div>
   <div class="socialmedia">
       <div class="index-icons">
   <i class="fab fa-instagram" style="font-size:70px;padding:20px;color:orangered"></i>
   </div>
   <div class="index-icons">
   <i class="fab fa-facebook" style="font-size:70px;padding:20px;color:blue"></i>
   </div>
   <div class="index-icons">
   <i class="fas fa-at" style="font-size:70px;padding:20px;color:white"></i>
   </div>
   <div class="index-icons">
   <i class="fas fa-phone" style="font-size:70px;padding:20px;color:yellow"></i>
   </div>
     
        </div>
        <form action="{{route('create.route')}}" class="signupform" method="post">
            @csrf
            @if(Session::get('success'))
            <div class="signup-success-message">
                {{Session::get('success')}}
            </div>
            @endif
            
            @if(Session::get('fail'))
            <div class="signup-fail-message">
                {{Session::get('fail')}}
            </div>
            @endif
            <div class="theauthform">
            <h1 class="authheading">Signup Form </h1> <br><hr class="authhr"> <br>
            <input type="text" placeholder="First Name" class="authinput" name="FirstName" value="{{Old('FirstName')}}"><br>
            <span class="signup-form-error">@error('FirstName'){{$message}}@enderror</span> <br>
            <input type="text" placeholder="Lat Name" class="authinput" name="LastName" value="{{Old('LastName')}}"><br>
            <span class="signup-form-error">@error('LastName'){{$message}}@enderror</span> <br>
            <input type="email" placeholder="Email" class="authinput" name="Email" value="{{Old('Email')}}"><br> 
            <span class="signup-form-error">@error('Email'){{$message}}@enderror</span> <br>
            <select name="department"  id="departments" value="{{Old('department')}}">
                <option value="" class="options" disabled selected>Department</option>
                <option value="Quality Management" class="options">Quality Management</option>              
                <option value="Engeneering Department" class="options">Engeneering Department</option>
                <option value="Finance Department" class="options">Finance Department</option>
                <option value="Sales/Marketing Department" class="options">Sales/Marketing Department</option>
                <option value="Store/Wharehouse Department" class="options">Store/Wharehouse Department</option>
                <option value="Transport Department" class="options">Transport Department</option>
            </select> <br> 
            <span class="signup-form-error">@error('department'){{$message}}@enderror</span> <br>
            <input type="password" placeholder="Password" class="authinput" name="password" ><br>
            <span class="signup-form-error">@error('password'){{$message}}@enderror</span> <br>
            <input type="password" placeholder="Confirm Password" class="authinput" name="password_confirmation"><br> 
            <span class="signup-form-error">@error('password_confirmation'){{$message}}@enderror</span> <br>
            <br>
            <button type="submit" class="signupbtn">Signup</button> <br>
            <div class="indexlink">
            <a href="index" >Already have an account?</a>
            </div>
            </div>
        </form>
        
        
    
   </div>
   </div>
   
   <div class="indexfooter">
       <h1 class="indexheads">HEADS OF DEPARTMENTS</h1>
       <div class="indexfooterul">
           <ul>
               <li ><span class="indexnames">ANAMAGRETH ANDREW</span>
                   <div class="indexmemberdetails">
                   <ul>
                       <li>Department: <br> QUALITY MANAGEMENT</li>
                       <li>Phone:+255784392668</li>
                       <li>Email:Ana@gmail.com</li>
                   </ul>
                   </div>
               </li>
               <li><span class="indexnames">GODRULE MREMA</span>
               <div class="indexmemberdetails">
                    <ul>
                       <li>Department: <br>ENGENEERING </li>
                       <li>Phone:+255784392668</li>
                       <li>Email:Ana@gmail.com</li>
                    </ul>
                   </div>
               </li>
               <li><span class="indexnames">MICHAEL NYAHENDE</span>
               <div class="indexmemberdetails">
                    <ul>
                       <li>Department:<br>FINANCE </li>
                       <li>Phone:+255784392668</li>
                       <li>Email:Ana@gmail.com</li>
                    </ul>
                   </div>
               </li>
               <li><span class="indexnames">DAVID MIRAMBO</span>
               <div class="indexmemberdetails">
                    <ul>
                       <li>Department:<br>PROCUREMENT </li>
                       <li>Phone:+255784392668</li>
                       <li>Email:Ana@gmail.com</li>
                   </ul>
                   </div>
               </li>
               <li><span class="indexnames"> BENSON LYATUU</span>
               <div class="indexmemberdetails">
                    <ul>
                       <li>Department: <br> TRANSPORT </li>
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