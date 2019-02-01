<!DOCTYPE html>
<html lang="en">
<head>

</head>
    
<body>
    @foreach($user as $data_user)
    <p>{{$data_user->name}}</p>
    <p>{{$data_user->email}}</p>
    <br>
    @endforeach
</body>

</html>