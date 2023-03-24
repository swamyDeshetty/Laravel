<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1">
<tr>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>age</th>

</tr>
   @foreach($data as $item)
   <tr>
    <td>{{$item->first_name}}</td>
    <td>{{$item->last_name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->age}}</td>

    <tr>
    @endforeach

</table>
    
</body>
</html>