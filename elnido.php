<?php
session_start();

require_once "config.php";

if(isset($_POST['submit']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
{
    $username = $_SESSION["username"];
    $sql = "INSERT INTO trips (days, destinations, attractions, activities, price, user) 
    VALUES(3, 'El Nido', 'Big Lagoon, Secret Lagoon, Helicopter Island', 'Exploring Caves, Ziplining', 5000, '$username')";
    
    if(mysqli_query($link, $sql)){
        echo "<script> alert('Booking Successful');  </script>.";
    } 
    else {
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
    VALUES(5, 'El Nido', 'Big Lagoon, Secret Lagoon, Helicopter Island, Taraw Cliff, Nagkalit-Kalit Waterfalls', 'Island Hopping Tours, Surfing, Sunsit Watching', 5000, '$username2')";
    
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
    <title>El Nido</title>
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
                <a href="araceli.php">Araceli</a>
                <a class="active" href="elnido.php">El Nido</a>
            </div>
        </div>
        <a href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>

    <img src="images/elnido.png" alt="El Nido" style="width 100%">
    <div class="container">
        <div class="card">
            <div class="padding">
                <h1 style="text-align:center">About El Nido</h1>
                <hr>
                <p>
                    El Nido, Palawan, a Philippine jewel nestled amidst towering limestone cliffs and the clearest turquoise waters, invites you to discover an archipelago of over fifty pristine beaches and hidden lagoons. Embark on unforgettable island-hopping adventures through iconic spots like the Big and Secret Lagoons, immerse yourself in a vibrant underwater world teeming with marine life, and find adventure in kayaking, hiking to panoramic viewpoints like Taraw Cliff, or simply unwinding on secluded shores.
                    Whether you seek thrilling explorations or tranquil escapes, El Nido's breathtaking beauty and warm hospitality promise a truly magical and lasting experience in this unparalleled paradise.

                    El Nido is not just a destination; it's an experience that will captivate your senses and leave you with memories to cherish for a lifetime. Come and discover the magic of this Philippine paradise.
                </p>
            </div>
        </div>
            
        <div class="attractions">
            <div class="card">
                <div class="padding">
                    <h1 style= "text-align: center">Attractions</h1>
                        <hr>

                        <img src="images/biglagoon.png" alt="Big Lagoon" class="picright">
                        <h2 class = "headerleft">Big Lagoon</h2>
                        <div class="textleft">
                            <p>
                            The Big Lagoon on Miniloc Island in El Nido is a breathtaking enclave where towering limestone cliffs dramatically embrace unbelievably emerald-green waters, offering a serene and awe-inspiring experience as you kayak or boat through its majestic enclosure; the stillness of the water reflects the grandeur of the surrounding rock formations, while hidden corners reveal vibrant coral gardens perfect for a refreshing snorkel, creating an immersive journey into a natural sanctuary of unparalleled beauty.       
                            Big Lagoon in El Nido is a stunning, emerald-green lagoon located on Miniloc Island, known for its towering limestone cliffs and clear, turquoise waters. It's a popular destination on El Nido's Tour A and offers opportunities for kayaking and swimming. Tour boats generally dock at the lagoon's entrance, and kayaks are available for rent. 
                            </p>
                        </div>
                        <br><br><br><br>
                </div>
            </div>  

            <div class="card">
                <div class="padding">
                    <img src="images/tarawcliff.png" alt="Taraw Cliff" class="picleft">
                    <div class="textright">
                        <h2>Taraw Cliff</h2>
                        <p>
                            Imagine standing atop El Nido's majestic Taraw Cliff, the town's iconic natural skyscraper. The exhilarating climb, a rewarding challenge for adventurous souls, culminates in breathtaking panoramic vistas. From this vantage point, the sprawling beauty of Bacuit Bay unfolds before you – a tapestry of emerald waters dotted with enchanting islands. 
                            Capture that iconic postcard-perfect shot, a testament to your adventurous spirit and the unparalleled beauty of El Nido. This isn't just a hike; it's an ascent to unforgettable memories and a perspective that will truly take your breath away.
                        </p>
                    </div>
                    <br><br>
                </div>
            </div>

            <div class="card">
                <div class="padding">
                    <img src="images/helicopter.png" alt="Helicopter Island" class="picright">
                    <h2 class="headerleft">Helicopter Island</h2>
                    <div class="textleft">
                        <p>
                        Prepare to be captivated by the distinctive silhouette of Helicopter Island as you approach. Its unique shape, resembling a helicopter in flight, is just the beginning of its allure. Step onto its pristine white-sand beaches, where powdery softness meets the gentle lapping of crystal-clear turquoise waters.
                        Dive into an underwater world teeming with vibrant coral reefs and diverse marine life, making it an idyllic haven for snorkelers and divers. Whether you seek tranquil relaxation on its stunning shores or thrilling aquatic adventures, Helicopter Island offers a picturesque escape to a truly unique and inviting paradise.
                        </p>
                    </div>  
                    <br><br>
                </div>
            </div>

            <div class="card">
                <div class="padding">
                    <div class="packages">
                        <div class="row" style="padding-bottom:25px;">
                            <h1 style= "text-align: center">Travel Packages</h1>
                            <hr>
                            <div class="column1" style="top:-17px;">
                                <div class="packagecard1">
                                    <h2>El Nido 3 Day Package</h2>
                                    <hr>
                                    <table>
                                        <tr>
                                            <th>Days</th>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <th>Attractions</th>
                                            <td>Big Lagoon, Helicopter Island, Snake Island </td>
                                        </tr>
                                        <tr>
                                            <th>Activities</th>
                                            <td>Snorkeling, Sunset Watching, Cave Exploring</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>1500</td>
                                        </tr>
                                    </table>

                                    <form method="post">
                                        <input type="submit" class="btn btn-primary" value="Book Now" name="submit">
                                    </form>
                                    <br>
                                </div>
                            </div>

                            <div class="column2">
                                <div class="packagecard2">
                                    <h2>El Nido 5 Day Package</h2>
                                    <hr>
                                    <table>
                                        <tr>
                                            <th>Days</th>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <th>Attractions</th>
                                            <td>Hidden Beach, Cadlao Lagoon, Shimizu Island, Matinloc Shrine, Cudognon Beach  </td>
                                        </tr>
                                        <tr>
                                            <th>Activities</th>
                                            <td>Hiking, Surfing, Ziplining</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>7500</td>
                                        </tr>
                                    </table>

                                    <form method="post">
                                        <input type="submit" class="btn btn-primary" value="Book Now" name="submit2">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
</body>