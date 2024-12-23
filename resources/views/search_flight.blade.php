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
            @if (!session('login'))
                <li class="link"><a href="{{route('login')}}">Login</a></li>
                <li class="link"><a href="{{route('register')}}">Register</a></li>
            @else
            @php
                if (session('user')) {
                    $user=session('user')[0];
                }
                 
            @endphp
           

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
                <div class="history"><a href="{{route('p_hstry')}}">Purchase History</a></div>
                <div class="pass"><a href="#">Update Password</a></div>
                <div class="logout"><a href="{{route('logout')}}">Logout</a></div><br>
            </div>
        </div>
        @endif
       
    </nav><hr>
    <div class="para_pic">
        <h4 class="para">Fly And Discover<br />Winter in Bangladesh</h4>

        <img src="{{asset('/css/images/nirjhar.jpg')}}" alt="" class="image"/>
    </div>
    <div class="box">
        @php
            $a=route('login');
            $b=route('click');
        @endphp
        <form action="{{$b}}" method="POST">
            @csrf
            <div class="triptype">
            <select id="trip-type" name="trip_type" value={{old('trip_type')}} required>
                <option value="one-way">One Way</option>
                <option value="round-trip">Round Trip</option>
            </select></div>
            <div class="fromto">
                <div class="box-menu">
                    <span><i class="ri-map-pin-line"></i></span>
                    <p>From</p>
                    <div class="input-box">
                    <div class="input-group">
                        <input type="text" name="from" value="{{old('name')}}" />

                    </div>
                    @error('from')
                    <div class="text-dagner ">{{$message}}</div>
                    @enderror
                    </div>
                </div>
                <div class="box-menu">
                    <span><i class="ri-calendar-line"></i></span>
                    <p>To</p>
                    <div class="input-box">
                    <div class="input-group">
                        <input type="text" name="to" value="{{old('to')}}" />

                    </div>
                    @error('to')
                    <div class="text-dagner ">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="dates">
                <div class="box-menu">
                    <span><i class="ri-calendar-line"></i></span>
                    <p>Journey Date</p>
                    <div class="input-box">
                        <div class="input-group">
                        <input type="date" value="{{old('journey_date')}}" name="journey_date"/>
                        </div>
                        @error('journey_date')
                        <div class="text-dagner ">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="box-menu">
                    <span><i class="ri-calendar-line"></i></span>
                    <p>Return Date</p>
                    <div class="input-box">
                        <div class="input-group">
                        <input type="date" value="{{old('return_date')}}" name="return_date" />
                        </div>
                        @error('return_date')
                        <div class="text-dagner ">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="travelclass">
                <div class="travel">
                    <div class="box-menu">
                        <span><i class="ri-user-3-line"></i></span>
                        <p>Travellers</p>
                        <div class="input-box2">
                            <div class="input-group">
                                <input type="number" name="travellers" value="{{old('travellers')}}" />

                            </div>
                            @error('travellers')
                                <div class="text-dagner ">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="triptype">
                    <span><i class="ri-list-check"></i></span>
                    <select id="business" name="triptype" required>
                        <span><i class="ri-list-check"></i></span>
                        <option value="Economy">Economy Class</option>
                        <option value="Business">Business Class</option>
                    </select>
                </div>
            </div>
            <div class="ss">
                <button class="search"><i class="ri-search-line"></i></button>
            </div>

        </form>
    </div>    <br><br>
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
