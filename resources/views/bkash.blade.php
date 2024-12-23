<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/three_payment.css')}}"/>
    <title>Home</title>
</head>
<body>

    
    <br><br>
    <div class="main" >
        <div class="yo"><img src="{{asset('/css/images/bklogo.png')}}" alt=""></div>
        <div class="ima"><img src="{{asset('/css/images/line.png')}}" alt=""></div>

        <div class="flex">
            <div class="lo">
                <div class="logo"><img src="{{asset('/css/images/Bangladesh.png')}}" alt=""> </div> 
                <div class="two">
                    <div class="bdtra">
                    <div class="p">Bangladesh Travels</div>
                    <div class="pp">Invoice: 15176538</div></div>
                    <div class="ppp" id="ppp">BDT {{session('total')}} tk</div>
                </div>
            </div>
            
        </div>
        <div class="pink">
            <form class="inp" action="{{route('ticket_done')}}" method="post"><br>
                @csrf
                <div class="bkash">Your bKash Account Number</div>  
                <div>
                    <label for=""></label><br>
                    <input id="accno"type="text" name="accno" value="" placeholder="e.g 01XXXXXXXXX" required>
                </div>
            </form>
            <div class="fullpara">
                <div class="para">By clicking on <a href="">"Confirm"</a> you are agreeing to the<a href="#"> terms & conditions</a></div>
            </div>
        </div>

        <div class="button">
            <a href="{{route('search_flight')}}"><button id="close" name="close" value="Close">Close</button></a>
            <a href="{{route('ticket_done')}}"><button id="conf"  name="confirm" value="Confirm">CONFIRM</button></a>
        </div>
        <div class="numb"><img src="{{asset('/css/images/numb.png')}}"></div>
    </div>

     
</body>
</html>    
    