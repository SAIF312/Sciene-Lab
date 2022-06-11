<?php 
session_start() ;
include('connection.inc.php');



$msg="";
if($_SERVER['REQUEST_METHOD']== "POST")
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
  


            $reg = "insert into users(name, email , message) values('$name' ,'$email' ,'$message')";
            mysqli_query($con , $reg);
            header('location:sucess.php');
       
    }
    
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css"> 
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css"> 
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">    
        <title>ScienceSchool</title>
                </head>
            <body>
                <header>
                    <nav class="sticky">
                        <div class="row">
                         <img src="resources/img/logo-white.png" alt="ScienceSchool logo" class="logo">
                         <img src="resources/img/logo.png" alt="ScienceSchool logo" class="logo-black">
                                <ul class="main-nav">
                                    <li><a href="#">Contents</a> </li>
                                    <li><a href="#">News</a> </li>
                                    <li><a href="#">Careers</a> </li>
                                    <li><a href="#">Journals</a> </li>

                                </ul>   

                        </div>

                    </nav>
                    <div class="Hero-text-box">
                        <h1>Lorem ipsum dolor sit amet<br>Adipiscing elit, sed do</h1>
                        <a class="btn btn-full" href="#">Articles</a> 
                        <a class="btn btn-full" href="../loginpage/index.php">login</a>    
                    </div>



                </header>
                <section class="section-features">
                    <div class="row">
                        <h2>Explore &mdash; More</h2>
                        <p class="long-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                    </div>
                    <div class="row">
                            <div class="col span-1-of-4 box">
                            <i class="ion-ios-infinite-outline icon-big"></i>   
                            <h3>Up to 365 days/year</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                            </div>
                            <div class="col span-1-of-4 box">
                                <i class="ion-ios-stopwatch-outline icon-big"></i>
                                <h3>Time</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                            </div>
                            <div class="col span-1-of-4 box">
                                <i class="ion-ios-people-outline icon-big"></i>
                                <h3>Commuity</h3>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                </p>
                            </div>
                            <div class="col span-1-of-4 box">
                                <i class="ion-ios-book-outline icon-big"></i>
                                <h3>Books</h3>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                            </div>
                    </div>

                </section>
                <section class="section-subject">
                    <ul class="subject-showcase clearfix">
                        <li>
                            <figure class="subject-photo">
                                <img src="resources/img/1.jpg" alt="#">
                            </figure> 
                        </li>
                        <li>
                            <figure class="subject-photo" >
                                <img src="resources/img/2.jpg" alt="#"> 
                            </figure>
                        </li>
                        <li>
                            <figure class="subject-photo">
                                <img src="resources/img/3.jpg" alt="#">
                            </figure>
                        </li>
                        <li>
                            <figure class="subject-photo">
                                <img src="resources/img/4.jpg" alt="#"> 
                            </figure>
                                </li>
                    </ul>
                     <ul class="subject-showcase clearfix">
                        <li>
                            <figure class="subject-photo">
                                <img src="resources/img/5.jpg" alt="#">
                            </figure> 
                        </li>
                        <li>
                            <figure class="subject-photo">
                                <img src="resources/img/6.jpg" alt="#"> 
                            </figure>
                        </li>
                        <li>
                            <figure class="subject-photo">
                                <img src="resources/img/7.jpg" alt="#">
                            </figure>
                        </li>
                        <li>
                            <figure class="subject-photo">
                                <img src="resources/img/8.jpg" alt="#"> 
                            </figure>
                                </li>
                    </ul>

                </section>
                <section class="section-steps">
                    <div class="row">
                        <h2>How it works &mdash; Simple as 1, 2, 3</h2>
                        <div class="row" >
                            <div class="col span-1-of-2 step-box">
                            <img src="resources/img/app-iPhone.png" alt="ScienceSchool on screen" class="app-screen">
                            </div>
                            <div class="col span-1-of-2 step-box">
                                <div class="work-step">
                                    <div>1</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                                <div class="work-step">
                                    <div>2</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                                <div class="work-step">
                                    <div>3</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                                <a href="#" class="btn-app"><img src="resources/img/aap-apple.png" alt="App Store button" ></a>
                                <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store button" ></a>

                            </div>
                        </div>
                    </div> 
                </section>

    <section class="section-cities">
                    <div class="row">
                        <h2>We're currently in these cities</h2>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-4 box">
                            <img src="resources/img/islamabad.png" alt="Islamabad">
                                <h3>Islamabad</h3>
                            <div class="city-feature">
                                <i class="ion-ios-person icon-small"></i>
                                 1600+ happy users
                            </div>
                            <div class="city-feature">
                                <i class="ion-android-star icon-small"></i>
                                60+ top researchers
                            </div> 
                            <div class="city-feature">
                                <i class="ion-social-twitter icon-small "></i>
                                 <a href="#">@ScienceSchool_ICT</a>
                            </div> 
                        </div>
                        <div class="col span-1-of-4 box">
                            <img src="resources/img/lahore.png" alt="Lahore">
                                <h3>lahore</h3>
                            <div class="city-feature">
                                <i class="ion-ios-person icon-small"></i>
                                 3700+ happy users
                            </div>
                            <div class="city-feature">
                                <i class="ion-android-star icon-small"></i>
                                160+ top researchers

                            </div> 
                            <div class="city-feature">
                                <i class="ion-social-twitter icon-small"></i>
                                 <a href="#">@ScienceSchool_Lahore</a>
                            </div> 
                        </div>
                        <div class="col span-1-of-4 box">
                            <img src="resources/img/karachi.png" alt="Karachi">
                                <h3>Karachi</h3>
                            <div class="city-feature">
                                <i class="ion-ios-person icon-small"></i>
                                 2300+ happy users

                            </div>
                            <div class="city-feature">
                                <i class="ion-android-star icon-small"></i>
                                110+ top researchers

                            </div> 
                            <div class="city-feature">
                                <i class="ion-social-twitter icon-small"></i>
                                 <a href="#">@ScienceSchool_Karachi</a>
                            </div> 
                        </div>
                            <div class="col span-1-of-4 box">
                                <img src="resources/img/multan.png" alt="Multan">
                                <h3>Multan</h3>
                                <div class="city-feature">
                                    <i class="ion-ios-person icon-small"></i>
                                         1200+ happy users
                                </div>
                                <div class="city-feature">
                                <i class="ion-android-star icon-small"></i>
                                     50+ top researchers
                                </div>
                                <div class="city-feature">
                                    <i class="ion-social-twitter icon-small"></i>
                                        <a href="#">@ScienceSchool_Multan</a>
                                </div>
                            </div>
                        </div> 



                </section>
                <section class="section-testimonials">
              
                    <div class="row">
                        <h2>Reviews from our happy users</h2>

                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 box">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </blockquote>
                                <cite><img src="resources/img/customer-1.jpg">(Alberto Duncan)</cite>
                        </div>
                        <div class="col span-1-of-3 box">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </blockquote>
                                <cite><img src="resources/img/customer-2.jpg">(Joana Silva)</cite>
                        </div>
                        <div class="col span-1-of-3 box">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </blockquote>
                                    <cite><img src="resources/img/customer-3.jpg">(Milton Chapman)</cite>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                        <h2>We're happy to hear from you</h2>
                    </div>
                    <form method="post" action="index.php" class="contact-form">
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="name">Name</label>
                            </div>    
                                <div class="col span-2-of-3">
                                    <input type="text" name="name" id="name" placeholder="Your name" required>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="email">Email</label>
                             </div>
                                <div class="col span-2-of-3">
                                    <input type="email" name="email" id="email" placeholder="Your email" required>
                                </div>

                        </div>
                      
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Drop us a line</label>
                            </div>
                                <div class="col span-2-of-3">
                                    <input type="text" name="message" placeholder="Your message">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label>
                             </div>
                             <div class="col span-2-of-3">
                                    <input type="submit" value="Send it!">
                             </div>
                        </div>
                    </form>

                </section>
                <footer>
                    <div class="row">
                        <div class="col span-1-of-2">
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">IOS App</a></li>
                                <li><a href="#">Android App</a></li>
                            </ul>
                        </div>
                        <div class="col span-1-of-2">
                            <ul class="social-nav">
                                <li><a href="#"><i class="ion-social-facebook"></i> </a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i> </a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i> </a></li>
                                <li><a href="#"><i class="ion-social-instagram"></i> </a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="row">
                     <p>
                        Copyright &copy; 2021 ScienceSchool. All rights reserved.
                     </p>
                    </div>
                </footer>

           
        </body>


    </html>
    <!--

    -->