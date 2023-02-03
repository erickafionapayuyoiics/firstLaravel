<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            input{
                width: 250px;
                height: 20px;
                border-radius: 10px;
                margin: 2px;
            }
            button{
                color: white;
                background-color: #21618C;
                font-size: 15px;
                border: 2px solid #21618C;
                border-radius: 5px;
                margin-top: 10px;
            }
        </style>
        <title>My First Project</title>
    </head>
    <h3>Users</h3>
    @foreach ($names as $name)
        
            User {{$loop->index+1}}: {{$name}} <br>
        
    @endforeach

    <h3>Occupations</h3>
    @foreach ($occupations as $occupation)
            User {{$loop->index+1}}: {{$occupation}} <br>
    @endforeach
        
</html>