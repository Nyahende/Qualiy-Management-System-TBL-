<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
</head>
    <link rel="stylesheet" href="{{asset('/css/qms.css')}}"/>
    <script src="{{asset('/js/announce.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/css/jquery-ui.theme.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.theme.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
<body>
    <div class="engineersannouncementsdiv">
    <h1 class="engannounceheader">ANNOUNCEMENTS
    </h1>
    <div class="announceslidediv">
        <form action="" class="announceform">
            <textarea placeholder="Type your announcement here..." id="announceinput" cols="28" rows="5" name="announceinput" > </textarea>
            <button type="submit" id="announcesubmit">Submit</button>
        </form>
    </div>
    <div class="announceul">
    <table>
            <tr>
                <th>id</th>
                <th>Announcement</th>
                <th>Date</th>
              
            </tr>
            @foreach($announce as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->Announce}}</td>
                <td>{{$item->updated_at}}</td>
               
            </tr>
            @endforeach
        </table>
    </div>
    </div>
</body>
</html>