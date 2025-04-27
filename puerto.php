<?php
session_start();

require_once "config.php";

if(isset($_POST['submit']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
{
    $username = $_SESSION["username"];
    $sql = "INSERT INTO trips (days, destinations, attractions, activities, price, user) 
    VALUES(3, 'Puerto Princesa', 'Princessa Garden Island Resort, Plaza Cuartel, Underground River', 'Firefly Watching, Seafood nigth', 2500, '$username')";
    
    if(mysqli_query($link, $sql)){
        echo "<script> alert('Booking Successful');  </script>";
    } else {
        echo "<script> alert('A problem occurred. Try again.');  </script>.";
    }
    
} elseif(isset($_POST['submit']) && !isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    header("location:login.php");
    exit;
}

if(isset($_POST['submit2']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
{
    $username2 = $_SESSION["username"];
    $sql2 = "INSERT INTO trips (days, destinations, attractions, activities, price, user) 
    VALUES(5, 'Puerto Princessa', 'Princessa Garden Island Resort, Plaza Cuartel, Underground River, Honda Bay, Starfish Island', 'Ugong Rock Adventurues, Snorkeling, Surfing', 4000, '$username2')";
    
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
    <title>Puerto</title>
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
                <a class="active" href="puerto.php">Puerto Princessa</a>
                <a href="araceli.php">Araceli</a>
                <a href="elnido.php">El Nido</a>
            </div>
        </div>
        <a href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>

    <img src="images/ppc.png" alt="puerto pricessa" style="width: 100%; ">
    <div class="container">  
        <div class="card">  
            <div class="padding">
                <h1 style= "text-align: center"> About Puerto Princessa </h1>
                <hr>
                <p>
                    Puerto Princesa, the "City in the Forest" and gateway to Palawan's wonders, beckons with its commitment to eco-tourism and breathtaking natural beauty, home to theUNESCO-listed Subterranean River and a convenient starting point for exploring the pristine islands of Honda Bay, where island hopping, snorkeling, and sun-soaked relaxation await amodst friendly Palaweno hospitality and a vibrant local culture that invites exploration through city tours, firefly watching, and unique culinary experincies.
                    They offers a wide range of accommodations to suit every budget, from budget-friendly hostels and guesthouses to luxurious beachfront resorts. Many are located within the city or on the islands, providing easy access to attractions. The dry season, from Dec to may, is generally considered the best time to visit Puerto Princessa, with sunny skies and calm seas ideal for island hopping and other outdoor activities. The wet season is from June to November. 
                </p>
            </div>
        </div>
        

        <div class = "attractions">
            <div class="card">
                <h1 style= "text-align: center; padding-top:2%">Attractions</h1>
                <hr>
                <img src="images/princesagarden.png" alt="princessa garden island resort" class="picright">
                    
                <h2 class="headerleft">Princesa Garden Island Resort</h2>
                <div class="textleft">
                    <p>
                        Princessa Garden island Resort is luxurious beachfront resort, located a short drive from Puerto Princessa International Airport, offers a tranqquil escape with a blend of modern amenities and native Palaweno design. It boasts spacious rooms and villas, some featuring private balconies, jacuzzis, or direct pool access.
                        Guests can enjoy the resort's extensive facilities, including multiple swimming pools (one of the largest in Palawan), diverse dining options, a spa for relaxation, and even a waterpark. With its focus on comfort and recreation, Princesa Garden Island is a popular choice for travelers seeking a pampering and convenient stay.
                    </p>
                    <br><br>
                </div>
            </div>

            <div class="card">
                <div class="padding">
                    <img src="images/plazacuartel.png" alt="Plaza Cuartel" class="picleft">
                    <div class="textright">
                        <h2>Plaza Cuartel</h2>
                        <p>
                            This historical plaza, situated near the Immaculate Conception Cathedral in Puerto Princesa City, is a significant landmark with a poignant past. Originally built by the Spanish as a military garrison, it later became a site of tragedy during World War II when Japanese forces burned approximately 150 American prisoners of war alive in a tunnel beneath the plaza on December 14, 1944. Today, Plaza Cuartel serves as a memorial park, a place for reflection with restored ruins and information panels detailing its wartime history. It stands as a solemn reminder of the atrocities of war and honors those who perished.                        </p>
                    </div>
                    <br>
                    <br>
                </div>
            </div>

            <div class="card">
                <div class="padding">
                    <img src="images/underground.png" alt="Underground River" class="picright">
                    <h2 class="headerleft">Underground River</h2>
                    <div class="textleft"> 
                        <p>
                            A UNESCO World Heritage Site and one of the New 7 Wonders of Nature, this park protects a spectacular limestone karst landscape and one of the world's longest navigable underground rivers, stretching over 8 kilometers. A unique feature of this river is that it flows directly into the sea, with its lower section experiencing tidal influences, making it a significant natural phenomenon.
                            Visitors embark on a guided boat tour through the cave system, marveling at impressive stalactite and stalagmite formations, vast chambers, and the diverse ecosystem that thrives within, including bats and other wildlife. The park also boasts a "mountain-to-sea" ecosystem, encompassing intact forests that are crucial for biodiversity conservation.
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

                            <div class="column1" style="top: -57px;">
                                <div class="packagecard1">
                                    <h2>Puerto Princessa 3 Day Package</h2>
                                    <hr>
                                    <table>
                                        <tr>
                                            <th>Days</th>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <th>Attractions</th>
                                            <td>Nagtabon, Plaza Cuartel, Underground River</td>
                                        </tr>
                                        <tr>
                                            <th>Activities</th>
                                            <td>Island hopping, Night Seafood</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>2500</td>
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
                                    <h2>Puerto Princesa 5 Day Package</h2>
                                    <hr>
                                    <table>
                                        <tr>
                                            <th>Days</th>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <th>Attractions</th>
                                            <td>Honda Bay Island Hopping, Plaza Cuartel, Luli Island, Sabang Beach, Baker's Hill</td>
                                        </tr>
                                        <tr>
                                            <th>Activities</th>
                                            <td>Dolphin Watching, Palawan Butterfly Sanctuary, Snorkeling, Surfing </td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>4000</td>
                                        </tr>
                                    </table>

                                    <form method="post">
                                        <input type="submit" class="btn btn-primary" value="Book Now" name="submit2">
                                    </form>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</body>