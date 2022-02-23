<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Login</title>
</head>
<script src="https://kit.fontawesome.com/00cc939b56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
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
        SOFTWARE</h1>
   <h1 class="signup-index-word"> Login for more</h1>
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
       
        <form action="{{route('check.route')}}" class="loginform" method="post">
            @csrf
            
            @if(Session::get('fail'))
            <div class="signup-fail-message">
                {{Session::get('fail')}}
            </div>
            @endif
            @if(Session::get('nouser'))
            <div class="signup-fail-message">
                {{Session::get('nouser')}}
            </div>
            @endif
            @if(Session::get('status'))
            <div class="signup-success-message">
                {{Session::get('status')}}
            </div>
            @endif
        <div class="theauthform">
        <h1 class="authheading" >Login Form </h1>
            <input type="text" placeholder="Email" class="authinput" name="Email"><br> 
            <span class="signup-form-error">@error('Email'){{$message}}@enderror</span> <br> <br>
            <div class="forgotlink">
            <a href="{{ route('password.request') }}">Forgot Password?</a>  
           </div> 
            <input type="password" placeholder="Password" class="authinput" name="Password"> <br>
            <span class="signup-form-error">@error('Password'){{$message}}@enderror</span><br> <br>
            <button type="submit" class="signupbtn">Login</button>
            </div>  
            <div class="indexlink">
            <a href="signup">Don't have an account?</a>  
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