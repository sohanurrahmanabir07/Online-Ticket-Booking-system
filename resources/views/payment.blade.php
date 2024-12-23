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
        <div class="dropdown-container">
            <a href="#">My Profile</a>                    
            <div class="dropdown-content">
                <br>
                <div class="username"><p>Lamisa Sharmin</p></div>
                <p>Email address</p>
                <p>Phone number</p>
                <hr><br>
                <div class="profile"><a href="#">Profile</a></div>
                <div class="history"><a href="{{route('p_hstry')}}">Purchase History</a></div>
                <div class="pass"><a href="#">Update Password</a></div>
                <div class="logout"><a href="{{route('logout')}}">Logout</a></div><br>
            </div>
        </div>
    </nav><br><br>

    <!-- payment portion -->
    <div class="left3-bdpic"><br><br>
    <div class="left3">
        <br><br>
        <div class="one" >
            
            <div class="which">Please select your mode of Payment Method</div><br>
            <a href="{{route('bkash')}}"><div class="bk"> <img src="{{asset('/css/images/bkash.png')}}">bKash</div></a><br>
            <a href="{{route('nagad')}}"><div class="ng"> <img src="{{asset('/css/images/nagad.png')}}"></div></a><br>
            <a href="{{route('visa')}}"><div class="rk"> <img src="{{asset('/css/images/visa.png')}}"></div></a><br><br>
        </div>
        {{-- <div class="button-pay">
                <button>CONTINUE</button>
        </div><br> --}}
    </div>
    <!-- images part -->
    <div class="bdpic">
        <div><img src="{{asset('/css/images/sea.png')}}" alt=""></div><br><br>
        <div><img src="{{asset('/css/images/bdpic.jpg')}}" alt=""></div><br><br>
        <div><img src="{{asset('/css/images/ctg.jpg')}}" alt=""></div><br>

    </div>
    </div>

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
    