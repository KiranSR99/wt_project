<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placement Site</title>

    <link rel="shortcut icon" href="./Images/shortcutIcon.png" type="img">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/signup.css">
    <link rel="stylesheet" href="./CSS/login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cookie&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,
700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,200;1,300;1,400;1,500;1,600;1,700&
family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800&display=swap"
        rel="stylesheet">
</head>

<body>
    <main>
        <header>
            <nav>
                <div class="header">
                    <div class="logo">
                        <a href="./index.html"><img src="./Images/logo.png" alt="logo"></a>
                    </div>
                    <div class="menu">
                        <ul type="none">
                            <li><a href="#"></a>Home</li>
                            <li><a href="#"></a>About</li>
                            <div>
                                <a href="#" id="signup" class="btn-bold">Sign Up</a>
                                <a href="#" id="login" class="btn-bold">Log In</a>
                            </div>
                            <!-- <a href="#"><img class="icon" src="./Images/user - Copy.png" alt="icon" height="35px"
                                    width="35px"></a> -->

                        </ul>
                    </div>
                </div>
            </nav>

            <div class="header-content">
                <div class="container">
                    <h1>Order Placement Site</h1>
                    <p>This is our order placement site where you can place any of your work order related to
                        graphics
                        design, app development, web design and many many others services.
                    </p>

                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </header>

        <section class="services">
            <div class="container">
                <div class="section-header">
                    <h3 class="title">Services We Provide</h3>
                </div>

                <div class="cards-container">
                    <div class="cards">
                        <div class="card-wrap">
                            <div class="card">
                                <div class="card-content">
                                    <img src="./Images/graphic design.png" alt="graphics">
                                    <p>Graphics Design</p>
                                    <a href="./services.html" class="btn small">Place Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrap">
                            <div class="card">
                                <div class="card-content">
                                    <img src="./Images/FED1.png" alt="graphics">
                                    <p>Front End Development</p>
                                    <a href="#" class="btn small">Place Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrap">
                            <div class="card">
                                <div class="card-content">
                                    <img src="./Images/APP.png" alt="graphics">
                                    <p>App Development</p>
                                    <a href="#" class="btn small">Place Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrap">
                            <div class="card">
                                <div class="card-content">
                                    <img src="./Images/graphic design.png" alt="graphics">
                                    <p>Graphics Design</p>
                                    <a href="./services.html" class="btn small">Place Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrap">
                            <div class="card">
                                <div class="card-content">
                                    <img src="./Images/FED1.png" alt="graphics">
                                    <p>Front End Development</p>
                                    <a href="#" class="btn small">Place Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrap">
                            <div class="card">
                                <div class="card-content">
                                    <img src="./Images/APP.png" alt="graphics">
                                    <p>App Development</p>
                                    <a href="#" class="btn small">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="popup-signup">
        <div class="wrapper">
            <form action="signupDetail.php" method="POST">
                <div class="head">
                    <a href="#" class="cross"><img src="./Images/crossmark.png" alt=""></a>
                    <h1>Sign Up</h1>
                    <p>Already have an account ? <a href="#">Log In</a></p>
                </div>
                <div class="inputFields">
                    <div class="row-input">
                        <span>First Name</span>
                        <input type="text" name="fname" placeholder="">
                    </div>
                    <div class="row-input">
                        <span>Last Name</span>
                        <input type="text" name="lname" placeholder="">
                    </div>
                </div>
                <div class="inputFields">
                    <div class="row-input">
                        <span>Email</span>
                        <input type="email" name="email" placeholder="">
                    </div>
                    <div class="row-input">
                        <span>Contact</span>
                        <input type="contact" name="contact" placeholder="">
                    </div>
                </div>
                <div class="input-box">
                    <span>Username</span>
                    <input type="text" name="username" placeholder="">
                </div>
                <div class="input-box">
                    <span>Password</span>
                    <input type="password" name="password" placeholder="">
                </div>
                <div class="input-box">
                    <span>Confirm Password</span>
                    <input type="password" name="confirmPass" placeholder="">
                </div>
                <div class="button">
                    <input type="submit"class="custom-btn" name="signup" value="SIGN UP">
                </div>
                <div class="otherLogin">
                    <p>or sign up with</p>
                </div>
                <div class="socialLogin">
                    <a href="#" class="google">
                        <img src="./Images/google.png" alt="">
                        <span>Google</span>
                    </a>
                    <a href="#" class="facebook">
                        <img src="./Images/facebook.png" alt="">
                        <span>Facebook</span>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="popup-login">
        <div class="main">
            <form action="loginDetail.php" method="POST">
                <div class="header">
                    <a href="#" class="xmark"><img src="./Images/crossmark.png" alt=""></a>
                    <h1>Log In</h1>
                    <p>Doesn't have an account yet ? <a href="#">Sign Up</a></p>
                </div>
                <div class="input-fields">
                    <span>Username/Email Address</span>
                    <input type="text" name="emailORusername" placeholder="">
                </div>
                <div class="input-fields">
                    <span>Password</span>
                    <span><a href="#">Forgot Password ?</a></span>
                    <input type="password" name="loginPass" placeholder="">
                </div>
                <div class="button">
                <input type="submit"class="custom-btn" name="login" value="LOG IN">
                </div>
                <div class="other-login">
                    <p>or login with</p>
                </div>
                <div class="social-login">
                    <a href="#" class="google">
                        <img src="./Images/google.png" alt="">
                        <span>Google</span>
                    </a>
                    <a href="#" class="facebook">
                        <img src="./Images/facebook.png" alt="">
                        <span>Facebook</span>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- <?php
        $con=mysqli_connect('localhost','root','','wt_project');
        if(isset($_POST['signup'])){
            $fname       = $_POST['fname'];
            $lname       = $_POST['lname'];
            $email       = $_POST['email'];
            $contacr     = $_POST['contact'];
            $username    = $_POST['username'];
            $password    = $_POST['password'];
            $confirmPass = $_POST['confirmPass'];
            $signup      = $_POST['signup'];
            $query = "INSERT INTO signup (fname,lname,email,contact,username,password,confirmPass,signup) VALUES('$fname','$lname','$email','$contact','$username','$password','$confirmPass','$signup')";
            $run = mysqli_query($con,$query);
        }
    ?> -->

    <script src="./JS/main.js"></script>

</body>

</html>