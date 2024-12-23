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
            <li class="link"><a href="{{asset('login')}}">Login</a></li>
            @endif

    </ul>
     @if (session('user')) 
        @php
            $user=session('user')[0];
        @endphp 
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
    <div class="whole-fare">
    <div class="left-four-box">
        @php
            $arr=session('arr1');
            $flight=$arr[0];
            $p=$flight['price']*session('travellers');
            $price=number_format($p);
            $tax=.05*$p;
            $total=number_format($p+$tax);
            session(['total'=>$total]);


        @endphp

        
        <!-- <div class="top-box"> -->

    <div class="father-dividivi">
        <div class="dividivi">
            <div class="divi1">
            <p>{{$flight['start_destination']}}-{{$flight['final_destination']}}</p>
            </div>
            <div class="divi">
            <div class="airplane-pic"><img src="{{asset('/css/images/novo.png')}}" alt=""></div>
            <div class="name-class" id="name-class">
                <div><p>{{$flight['flight_name']}}</p></div>
                <div><p>({{{$flight['class']}}})</p></div>
            </div>
        </div>    
        <div class="div2">
            <div class="time-city">
                <div><p>{{$flight['start_time']}}</p></div>
                <div><p>{{session('day')}}, {{session('date')}}</p></div>
                <div><p>{{$flight['start_destination']}}</p></div>
            </div>
            <div class="arrow-pointer">
            Non-stop<br>
            ------------→    
            </div>
            <div class="time-city">
                <div><p>{{$flight['finish_time']}}</p></div>
                <div><p>{{session('day')}}, {{session('date')}}</p></div>
                <div><p>{{$flight['final_destination']}}</p></div>
            </div>
        </div><br><br>
    </div>
        <div class="dropdown--content5"><br>
            <div class="baggage"><p>Flight Details</p></div><hr><br>
            <div class="baggage"><p>Baggage</p></div><hr>
            <div class="bag-info">
                <div><h6>Flight</h6></div>
                <div><h6>Cabin</h6></div>
                <div><h6>Check-in</h6></div>
            </div>
            <div class="bag-info">
                <div><p>{{$flight['start_destination']}}-{{$flight['final_destination']}}</p></div>
                <div><p>{{$flight['cabin_kg']}}kg</p></div>
                <div><p>{{$flight['check_in']}}kg</p></div>
            </div>
            {{-- <div class="bag-info"> ---------------------------For Round Trip
                <div><p>CGP - DAC</p></div>
                <div><p>7 kg</p></div>
                <div><p>20 kg</p></div>
            </div> --}}
            <br><br><br>
        </div><br>
        
        <div class="afterpic">
            <div class="mide">
                <div class="f">By clicking on the "PROCEED TO PAYMENT" button below, you acknowledge that you have agreed to the <p>Terms & Conditions.</p></div>
                <div class="limit">Please complete your payment within 20 minutes, otherwise your seat(s) will be cancelled.</div>
                <div class="black"> • By making a payment using this site, you agree to the use of your personal details for verification and validation of your transactions to ensure no one else is using your credentials without your consent.<br>
                <br>• You must also acknowledge that the details you provide us maybe disclosed to third party credit card payment gateway agencies for verification.</div>
            </div>
        </div><br><br><br>
    <!-- form part start -->
    
       @php
           $j=1;
       @endphp
        <div class="whole-form">
            <form action="{{ route('travellers_info') }}" method="POST">
                @csrf
                @for ($i = 0; $i < session('travellers'); $i++)
                    <h2>Traveller Details {{ $i+1 }}</h2>
                    <div class="form-content">
                        <div class="info-box">
                            <label for="name">First Name</label>
                            <input type="text" placeholder="Enter First Name" value="{{ old($j) }}" name="{{ $j }}" required>
                        </div>
                        <div class="info-box">
                            <label for="name">Last Name</label>
                            <input type="text" placeholder="Enter Last Name" value="{{ old($j) }}" name="{{ ++$j }}" required>
                        </div>
                        <div class="info-box">
                            <label for="name">Email</label>
                            <input type="email" placeholder="Enter valid email address" value="{{ old($j) }}" name="{{ ++$j }}" required>
                        </div>
                        <div class="info-box">
                            <label for="name">Phone Number</label>
                            <input type="number" placeholder="Enter phone number" value="{{ old($j) }}" name="{{ ++$j }}" required>
                        </div>
                    </div>
                    <span class="passenger-type">Traveller Type</span>
                    @php
                        ++$j;
                    @endphp
                    <div class="passenger-category">
                        <input type="radio" name="{{$j}}"value="Adult" id="Adult">
                        <label for="Adult">Adult</label>
                        <input type="radio" name="{{$j}}" value="Infant" id="Infant">
                        <label for="Infant">Infant</label>
                    </div>
                    @php
                        ++$j;
                    @endphp
                    <br><br>
                @endfor
                <div class="button-continue">
                    <button>Proceed to Payment</button>
                </div>
            </form>
            
                
            </div>
        </div>
        

    
        
    </div>
    <!-- left whole part -->

    <div class="fare-main">
        <div class="icon-flight">
            
            <div class="name-class1" id="name-class">
                <div class="iconpic"><img src="{{asset('/css/images/flight-icon.png')}}" alt=""></div>
                <div><p>Flight</p></div></div>
            
                <div class="div-one-two">
                    <div class="div-one"><p>{{$flight['start_destination']}}-{{$flight['final_destination']}} </p></div>
                    @if (session('trip')=="Round Trip")
                        <div class="div-two"><p>, CGP - DAC</p></div>
                    @endif
                    
                </div>
                    <div id="round"> <p>{{session('trip')}}</p></div>
                </div> 
                <hr>
                <div class="baggage1"><h3>Fare Summary</h3></div>
                <div class="trav"><p>{{session('travellers')}} traveler</p></div>
                <div class="base-fare">
                    <div><p>Base Fare</p></div>
                    <div><p>BDT {{{$price}}} tk</p></div>    
                </div>
                <div class="base-fare">
                <div><p>Tax</p></div>
                <div><p>BDT {{$tax}} tk</p></div>    
            </div>
            <hr>
            <div class="base-fare">
                <div><p>Sub Total</p></div>
                <div><p>BDT {{$total}} tk</p></div>    
            </div>
        </div>
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
    