
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>
<body>
    
    {{$data->email}}
    <h1>HomePage</h1>
    <a href="{{route('profile')}}">Profile</a>
    <a href={{route('menu-card',$data->id)}}>Menu Card</a>
    <a href={{route('edit-menu-card')}}>Edit Menu Card</a>
    <a href={{route('add-food')}}>Add new Food</a>
   

    
</body>
</html>
