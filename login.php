<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logga in</title>
    <link rel="stylesheet" href="./style/mainStyle.css">
    <link rel="stylesheet" href="./style/loginStyle.css">
    <!-- Link to use Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <script defer type="module" src="handler.js"></script>
</head>
<body>
<header>
        <div class="headTitle">
            <h1 class="textTitle" onclick="toIndex()">Shoes US</h1>
        </div>
    </header>
    

    <nav> 

        <div class="mobileScreenMenu">
            <div class="RespDropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Meny
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="sales.php">% REA %</a>
                    <hr>
                    <a class="dropdown-item" href="myPage.php">MITT KONTO</a>
                    <hr>
                    <a class="dropdown-item" href="login.php">Inloggning</a>
                    <a class="dropdown-item" href="myPage.php">Mina sidor</a>
                    <a class="dropdown-item" href="cart.php">Min kundvagn</a>
                </div>
            </div>
        </div>
        

    <div class="largeScreenMenu">
        <div class="manWomanField">
        <div class="dropdown" id="herr">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                HERR
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="categoryListDropDown" href="menShoes.php">HERR (Alla)</a> <br>
                <hr>
                <a class="categoryListDropDown" href="#">Boots</a> <br>
                <a class="categoryListDropDown" href="#">Sneakers</a> <br>
                <a class="categoryListDropDown" href="#">Lågskor</a>
            </div>
        </div>  

        <div class="dropdown" id="dam">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DAM
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="categoryListDropDown" href="femShoes.php">DAM (Alla)</a> <br>
                <hr>
                <a class="categoryListDropDown" href="#">Boots</a> <br>
                <a class="categoryListDropDown" href="#">Sneakers</a> <br>
                <a class="categoryListDropDown" href="#">Lågskor</a> <br>
                <a class="categoryListDropDown" href="#">Pumps</a> <br>
                <a class="categoryListDropDown" href="#">Stövlar</a> 
            </div>
        </div> 
        </div> 
     

        <div class="loginCartWrap">
            <div class="loginText">
                <a href="login.php">Inloggning</a>
            </div>

            <div class="myPageText">
                <a href="myPage.php">Mina sidor</a>
            </div>

            <div class="cartField">
                <div class="numberOfItemsInCart">(...)</div>
                <a href="cart.php"><img src="./img/CartIcon.png" style="width:20px;height:auto;text-align:right;"></a>
            </div>
        </div>
    </div>
    </nav>

    <div class="article">
        <div id="loginDiv">
        <h1>Username</h1>
        <input type="text" id="usernameInput">
        <h1>Password</h1>
        <input type="password" id="passwordInput">
        <button id="login_btn">Login</button>
    </div>
    
    
    <footer>
        <br> <br>
    <div class="newsletterField">
        Prenumerera på vårt nyhetsbrev: <input type="text" class="newsletterInput" value="Din e-postadress...">
        <button class="sendBtn">Skicka</button>
    </div>
    <br> <hr> 
    <div class="footWrap">
        
        
        <div class="contactUs">
            <h3>Kontakta Oss</h3>
            E-mail: <a href = "mailto: shoesus@gmail.com">ourmail@shoesus.com</a><br>
            Adress: Våragatan 6 <br> 455 65 Göteborg <br> Sverige
        </div>
        
        <div class="clientService">
            <h3>Kundtjänst</h3>
            <a href="#">Köpvillkor</a><br>
            <a href="#">Leverans</a><br>
            <a href="#">Byte/Returer</a><br>
            <a href="#">Integritetspolicy</a>
        </div>
        
        <div class="beMember">
            <h3>Medlem</h3>
            <a href="#">Bli medlem</a><br>
            <a href="#">Nyhetsbrev</a>
        </div>
    </div>
    
</footer>
</body>
</html>