<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
    <script src="https://kit.fontawesome.com/828ac0279e.js"></script>
    <title>Home</title>
</head>
<body>
    <nav>
        <div class="nav-logo"><img src="{{asset('/css/images/Bangladesh.png')}}"></div>
        <ul class="nav-links">
            <li class="link"><a href="#">Bangladesh Travels Experience</a></li>
            <li class="link"><a href="#">About Us</a></li>
            <li class="link"><a href="{{route('home')}}">Home</a></li>
        </ul>
        <button class="btn">Contact Us</button>
    </nav><hr>

    <!-- form -->
    
    <div class="whole--form">
        <form action="{{route('login_pass')}}" method="post">
            @csrf
            <h1>Sign In</h1>
            @if (Session::has('not_logged_in'))
            <div class="alert alert-success" role="alert">
                {{Session::get('not_logged_in')}}
            </div>
            @endif
            <div class="form-content-log">                
                <div class="info-box-log">
                    <label for="name">Phone Number</label>
                    <input type="number" placeholder="Enter your phone number" vlaue=""  name="phone" >
                </div>
                @error('phone')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="info-box-log">
                    <label for="name">Password</label>
                    <input type="password" placeholder="Enter your password" vlaue="" name="password" >
                </div>
                @error('password')
                <div class="text-danger">{{$message}}</div>
                @enderror
                @if (Session::has('error'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('error')}}
                </div>
                @endif   

            
            </div>
            
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message')}}
            </div>
            @endif   
            <div class="button-login">
                <button>Sign In</button>
            </div><br>
            
            <div class="log-category"><p>Don't have an account? <a href="{{route('register')}}">Sign Up Now</a></p></div><br>
            <div class="forgot-pass"><a href="">Forgot Password?</a></div>
        </form>
    </div><br>



    <div class="lowerpart">   
        <footer>
            <div class="row">
                <div class="col">
                    <img src="{{asset('/css/images/Bangladesh.png')}}" class="logo">
                </div>
                <div class="col">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Home</a></li>
                        <li><a href="">Terms</a></li>
                        <li><a href="">Refund Policy</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col"><br>
                    <h3>Need Help?</h3>
                    <p>We are Always here for you! Knock us on Messenger anytime or Call our Hotline (10AM - 10PM).</p>
                </div>
                <div class="col">
                    <div class="social-icons">
                        <br><br>
                        <h5>Contact us in online on:</h5>
                        <i class="fa-brands fa-facebook-messenger"></i>
                        <i class="fa-brands fa-square-twitter"></i>
                        <i class="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                    </div>
                </div>
            </div>


        </footer>      
    </div>  
</body>
</html>    
    