<?php
var_dump($data);
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>
<body>
    
    
    <h1>HomePage</h1>
    <a href="{{route('profile')}}">Profile</a>
    <a href={{route('menu-card')}}>Menu Card</a>
    <a href={{route('edit-menu-card')}}>Edit Menu Card</a>
   

    
</body>
</html>