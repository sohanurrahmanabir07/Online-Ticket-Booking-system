<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('/css/refund.css')}}"/>
    <script src="https://kit.fontawesome.com/828ac0279e.js"></script>
    <title>Home</title>
</head>
<body>
       <nav>
        <div class="nav-logo"><img src="{{asset('/css/images/Bangladesh.png')}}"></div>
        <ul class="nav-links">
            <li class="link"><a href="#">Bangladesh Travels Experience</a></li>
            <li class="link"><a href="#">About Us</a></li>
            <li class="link"><a href="#">Home</a></li>
            @php
                 $user=session('user')[0];
            @endphp
            @if (!session('login'))
                <li class="link"><a href="#">Login</a></li>
            @endif

        </ul>
        {{-- <button class="btn">Contact Us</button> --}}
        <div class="dropdown-container">
            <a href="#">My Profile</a>                    
            <div class="dropdown-content">
                <br>
                <div class="username"><p>{{$user['name']}}</p></div>
                <p>{{$user['email']}}</p>
                <p>{{$user['phone']}}</p>
                <hr><br>
                <div class="profile"><a href="#">Profile</a></div>
                <div class="history"><a href="#">Purchase History</a></div>
                <div class="pass"><a href="#">Update Password</a></div>
                <div class="logout"><a href="{{route('logout')}}">Logout</a></div><br>
            </div>
        </div>
    </nav><hr>


    <div class="refund_req" id="reff"><p>Refund Request</p></div><br>
        <div class="refund_line"><hr color=#525e8d></div><br>
        <div class="refund_box">
            <div class="airway">
                NOVOAIR Flight No: BG 147 | Boeing 788 <br>
                Booking ID: FB-NA2312040313
            </div>
            <div class="j_date">
                <div class="j">Journey Date:</div>
                <div class="date">03 May 2023,10:06</div>
            </div>
                <div class="two_button">
                <div> <input type="button" id="dw" name="dw" value="Refund"></div>
                <div> <input type="button" id="ct" name="dw" value="Dismiss"></div>      
            </div>     
        </div><br><br>


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
    