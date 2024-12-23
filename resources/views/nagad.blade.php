<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nagad</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/nagad.css')}}">
    
</head>
<body>
    <header>
        <div class="cart"><img src="{{asset('/css/images/cart.png')}}" width="70px"></div>
        <div class="bdrail">Bangladesh Travels</div>    
        <div class="invoice">
            <div class="inv">Invoice No:</div>
            <div class="no">15168582</div>
        </div>
        <div class="total">
            <div class="t">Total Amount:</div>
            <div class="a">BDT 1,896</div>
        </div>
        <div class="charge">
            <div class="ch">Charge:</div>
            <div class="bdt">BDT 0</div>
        </div>


        <form class="inp" action="{{route('ticket_done')}}" method="post">
            @csrf
        <div class="nagad">Your Nagad Account Number</div>  
        <div>
            <label for=""></label><br>
            <input id="accno"type="text" name="accno" value="" placeholder="" required>
        </div>
        </form>


        <div class="fullpara">
            <div class="para">By clicking/tapping "Proceed" you are agreeing to our</div>
            <div class="tc">Terms and Conditions</div>
        </div>
        <div class="button">
            <a href="{{route('search_flight')}}"><input type="button" id="proceed" name="proceed" value="Proceed"></a>
            <a href="{{route('search_flight')}}"><input type="button" id="close" name="close" value="Close"></a>

        </div>
        <div class="logo"><img src="{{asset('/css/images/logo (1).png')}}"  width="90px"></div>

        
    </header>
    
</body>
</html>