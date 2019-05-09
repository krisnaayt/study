<!DOCTYPE html>
<html lang="en">
<head>

</head>
    
<body>
    @foreach($user as $data_user)
    <form action="{{url('/edit_user/'.$data_user->id)}}" method="get">
        {{ csrf_field() }}
        <input type="text" name="name" value="{{ $data_user->name }}">
        <input type="text" name="email" value="{{ $data_user->email }}">
        <input type="text" name="password" value="{{ $data_user->password }}">
        <button type="submit" >Save</button>
    </form>
    @endforeach
</body>

</html>