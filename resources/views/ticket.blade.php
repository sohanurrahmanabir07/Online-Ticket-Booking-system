{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/ticket.css')}}"/>
    <script src="https://kit.fontawesome.com/828ac0279e.js"></script>
    <title>Home</title>
</head>
<body>
    <div class="navplusfirst">
        <div class="navplusfirst">
            <nav> 
                <div class="nav-logo"><img src="{{asset('/css/images/Bangladesh.png')}}"></div>
                <ul class="nav-links">
                    <li class="link"><a href="#">Bangladesh Travels Experience</a></li>
                    <li class="link"><a href="#">About Us</a></li>
                    <li class="link"><a href="{{route('home')}}">Home</a></li>       
                    @php
                    $user=session('user')[0];
                    @endphp
               @if (!session('login'))
                   <li class="link"><a href="#">Login</a></li>
               @endif
    
           </ul>
           {{-- <button class="btn">Contact Us</button> --}}
           {{-- <div class="dropdown-container">
               <a href="#">My Profile</a>                    
               <div class="dropdown-content">
                   <br>
                   <div class="username"><p>{{$user['name']}}</p></div>
                   <p>{{$user['email']}}</p>
                   <p>{{$user['phone']}}</p>
                   <hr><br>
                   <div class="profile"><a href="#">Profile</a></div>
                   <div class="history"><a href="{{route('p_hstry')}}">Purchase History</a></div>
                   <div class="pass"><a href="#">Update Password</a></div>
                   <div class="logout"><a href="{{route('logout')}}">Logout</a></div><br>
               </div>
           </div>
        </nav><hr>
        <div class="confirm"><h2>Your ticket has been confirmed.</h2>
        <h4>You can now download it from your booking page.</h4></div><br><br>

        <div class="whole">
            @php
                $user=session('user');
                $user=$user[0];
                $flight=session('arr1');
                $flight=$flight[0];
            @endphp

        <div class="rightbox">
            <div class="details"><p>Journey Details</p></div><hr>
            <div class=pnrcode>
                <p>Booking ID: {{$user['id']}}</p></div><hr>
            <div class="trainame">
                <p>Flight Name: {{$flight['flight_name']}}</p></div><hr>
            <div class="clsname">
                <p>Class: {{$flight['class']}}</p></div><hr>
            <div class="fromto">
                <p>From and To:{{$flight['start_destination']}} → {{$flight['final_destination']}}</p></div><hr>    
            <div class="datetime">
                <p>Journey Date: {{$flight['journey_date']}}</p></div><hr>
            <div class="datetime">
                <p>Journey Time: {{$flight['start_time']}}</p></div>
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
    </body> --}}
    {{-- </html> --}} 
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/ticket.css')}}"/>
    <title>Home</title>
</head>
<body>

    <nav>
        <div class="nav-logo"><img src="{{asset('/css/images/Bangladesh.png')}}"></div>
        <ul class="nav-links">
            <li class="link"><a href="#">Bangladesh Travels Experience</a></li>
            <li class="link"><a href="#">About Us</a></li>
            <li class="link"><a href="#">Home</a></li>          
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
                <div class="history"><a href="#">Purchase History</a></div>
                <div class="pass"><a href="#">Update Password</a></div>
                <div class="logout"><a href="#">Logout</a></div><br>
            </div>
        </div>
    </nav><hr>

    <div class="confirm">
        <h2>Congratulations! Your ticket has been confirmed successfully.</h2>
    </div>
    <div class="cont">
        <button  class="btn" onclick="openPopup()"> View Ticket</button>
        <div class="popup" id="popup"><br><br><br>
            <h3>Journey Details</h3>
            <h4>Flight Name: BRITISH AIRWAYS</h4><hr>
            <p>Booking ID: 6444BO4F2F33CS</p><hr>
            <p>Class: Economy</p><hr>
            <p>From and To: DAC → CGP</p><hr>
            <p>Journey Date: 13-12-2023</p><hr>
            <p>Journey Time: 10:06</p> 

            
            <h3>Traveller's Details</h3>
            <h5>Name: Lamisa | Phone Number: 01705365949 | Traveller Type: Adult</h5>
            <h5>Name: Chintu | Phone Number: 01705365949 | Traveller Type: Adult</h5>
            
            <button type="button" class="but" onclick="closePopup()">Go Back</button>
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
<script>
let popup = document.getElementById("popup");

function openPopup(){
    popup.classList.add("open-popup");
}
function closePopup(){
    popup.classList.remove("open-popup");
}
</script>  
</body>
</html>