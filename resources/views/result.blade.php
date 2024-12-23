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
    <div class="navplusfirst">
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

        <div class="firstdiv">
            <div class="below-radio">
                @php
                    $a=route('payment');
                    $c="GET";
                    $b=route('click');
                    $d="POST";
                @endphp
                <form action="{{$b}}" method="{{$d}}">
                    @csrf
                    <div class="secondform">
                        <div class="subsecond1">
                            <p>From</p>
                            <input type="text" name="from" id="same"/>
                        </div>
                        <div class="subsecond2">
                            <p>To</p>
                            <input type="text" name="to" id="same"/>
                        </div>
                        <div class="subsecond4">
                            <p>Journey Date</p>
                            <input type="date" id="dates" name="journey_date">
                        </div>
                        <div class="subsecond4">
                            <p>Return Date</p>
                            <input type="date" id="dates" name="return_date">
                        </div>
                        <div class="subsecond5">
                            <p>Travellers</p>
                            <input type="number" name="travellers" id="same"/>
                        </div>
                        <div class="subsecond6">
                            <select id="same"  name="triptype" required>
                                <option value="Economy">Economy Class</option>
                                <option value="Business">Business Class</option>
                            </select>
                        </div>
                        <div class="subsecond6">
                            <select id="same"  name="trip_type" required>
                                <option value="one-way">One Way</option>
                                <option value="round-trip">Round Trip</option>
                            </select>
                        </div>
                        <div class="modify">
                            <button id="samee"><p>Modify Search</p></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="user--name">
        <h3>Flight Details →</h3>
        </div>

    <?php
        $arr1 = session('arr1');
        $arr2=session('arr2');
        // echo $arr2;
        $round = session('round_trip');
        foreach ($arr1 as $flight) {
            $flight1 = $flight['flight_name'];

            if ($round == 'true') {
                $arr2 = session('arr2');
                foreach ($arr2 as $arr2) {
                    $return_flight = $arr2['flight_name'];
                    if ($flight1 == $return_flight) {
                        $return_flight=$arr2;

                    ?>
                <div class="dropdown--container">

                     <div class="whole-content">
                        <div class="dropdown--content">
                            <div class="user--name" id="flight-deet">
                                <div class="text">
                                    <div class="username1">
                                        <h4>Flight Details </h4><br>
                                        <button id="dac">{{$flight['start_destination']}} - {{$flight['final_destination']}}</button>
                                    </div>
                                    <div class="pic-text">
                                        <div class="airplane-pic"><img src="{{asset('/css/images/novo.png')}}" alt=""></div>
                                        <div class="name-class" id="name-class">
                                            <div><p>{{$flight['flight_name']}}</p></div>

                                            <div><p>({{$flight['class']}})</p></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="all-times">
                                        <div class="times1">
                                            <div id="times1"><p>{{$flight['start_time']}}</p></div>
                                            <div id="times1"><p>Thu, 14 Dec, 2023</p></div>
                                            <div id="times1"><p>{{$flight['start_destination']}} </p></div>
                                        </div>
                                        <div class="arrow-pointer">
                                            <div id="mins">55m
                                                <br>
                                                -------------→
                                            </div>
                                        </div>
                                        <div class="times2">
                                            <div id="times2"><p>{{$flight['final_time']}}</p></div>
                                            <div id="times2"><p>Thu, 14 Dec, 2023</p></div>
                                            <div id="times2"><p>{{$flight['final_destination']}}</p></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="all-times">
                                        <div class="times1">
                                            <div id="times1"><p>{{$return_flight['start_time']}}</p></div>
                                            <div id="times1"><p>Fri, 15 Dec, 2023</p></div>
                                            <div id="times1"><p>{{$return_flight['start_destination']}}</p></div>
                                        </div>
                                        <div class="arrow-pointer">
                                            <div id="mins">55m
                                                <br>
                                                -------------→
                                            </div>
                                        </div>
                                        <div class="times2">
                                            <div id="times2"><p>{{$return_flight['finish_time']}}</p></div>
                                            <div id="times2"><p>Fri, 15 Dec, 2023</p></div>
                                            <div id="times2"><p>{{$return_flight['final_destination']}}</p></div>
                                        </div>
                                    </div>
                                    <div class="available-seat" id="availablee">
                                        <h2>{{$return_flight['total_seat']}}seats are available</h2>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="dropdown--content2"><br>
                            <div class="baggage"><p>Baggage</p></div><hr>
                            <div>
                                <div class="bag-info">
                                    <div><h6>Flight</h6></div>
                                    <div><h6>Cabin</h6></div>
                                    <div><h6>Check-in</h6></div>
                                </div>
                                <div class="bag-info">
                                    <div><p>DAC - CGP</p></div>
                                    <div><p>7 kg</p></div>
                                    <div><p>20 kg</p></div>
                                </div>
                                <div class="bag-info">
                                    <div><p>CGP - DAC</p></div>
                                    <div><p>7 kg</p></div>
                                    <div><p>20 kg</p></div>
                                </div><hr>
                            <div class="div3">
                                <h4>Total Fare: BDT 4,117</h4>
                                <div class="selected-arrow">
                                    <button id="selected">Selected →</button>
                                </div>
                            </div>
                            </div>

                            </div>
                        </div>
                        </div>

                    </div>
                    </div>
                    <br><br>
                    <!-- form part -->
                    <?php
                    }
                }
            }?>
        <form action="{{ route('third_page', ['id' => $flight['id'], 'total_seat' => $flight['total_seat']]) }}" method="POST">
            @csrf
            <div class="dropdown--container">

       <div class="whole-content">
          <div class="dropdown--content">
              <div class="user--name" id="flight-deet">
                  <div class="text">
                      <div class="username1">
                          <h4>Flight Details </h4><br>
                          <button id="dac">{{$flight['start_destination']}} - {{$flight['final_destination']}}</button>
                      </div>
                      <div class="pic-text">
                          <div class="airplane-pic"><img src="{{asset('/css/images/novo.png')}}" alt=""></div>
                          <div class="name-class" id="name-class">
                              <div><p>{{$flight['flight_name']}}</p></div>

                              <div><p>({{$flight['class']}})</p></div>
                          </div>
                      </div>
                      <hr>
                      <div class="all-times">
                          <div class="times1">
                              <div id="times1"><p>{{$flight['start_time']}}</p></div>
                              <div id="times1"><p>{{session('day')}}, {{session('date')}}</p></div>
                              <div id="times1"><p>{{$flight['start_destination']}} </p></div>
                          </div>
                          <div class="arrow-pointer">
                              <div id="mins">55m
                                  <br>
                                  -------------→
                              </div>
                          </div>
                          <div class="times2">
                              <div id="times2"><p>{{$flight['finish_time']}}</p></div>
                              <div id="times2"><p>{{session('day')}}, {{session('date')}}</p></div>
                              <div id="times2"><p>{{$flight['final_destination']}}</p></div>
                          </div>
                      </div>
                      <div class="available-seat" id="availablee">
                        <div class="av"><h4>Available</h3></div>
                        <div><h2>{{$flight['total_seat']}}</h2></div>

                    </div>
                      <hr>
                      {{-- <div class="all-times">
                          <div class="times1">
                              <div id="times1"><p>{{$return_flight['start_time']}}</p></div>
                              <div id="times1"><p>Fri, 15 Dec, 2023</p></div>
                              <div id="times1"><p>{{$return_flight['start_destination']}}</p></div>
                          </div>
                          <div class="arrow-pointer">
                              <div id="mins">55m
                                  <br>
                                  -------------→
                              </div>
                          </div>
                          <div class="times2">
                              <div id="times2"><p>{{$return_flight['finish_time']}}</p></div>
                              <div id="times2"><p>Fri, 15 Dec, 2023</p></div>
                              <div id="times2"><p>{{$return_flight['final_destination']}}</p></div>
                          </div>
                      </div>
                      <div class="available-seat" id="availablee">
                          <h2>{{$return_flight['total_seat']}}seats are available</h2>

                      </div> --}}


                  </div>
              </div>
          </div>

          <div class="dropdown--content2"><br>
              <div class="baggage"><p>Baggage</p></div><hr>
              <div>
                  <div class="bag-info">
                      <div><h6>Flight</h6></div>
                      <div><h6>Cabin</h6></div>
                      <div><h6>Check-in</h6></div>
                  </div>
                  <div class="bag-info">
                      <div><p>{{$flight['start_destination']}}-{{$flight['final_destination']}}</p></div>
                      <div><p>{{$flight['cabin_kg']}}kg</p></div>
                      <div><p>{{$flight['check_in']}} kg</p></div>
                  </div>
                  {{-- <div class="bag-info">
                      <div><p>CGP - DAC</p></div>
                      <div><p>7 kg</p></div>
                      <div><p>20 kg</p></div>
                  </div> --}}
                  @php
                        // $arr=session('arr1');
                        // $flight=$arr[0];
                        // $p=$flight['price'];
                        $price=number_format($flight['price']);
                        // $tax=.05*$p;
                        // $total=number_format($p+$tax);
                        // session(['total'=>$total]);

                  @endphp
               <div class="div3">
                    <h4>Total Fare: {{$price}} tk</h4>
                
                @if ($flight['total_seat']==0)
                <div class="selected-arrow"><button id="non-selected" type="reset">Select</button></div>
                @else
                <div class="selected-arrow">  <button id="selected" value="">Selected →</button></div>
                    
                @endif
                    
                
                  

              
          </div>

              </div>
          </div>
          </div>

      </div>
      </div>
    </form>
      <br><br>
        <?php
        }

        ?>
        {{-- <div class="whole-content">
        <div class="dropdown--content">
            <div class="user--name" id="flight-deet">
                <div class="text">
                    <div class="username1">
                        <h4>Flight Details </h4><br>
                        <button id="dac">DAC - CGP</button>
                    </div>
                    <div class="pic-text">
                        <div class="airplane-pic"><img src="{{asset('/css/images/novo.png')}}" alt=""></div>
                        <div class="name-class" id="name-class">
                            <div><p>NOVOAIR</p></div>

                            <div><p>(Economy)</p></div>
                        </div>
                    </div>
                    <hr>
                    <div class="all-times">
                        <div class="times1">
                            <div id="times1"><p>07:10</p></div>
                            <div id="times1"><p>Thu, 14 Dec, 2023</p></div>
                            <div id="times1"><p>DAC</p></div>
                        </div>
                        <div class="arrow-pointer">
                            <div id="mins">55m
                                <br>
                                -------------→
                            </div>
                        </div>
                        <div class="times2">
                            <div id="times2"><p>08:05</p></div>
                            <div id="times2"><p>Thu, 14 Dec, 2023</p></div>
                            <div id="times2"><p>CGP</p></div>
                        </div>
                    </div>
                    <hr>
                    <div class="all-times">
                        <div class="times1">
                            <div id="times1"><p>01:10</p></div>
                            <div id="times1"><p>Fri, 15 Dec, 2023</p></div>
                            <div id="times1"><p>CGP</p></div>
                        </div>
                        <div class="arrow-pointer">
                            <div id="mins">55m
                                <br>
                                -------------→
                            </div>
                        </div>
                        <div class="times2">
                            <div id="times2"><p>02:05</p></div>
                            <div id="times2"><p>Fri, 15 Dec, 2023</p></div>
                            <div id="times2"><p>DAC</p></div>
                        </div>
                    </div>
                    <div class="available-seat" id="availablee">
                        <h2>*70 seats are available</h2>

                    </div>


                </div>
            </div>
        </div>

        <div class="dropdown--content2"><br>
            <div class="baggage"><p>Baggage</p></div><hr>
            <div>
                <div class="bag-info">
                    <div><h6>Flight</h6></div>
                    <div><h6>Cabin</h6></div>
                    <div><h6>Check-in</h6></div>
                </div>
                <div class="bag-info">
                    <div><p>DAC - CGP</p></div>
                    <div><p>7 kg</p></div>
                    <div><p>20 kg</p></div>
                </div>
                <div class="bag-info">
                    <div><p>CGP - DAC</p></div>
                    <div><p>7 kg</p></div>
                    <div><p>20 kg</p></div>
                </div>
                <!-- <div class="div3"> -->
            <!-- <div><h4>BDT 4,117</h4></div> -->
            <div class="selected-arrow">
                <button id="selected">Selected →</button>
            </div>
        </div>

            </div>
        </div>
        </div>

    </div>
    </div>
    <br><br>
    <!-- form part --> --}}


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
