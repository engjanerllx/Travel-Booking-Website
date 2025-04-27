<?php
session_start();

require_once "config.php";

if(isset($_POST['submit']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
    {
        $username = $_SESSION["username"];
        $sql = "INSERT INTO trips (days, destinations, attractions, activities, price, user)
        VALUES(3, 'Araceli', 'Cambari Island, Tinintinan Beach, Villa Darroca Resort', 'Trying Local Cuisine, Kayaking', 500, '$username')";
        
        if(mysqli_query($link, $sql))
        {
            echo "<script> alert('Booking Successful');  </script>";
        } else{
            echo "<script> alert('A problem occurred. Try again.');  </script>.";
        } 
    } elseif(isset($_POST['submit']) && !isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true)
    {
        header("location:login.php");
        exit;
    }

if(isset($_POST['submit2']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
    {
        $username2 = $_SESSION["username"];
        $sql2 = "INSERT INTO trips (days, destinations, attractions, activities, price, user) 
        VALUES(5, 'Araceli', 'Cambari Island, Tinintinan Beach, Villa Darroca Resort, Snorkeling, Gasa Sea Park', 'Traditional Cooking Demonstration + Fissing Techniques, Weaving, Photography + JCAH Beach House', 450, '$username2')";
        
        if(mysqli_query($link, $sql2)){
            echo "<script> alert('Booking Successful');  </script>";
        } else {
            echo "<script> alert('A problem occurred. Try again.');  </script>.";
        }
    } elseif(isset($_POST['submit2']) && !isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true)
    {
        header("location:login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Araceli</title>
    <link href="destinations.css" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>
    <a href="home.php"><img id="logo" src="images/ptclogo.png" alt="logo" style="width:30%"></a>
    <img id="motto" src="images/motto.png" alt="motto" style="width:40%">
    <div class="loginregister">
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
        {
            echo "Welcome," . htmlspecialchars($_SESSION['username']) . " | <a href='logout.php' class='btn btn-danger'>Log Out</a>";
        } else {
            echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
        }
        ?>
    </div>

    <div class = "topnav">
        <a href="home.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="aboutpal.php">About Palawan</a>
        <div class="destinationsdrop">
            <button class="destinationsbutton active">Destinations
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="destinationscontent">
                <a href="puerto.php">Puerto Princessa</a>
                <a class="active" href="araceli.php">Araceli</a>
                <a href="elnido.php">El Nido</a>
            </div>
        </div>
        <a href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>

    <img src="images/araceli.png" alt="araceli" style="width: 100%; ">   
    <div class="container">
        <div class="card">
            <div class="padding">
                <h1 style= "text-align: center"> About Araceli </h1>
                <hr>
                <p>
                    Nestled in northern Palawan, Araceli beckons with its untouched allure for discerning travelers. This emerging tourism gem boasts pristine white-sand beaches lapped by crystal-clear turquoise waters surrounding a collection of idyllic islands and islets, including the captivating Marakit, tranquil Pandan, and the uniquely shaped Slipper Island. 
                    Beneath the waves, a vibrant underwater world teeming with colorful coral reefs and diverse marine life awaits snorkelers and divers. Island hopping adventures, often on local boats, offer intimate explorations of this aquatic paradise. 
                    Beyond its natural beauty, Araceli provides a glimpse into a peaceful coastal community, where visitors can savor local delicacies like the renowned Curacha crab and experience the warm hospitality of its people, all while enjoying an authentic, off-the-beaten-path escape.
                </p>
            </div>
        </div>
        
        <div class = "attractions">
            <div class="card">
                <div class="padding">
                    <h1 style= "text-align: center">Attractions</h1>
                    <hr>
                    <img src="images/cambari.jpg" alt="Cambari Island" class="picright">
                    <h2 class = "headerleft">Cambari Island</h2>
                    <div class="textleft">
                        <p>
                            Escape to the untouched tranquility of Cambari Island, a hidden gem where powdery white sands meet the mesmerizing hues of the Sulu Sea. This idyllic island offers a true castaway experience, inviting you to unwind amidst pristine natural beauty. Imagine strolling along its secluded shores, the only footprints yours, as gentle waves whisper secrets to the sand. Dive into the crystal-clear waters teeming with vibrant coral gardens and a kaleidoscope of marine life, perfect for snorkeling and discovering the underwater wonders of Palawan
                            Cambari Island promises a serene escape, a place to disconnect from the everyday and reconnect with the soothing rhythm of nature. Its untouched charm and breathtaking scenery make it an essential stop for travelers seeking authentic beauty and peaceful solitude.
                        </p>
                    </div>
                    <br><br><br><br>
                </div>
            </div>
            
            <div class="card">
                <div class="padding">
                    <img src="images/tinintinan.jpg" alt="Tinintinan Beach" class="picleft">
                    <div class="textright">
                        <h2>Tinintinan Beach</h2>
                        <p>
                            Discover the captivating allure of Tintintinan Beach, a stretch of paradise in Barangay Tinintinan that will leave you breathless. Its defining feature is the stunning contrast of its incredibly turquoise waters against a seemingly endless expanse of powdery white sand. Unlike many beaches, Tintintinan boasts shallow waters that extend far from the shore, creating a safe and delightful haven for swimmers of all ages. Picture yourself wading in the gentle, warm sea, the fine sand soft beneath your feet, with the lush greenery providing a picturesque backdrop.
                            Often blissfully uncrowded, Tintintinan Beach offers a tranquil escape where you can truly relax, soak up the tropical sunshine, and immerse yourself in the unspoiled beauty of Palawan's coastline. It's a perfect destination for families, couples, and solo travelers seeking serenity and natural splendor.
                        </p>
                    </div>
                    <br><br>
                </div>
            </div>

        <div class="card">
            <div class="padding">
                <img src="images/Villadaroca.jpg" alt="Villa Darroca" class="picright">
                <h2 class="headerleft">Villa Darroca</h2>
                <div class="textleft">
                    <p>
                        Experience a haven of comfort and serenity at Villa Darroca, your ideal base for exploring the wonders of Araceli. Nestled in a peaceful location, Villa Darroca offers more than just accommodation; it provides a tranquil retreat with stunning views overlooking the surrounding islands and the shimmering sea. Imagine waking up to breathtaking vistas and enjoying the gentle sea breeze from your private veranda. With its comfortable amenities and warm hospitality, Villa Darroca serves as the perfect sanctuary to unwind after a day of island hopping and beach adventures. Its strategic location provides easy access to Araceli's natural attractions while offering a peaceful escape from the bustle. Whether you're seeking a romantic getaway or a relaxing family vacation, Villa Darroca promises a memorable stay immersed in the beauty of Palawan.
                    </p>
                </div>  
                <br><br><br>
            </div>
        </div>

        <div class="card">
            <div class="padding">
                <div class="packages">
                    <div class="row">

                        <h1 style= "text-align: center">Travel Packages</h1>
                        <hr>
                        <div class="column1" style="top: -77px">
                            <div class="packagecard1">
                                <h2>Araceli 3 Day Package</h2>
                                <hr>
                                <table>
                                    <tr>
                                        <th>Days</th>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>Attractions</th>
                                        <td>Cambari Island, Tinintinan Beach, Villa Darroca</td>
                                    </tr>
                                    <tr>
                                        <th>Activities</th>
                                        <td>Fishing Techniques, Traditional Cooking Demonstration</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>1000</td>
                                    </tr>
                                </table>
                                

                                <form method="post">
                                    <input type="submit" class="button" value="Book Now" name="submit">
                                </form>
                            </div>
                        </div>
                        
                        <div class="column2">
                            <div class="packagecard2">
                                <h2>Araceli 5 Day Package</h2>
                                <hr>
                                <table>
                                    <tr>
                                        <th>Days</th>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <th>Attractions</th>
                                        <td>Marakit Island, Kutad Island, Gasa Sea Park, JCAH Beach House, Langoy Island</td>
                                    </tr>
                                    <tr>
                                        <th>Activities</th>
                                        <td>Hiking + Swimming, Basket Making, Kayaking + Snorkeling</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>1500</td>
                                    </tr>
                                </table>
                    
                                <form method="post">
                                    <input type="submit" class="button" value="Book Now" name="submit2">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</body>
</html>