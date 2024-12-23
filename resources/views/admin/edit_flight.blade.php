<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}"/>
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
        </ul>
        <div class="dropdown-container">
            <a href="#">Admin's Profile</a>                    
            <div class="dropdown-content">
                <br>
                <div class="username"><p>Admin</p></div>
                <p>Email address</p>
                <p>Phone number</p>
                <hr><br>
                <div class="profile"><a href="#">Profile</a></div>
                <div class="pass"><a href="#">Update Password</a></div>
                <div class="logout"><a href="#">Logout</a></div><br>
            </div>
        </div>
    </nav>
@php
    $flight=session('flight');
    return $flight;
@endphp
   <div class="whole-form-edit">
        <form action="{{route('new_flight')}}" method="post">
            @csrf
            <h1>Edit Flight Details</h1>
            <div class="form-content-reg">                
                <div class="info-box-edit">
                    <label for="name">Flight type</label>
                    <input type="text" placeholder="boeing 777" name="flight_type'" value="{{$flight['flight_type']}}"  required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Flight Name</label>
                    <input type="text" placeholder="British Airways" name="flight_name" value="{{$flight['flight_name']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Departure</label>
                    <input type="text" placeholder="Dhaka" name="start_destination" value="{{$flight['start_destination']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Arrival</label>
                    <input type="text" placeholder="Doha" name="final_destination" value="{{$flight['final_destination']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Departure Time</label>
                    <input type="text" placeholder="7:40" name="start_time" value="{{$flight['start_time']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Arival Time</label>
                    <input type="text" placeholder="19:55" name="finish_time" value="{{$flight['finish_time']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Class type</label>
                    <input type="text" placeholder="Economy" name="class" value="{{$flight['class']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Number of total seat</label>
                    <input type="tel" placeholder="200" name="total_seat" value="{{$flight['toatl_seat']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Price</label>
                    <input type="tel" placeholder="30000" name="price" value="{{$flight['price']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Journey Date</label>
                    <input type="date" placeholder="13-12-2023" name="j_date" value="{{$flight['journey_date']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Cabin</label>
                    <input type="tel" placeholder="9" name="cabin" value="{{$flight['cabin_kg']}}" required>
                </div>
                <div class="info-box-edit">
                    <label for="name">Check-In</label>
                    <input type="tel" placeholder="25" name="checkin" value="{{$flight['check_in']}}" required>
                </div>

            </div>    
            <div class="button-edit">
                <button>Edit</button>
            </div>
        </form>
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
    