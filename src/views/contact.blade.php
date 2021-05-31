<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us</title>
    </head>

    <body>
        <h1> Contact us any time </h1>
        <form action="{{route('contact')}}" method ="post">
            @csrf

            <input type="text" name="name" placeholder="your Name Please">
            <br>
            <br>
            <input type="email" name="email" placeholder="Your Valid Email">
            <br>
            <br>
            <textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
            <br>
            <br>
            <input type="submit" value="Submit"> 

        </form>
    </body>
</html>
