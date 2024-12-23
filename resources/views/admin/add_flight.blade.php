<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <li class="link"><a href="{{route('admin_panel')}}">Home</a></li>          
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
    </nav><hr>
    @if (Session::has('flight_added'))
        <div class="alert alert-success">
        <strong>Success!</strong> New Flight Added
        
        </div>
            {{-- {{Session::get('not_logged_in')}} --}}
        {{-- </div> --}}
    @endif
    <div class="whole-form">
       
        <form action="{{route('new_flight')}}" method="post">
            @csrf
            <h1>Add New Flight Details</h1>
            <div class="form-content-reg">                
                <div class="info-box-reg">
                    <label for="name">Flight type</label>
                    <input type="text" placeholder="Enter type of flight" name="flight_type" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Flight Name</label>
                    <input type="text" placeholder="Enter name of flight" name="flight_name" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Departure</label>
                    <input type="text" placeholder="Enter name of start destination" name="start_destination" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Arrival</label>
                    <input type="text" placeholder="Enter name of final destination" name="final_destination" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Departure Time</label>
                    <input type="text" placeholder="Enter time of departure" name="start_time" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Arival Time</label>
                    <input type="text" placeholder="Enter time of arrival" name="finish_time" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Class type</label>
                    <input type="text" placeholder="Enter type of class" name="class" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Number of total seat</label>
                    <input type="text" placeholder="Enter number of total seat" name="total_seat" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Price</label>
                    <input type="text" placeholder="Enter price" name="price" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Journey Date</label>
                    <input type="text" placeholder="Enter date of journey" name="j_date" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Cabin</label>
                    <input type="number" placeholder="Enter weight of cabin" name="cabin" required>
                </div>
                <div class="info-box-reg">
                    <label for="name">Check-In</label>
                    <input type="number" placeholder="Enter weight for check-in" name="checkin" required>
                </div>

            </div>    
            <div class="button-signup">
                <button>Click for saving</button>
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
    