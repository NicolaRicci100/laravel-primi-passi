<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>my house</title>
    </head>
    <body>
        <h1>Hello World</h1>
        <h3>This is my {{$class_place}}!</h3>
        <a href="{{url('/rooms/basement')}}">go to basement<a>
        <br>
        <a href="{{url('/rooms/bedroom')}}">go to bedroom<a>
        <br>
        <a href="{{url('/rooms/kitchen')}}">go to kitchen<a>
    </body>
</html>