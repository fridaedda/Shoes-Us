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
    <script src="handler.js"></script>
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
                    <a class="dropdown-item" href="login.php">Inloggning</a>
                    <a class="dropdown-item" href="myPage.php">Mina sidor</a>
                    <a class="dropdown-item" href="cart.php">Min kundvagn</a>
                </div>
            </div>
        </div>
        

    <div class="largeScreenMenu">
        <div class="dropdown">
            <button class="dropBtn">Dam
            </button>
            <div class="dropdownContent">
                <a href="#">Boots</a>
                <a href="#">Sneakers</a>
                <a href="#">Lågskor</a>
                <a href="#">Pumps</a>
                <a href="#">Stövlar</a>
            </div>
        </div>  

        <div class="dropdown">
        <button class="dropBtn">Herr</button>
            <div class="dropdownContent">
                <a href="#">Boots</a>
                <a href="#">Sandaler</a>
                <a href="#">Sneakers</a>
                <a href="#">Lågskor</a>
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

    <div id="loginDiv">
        <div>
            <h1>Logga in:</h1>
        </div>
        <div id="username">
            Användarnamn:<input type="text" placeholder="Användarnamn" id="usernameInput">
        </div> 
        <div id="password">
            Lösenord:<input type="text" placeholder="Lösenord" id="passwordInput">
        </div>
        <div id="button">
            <button id="loginButton">Logga in</button>
        </div>    
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