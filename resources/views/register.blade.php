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
            <li class="link"><a href="#">Home</a></li>
        </ul>
        <a href="{{route('login')}}"><button class="btn">Sign In</button></a>
    </nav><hr>
    <!-- form -->

    <div class="whole-form">
        <form action="{{route('register')}}" method="post">
            @csrf
            <h1>Sign Up Here</h1>
            <div class="form-content-reg">                
                <div class="info-box-reg">
                    <label for="name">First Name</label>
                    <input type="text" placeholder="Enter your first Name" value="{{old('name')}}" name="name" >
                </div>
                <div class="info-box-reg">
                    <label for="name">Last Name</label>
                    <input type="text" placeholder="Enter your last Name" value="{{old('lastname')}}" name="lastname" >
                </div>
                <div class="info-box-reg">
                    <label for="name">Email</label>
                    <input type="email" placeholder="Enter valid email address" value="{{old('email')}}" name="email" >
                </div>
                @error('email')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="info-box-reg">
                    <label for="name">Adress</label>
                    <input type="text" placeholder="Enter valid email address" value="{{old('adress')}}" name="adress" >
                </div>
                <div class="info-box-reg">
                    <label for="name">Phone Number</label>
                    <input type="number" placeholder="Enter your phone number" value="{{old('phone')}}" name="phone" >
                </div>
                @error('phone')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="info-box-reg">
                    <label for="name">Password</label>
                    <input type="text" placeholder="Enter your password" value="" name="password" >
                </div>
                @error('password')
                <div class="text-danger">{{$message}}</div>
            @enderror
                <div class="info-box-reg">
                    <label for="name">Reconfirm Password</label>
                    <input type="text" placeholder="Reconfirm your password" value="" name="password_confirmation" >
                </div>
            </div>    
                <!-- <span class="passenger-type">Traveller Type</span> -->
                <div class="passenger-category">
                    <input type="radio" name="passenger" id="Adult">
                    <label for="Adult">By creating an account you agree to our <a href="">Terms & Conditions</a>.</label>
                </div>
            <div class="button-signup">
                <button>Sign Up</button>
            </div>
            <div class="passenger-category"><p>Already have an account? <a href="{{route('login')}}">Sign In</a></p></div>
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
    