<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }   

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
            input{
                width: 250px;
                height: 20px;
                border-radius: 10px;
                margin: 5px;
            }
            button{
                color: white;
                background-color: #21618C;
                font-size: 15px;
                border: 2px solid #21618C;
                border-radius: 5px;
                margin-top: 10px;
            }
            textarea{
                width: 250px;
                height: 20px;
                border-radius: 10px;
                margin: 5px;
            }
        </style>
        <title>My First Project</title>
    </head>

    <form method="post" action="{{route('user.search')}}">
        @csrf
        <h2>Welcome! Please enter your name.</h2>
        <label for = "title">Name</label>
        <br>
        <input id = "title"
            type="title"
            name = "name"
            class="@error('title') is-invalid @else is-valid @enderror">
            <br>
            <button type="submit">
                Submit
            </button>    
    </form>
</html>