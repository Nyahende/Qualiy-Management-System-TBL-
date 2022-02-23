<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kili</title>
</head>
<body>
    <a href="download-report">Download Report</a>
    <table style="border:1px solid black">
        <tr >
        <th>id</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Date</th>
        <th>Approval</th>
        </tr>
        @foreach($kili as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->Name}}</td>
            <td>{{$item->Quantity}}</td>
            <td>{{$item->Date}}</td>
            <td>{{$item->Approval}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>