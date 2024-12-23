<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('public/css/lgin.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/lgin.css')}}">
    
</head>
<body>

    <header>
        <div class="img"><img src= "{{asset('/css/images/logo.png')}}" alt="" ></div>
        <div class="railaram">
        <div class="bdrail">
            
            <h1>Bangladesh Railway</h1>
        </div>
        <div class="bng">
            <h4>নিরাপদ  •  আরামদায়ক  •  সাশ্রয়ী</h4>
        </div>
        </div>
    <div class="fullbox">

    <div class="main">
    <div class="frgt">
        <h4>Forgot Password?</h4>
    </div>
    <div class="help">
        <h4>Need Help?</h4>
    </div>
    </div>

    {{-- <div>
        @php
            $j=1
        @endphp
        
            
       
        <form class="inp" action="{{route('calculate')}}" method="post">
            @csrf
            @for ($i = 0; $i < 2; $i++)
            <label for=""></label><br>
            <input id="mobpass"type="text" name="{{$j}}" value="" placeholder="Enter your name" required>
            <br>

            <label for=""></label><br>
            <input type="text" id="mobpass" name="{{$j+1}}" value=""placeholder="Enter your name " required><br><br>
            
            @php
                $j++;
            @endphp
            @endfor
            <input type="submit" id="login" name="login" >
        </form>
        
    </div> --}}
    <div>
        @php
            $j = 1;
        @endphp
    
        <form class="inp" action="{{route('calculate')}}" method="post">
            @csrf
            @for ($i = 0; $i < 2; $i++)
                <label for=""></label><br>
                <input id="mobpass" type="text" name="{{$j}}" value="" placeholder="Enter your name" required>
                <br>
    
                <label for=""></label><br>
                <input type="text" id="mobpass" name="{{$j+=1}}" value="" placeholder="Enter your name" required><br><br>
    
                @php
                    $j+=1; // Increment by 2 to skip the next number
                @endphp 
            @endfor
            <input type="submit" id="login" name="login">
        </form>
    </div>
    
    

    </div>


    </header>
</body>
</html>