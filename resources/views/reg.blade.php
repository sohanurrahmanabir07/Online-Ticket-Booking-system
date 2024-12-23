<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/regg.css')}}">
</head>
<body>
    <header>
        <nav>
         <div class="imgandname">
         <img src="{{asset('/css/images/logo.png')}}" height=100px width=100px alt="">
            <h2 id="logo">Bangladesh Railway</h2>
         </div>
         <div class="navlist">
            <ul>
                <li class="navlink"><a  href=""> Contact </a> </li>
                <li class="navlink"><a  href="">Train Information</a></li>
                <li class="navlink"><a  href="">Registration</a></li>
                <li class="navlink"><a  href="">Login</a></li>
                <li class="navlink"><a  href="">Home</a></li>


            </ul>
        </nav>
    </header>
    <main>
    <div id="rgst">
                <h2>Registration Process</h2>
    </div>

        <div class="img-verification">
            
            
            <img src="{{asset('/css/images/Vrfy.png')}}" class="vrfy"alt="">
            <h1>Verify Through NID</h1><br>
            <h4> <br> Enter the information below to verify and register your NID with Bangladesh Railway Ticketing Service <br>
               <br> If your NID is verified through SMS, please use the details used during the SMS verification.
            </h4>
        </div>
        <form action="" method="POST">
        <div class="form">
            <ul>
                <h3>Mobile Number</h3>
                <input type="text" class="input-box"  placeholder="Enter Mobile Number">
                <h3>NID</h3>
                <input type="text" class="input-box"  placeholder="Enter Your NID Number">
                <h3>Choose Date</h3>
                <input type="date" id="clndr" class="input-box" placeholder="Select Your Birth Date"><br>
                <h3>Email</h3>
                <input type="text" class="input-box"  placeholder="Enter Your Email Address">
                <h3>Address</h3>
                <input type="text" class="input-box"  placeholder="Enter Your Address">
                <h3>Password</h3>
                <input type="text" class="input-box"  placeholder="Enter Your Email Address">
                <h3>Rewrite Password</h3>
                <input type="text" class="input-box"  placeholder="Enter Your Email Address">
                <h4>If you are under 18 years old or a foreign passport holder, you can register with your birth certificate or passport by clicking the submit data button.</h4>
                <button class="btn-submit" id="a">SUBMIT</button><br>
                <h3 class="alrd"><a id="alrd"href="">Already Registered?</a></h3>
            </ul>
        </div>

        </form>
       

   
   
    </main> 
    <footer class="ft">
         <div class="imgandname">
         <img src="bangladesh-railway.png" height=100px width=100px alt="">
         <div>
            <h2 id="logo">Bangladesh Railway</h2>
            <h4 id="bng">নিরাপদ . আরামদায়ক . সাশ্রয়ী </h4>
         </div>
         </div>
      
         <div class="middlefooter">
            <h4 id="bng">Terms and Conditions | Privacy Policy</h4>
         </div>
         <div class="rightfooter">
            <h4 id="bng">Powered by</h4>
            <h2 id="bng">Brac University</h2>
         </div>
            
    </footer> 
    
    
</body>

</html>