<!DOCTYPE html>
<html lang="en">
<head>

</head>
    
<body>
    @foreach($user as $data_user)
    <p>{{$data_user->name}}</p>
    <p>{{$data_user->email}}</p>
    <button onclick="location.href='{{ URL('/delete_user') }}/{{ $data_user->id }}'" type="button">Delete</button>
    <button onclick="location.href='{{url('/show_edit_user')}}/{{$data_user->id}}'" type="button">Edit</button>
    <br>
    @endforeach

    <form action="{{url('/add_user')}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="password">
        <button type="submit" >Save</button>
    </form>
</body>

</html>