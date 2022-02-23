<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Forgot Password</title>
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
  
   
   
       
        <form action="{{route('password.email')}}" class="forgot-password-form" method="post">
            @csrf           
            @if(Session::get('fail'))
                {{Session::get('fail')}}
            @endif
        <div class="theauthform">
        <h1 class="authheading" >Forgot Password </h1>
            <input type="text" placeholder="Enter Your Email" class="authinput" name="email"><br>   
            <span class="signup-form-error">@error('email'){{$message}}@enderror</span> <br> <br>
            <button type="submit" class="signupbtn">Send Password Reset Link</button>
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