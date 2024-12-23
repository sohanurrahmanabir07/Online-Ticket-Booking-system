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
                <div class="logout"><a href="{{route('admin_login')}}">Logout</a></div><br>
            </div>
        </div>
    </nav>

    <div class="firstmid"><h2>Search Flight</h2></div>
        <div class="line"><hr></div> <br><br>
        <div class="fle">
        <form class="inp" action="{{route('search_edit_flight')}}" method="post">
            @csrf
            <div class="trainid">
                <div>
                <div class="train">Flight Name</div>
                    <input id="train"type="text" name="flight_name" value="" placeholder="" required>
                </div>
                <br>
                <div class="train">Flight ID</div>
                    <input id="train"type="text" name="flight_id" value="" placeholder="" required>
                </div>
                <br>
            <div class="button">
                <input type="submit" id="edit" name="edit" value="Search">
            </div>
        </form><br>
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
    