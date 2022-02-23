<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QMS | Password Reset</title>
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
  
   
   
       
        <form action="{{ route('password.update') }}" class="reset-password-form" method="POST">
            @csrf           
            @if(Session::get('status'))
            <div class="signup-success-message">
                {{Session::get('status')}}
            </div>
            @endif
        <div class="password-reset-form">
        <h1 class="forgot-heading" >Provide the email that has received the password reset link </h1>
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <input type="text" placeholder="Email" class="forgot-input" name="email" :value="old('email', $request->email)" ><br>  
            <span class="signup-form-error">@error('email'){{$message}}@enderror</span> <br> 
            <input type="password" placeholder="New Password" class="authinput" name="password"><br> 
            <span class="signup-form-error">@error('email'){{$message}}@enderror</span> <br> 
            <span class="signup-form-error">@error('password'){{$message}}@enderror</span> <br> 

            <input type="password" placeholder="Confirm New Password" class="authinput" name="password_confirmation" :value="__('Confirm Password')"><br> <br> 
            <span class="signup-form-error">@error('password_confirmation'){{$message}}@enderror</span> <br> 

            <button type="submit" class="signupbtn">Reset Password</button>
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