<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="moevan icons\meovan symbol.png" type="image/x-icon">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/pre.css" rel="stylesheet" />
    <title>About Us</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php"><img src="moevan icons\Wordmark logo.png" alt="logo"></a></li>
            <li><a href="login.php">
                    <h4 class="orange">login</h4>
                </a></li>
            <li>
                <div id="button" class="buttons"><img src="moevan icons\drop-down menu closed.svg" alt="dropdown"
                        style="height: 25px; width: 25px;"></div>

            </li>
        </ul>
        <div class="drop" id="drop">
            <svg xmlns="http://www.w3.org/2000/svg" width="218.808" height="150%" viewBox="0 0 218.808 394.066">
                <path id="Path_533" data-name="Path 533"
                    d="M436.788,543.145h218.8l-.03,305.437A88,88,0,0,1,568.12,937.15c-.226,0-.453,0-.681,0l-130.65.059v-43.57h28.661l47.7-166.385,11.584,51.663,62.334.1L558.315,586.907H535.9c-48.216,0-59.91,43.83-62.265,50.353L436.778,761.2V543.149Zm86.6,305.522A44.108,44.108,0,0,0,567.3,892.722h0a44.11,44.11,0,0,0,43.911-44.055h0A44.105,44.105,0,0,0,567.3,804.613h0A44.1,44.1,0,0,0,523.388,848.667Z"
                    transform="translate(-436.778 -543.145)" fill="#00cece" fill-rule="evenodd" />
            </svg>
            <ul>
                <li class="items"><a href="index.php">Home</a></li>
                <li class="items"><a href="about-us.php">About Us</a></li>
                <li class="items"><a href="services.php">Services</a></li>
                <li class="items"><a href="pricing-new.php">Pricing</a></li>
                <li class="items"><a href="signup.php">Register</a></li>
            </ul>
        </div>

    </nav>
    <main>
        <div class="image">
            <div class="words-a">
                <!-- <h3>...our pleasure</h3>
                <h2>meeting</h2>
                <h2>you</h2> -->
            </div>
        </div>
        <img class="ok" src="moevan icons\Wordmark logo - Copy.svg" alt="">
        <div class="message">
            <p>a platform where users can purchase internet Data Bundles, VTU Airtime, Bulk SMS, Pay Electricity Bills,
                TV Subscription, and more. it is an online platform to pay bills in Nigeria and get rewarded at the same
                time. We have designed our website to accomodate all, Providing users on our platform the opportunity to
                save cost and make fast, secured, efficient and rewarding purchases.</p>
            <p>feel free to <a href="#" class="orange">contact us</a></p>
        </div>
        <footer>
            <img src="moevan icons\Wordmark logo - Copy copy.svg" alt="">
            <hr>
            <ul>
                <li class="items"><a href="index.php">Home</a></li>
                <li class="items"><a href="about-us.php">About_Us</a></li>
                <li class="items"><a href="pricing-new.php">Pricing</a></li>
                <li class="items"><a href="services.php">Services</a></li>
                <li class="items"><a href="signup.php">Register</a></li>
            </ul>
            <div class="socials">
                <a href=""><img src="moevan icons\telegram_icon.svg" alt=""></a>
                <a href=""><img src="moevan icons\whatsapp_icon.svg" alt=""></a>
                <a href=""><img src="moevan icons\letter-.svg" alt=""></a>
                <a href=""><img src="moevan icons\instagram_icon.svg" alt=""></a>
                <a href=""><img src="moevan icons\twitter_icon.svg" alt=""></a>
            </div>
            <h5>
                <div class="text-muted">&copy;
                    <?php echo date('Y'); ?> MOEVAN
                </div>
            </h5>
        </footer>
    </main>

    <script src="js/dropdown.js"></script>
</body>

</html>