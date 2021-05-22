<!DOCTYPE html>
<html>
    <head>
        <style>
            .divHead {
                border: 5px outset white;
                background-color: darkblue;
                text-align: center;
            }

            .body {
                color:white;
                margin: 5px;
            }
        </style>
        <title> 
            Halaman Awal 0303
        </title>
    </head>
        
    <body style="background-color:black">
        <div class="divHead"> 
                <h1 class="menu" style="color:white">Selamat datang</h1>
        </div>
        <div>
            <h3 class="body" href="{{url('/article')}}"> 
                <a style="color:white" href="{{url('/article')}}">Article</a>
            </h3>
            <h3 class="body" href="{{url('/contactus')}}"> 
                <a style="color:white" href="{{url('/contactus')}}">Contact Us</a>
            </h3>
        </div>
    </body>
</html>