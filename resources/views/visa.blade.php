<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocket</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/three_payment.css')}}">
</head>
<body>
    <div class="main-dbbl">

    <div class="img"><img src="{{asset('/css/images/IB_Logo.jpg')}}" alt=""></div>
    <div class="dbbl">DBBL NEXUS GATEWAY</div>
    <div class="gif"><img src="{{asset('/css/images/IB_Line.gif')}}" alt=""></div>
    <div class="acc">Mobile Account Information</div>
    <div>
        <form class="inp-visa" action="{{route('ticket_done')}}" method="post">
            @csrf
            <label for=""></label><br>
            <div class="firstinp">
                <div class="mobacc">Mobile Account</div>
                <input id="mobacc"type="text" name="mobileaccount"   value="" placeholder="" required>
            </div>

            <label for=""></label>
            <div class="secinp">
                <div class="pin">PIN</div>
                <input id="pin"type="text" name="pin" value="" placeholder="" required>
                <div class="keybo"><img src="{{asset('/css/images/keyboard.png')}}" alt=""></div>
            </div>
        </form>    
        <br><br>
            <div class="amount">
                <div class="a">Amount</div>
                <div class="digit">825.00</div>
            </div>
            <div class="curr">
                <div class="currency">Currency</div>
                <div class="bdt">BDT</div>
            </div>
            <div class="desc">
                <div class="descrip">Description</div>
                <div class="code">6780ADY795WW</div>
            </div>
        </form>
    </div>

    <div class="pic"><img src="{{asset('/css/images/Close.gif')}}" alt="">
        <img src="{{asset('/css/images/Submit.gif')}}" alt="">
        <img src="{{asset('/css/images/Reset.gif')}}" alt=""></div>
    <div class=eslpic>
        <div class="esl">EV SSL</div>
        <div class="picc"><img src="{{asset('/css/images/verified.jpg')}}"></div>
    </div>
    <div class="gif"><img src="{{asset('/css/images/IB_Line.gif')}}" alt=""></div>
    <div class="acc">DBBL E-COMM With Bangladesh Travels</div>
    <div class="dutch">ecom.dutchbanglabank.com</div>
    </div>
    
</body>
</html>