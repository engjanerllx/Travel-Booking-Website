<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<html>

<link href="trips.css" type="text/css" rel="stylesheet"/>
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
        <a class="active" href="aboutpal.php">About Palawan</a>
        <div class="destinationsdrop">
            <button class="destinationsbutton">Destinations
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="destinationscontent">
                <a href="puerto.php">Puerto</a>
                <a href="araceli.php">Araceli</a>
                <a href="elnido.php">El Nido</a>
            </div>
        </div>
        <a href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>

    <!-- About Palawan Section -->
<div style="display: flex; justify-content: space-between; padding: 40px; background-color: white; border-radius: 10px; margin: 40px; box-shadow: 0 2px 10px rgb(38, 41, 44);">
  <div style="width: 60%;">
    <h2 style="font-family: Georgia, serif; font-size: 32px; margin-bottom: 20px;">About Palawan</h2>
    <div style="position: relative; background-color:rgb(124, 180, 231); padding: 30px; border-radius: 10px; font-size: 16px; line-height: 1.8; font-family: Georgia, serif;">
      <span style="font-size: 36px; color: #ccc; position: absolute; top: -10px; left: -10px;">“</span>
      Palawan is a world-renowned destination for its breathtaking land and seascapes, offering unparalleled cultural, adventure, and nature experiences. Visitors can immerse themselves in trekking through hills, valleys, and rivers, as well as snorkeling and diving in pristine waters. Additionally, there are diverse festivals held throughout the year, allowing visitors to partake and celebrate with the locals. Come and discover the truly remarkable experiences that await you in Palawan!
      <span style="font-size: 36px; color: #ccc; position: absolute; bottom: -10px; right: -10px;">”</span>
    </div>
  </div>

  <div style="width: 35%; display: flex; flex-direction: column; gap: 20px; align-items: center;">
    <div style="text-align: center;">
      <img src="images/palawan_map.jpg" alt="Geographical map of Palawan Island" style="width: 200px; height: auto; border: 1px solid #ccc;">
      <p style="font-size: 14px; color: rgb(124, 180, 231);">Geographical map of Palawan Island</p>
    </div>
    <div style="text-align: center;">
      <img src="images/philippine_flag.jpg" alt="Philippine Flag" style="width: 200px; height: auto; border: 1px solid #ccc;">
      <p style="font-size: 14px; color: rgb(124, 180, 231);">Philippine Flag</p>
    </div>
    <div style="text-align: center;">
      <img src="images/philippine_seal.jpg" alt="Official Seal of Philippine" style="width: 200px; height: auto; border: 1px solid #ccc;">
      <p style="font-size: 14px; color: rgb(124, 180, 231);">Official seal of Philippine</p>
    </div>
  </div>
</div>

</div>

<!-- Centered Section: How to get in Palawan -->
<div style="display: flex; justify-content: center; padding: 40px; background-color: white; border-radius: 10px; margin: 40px; box-shadow: 0 2px 10px rgb(38, 41, 44);">
  <div style="width: 100%; max-width: 700px;">
    <div style="background-color: rgb(124, 180, 231); padding: 30px; border-radius: 10px; font-size: 16px; line-height: 1.8; font-family: Georgia, serif; text-align: center; position: relative;">
      
      <span style="font-size: 36px; color: #ccc; position: absolute; top: -20px; left: -10px;">“</span>
      
      <!-- Airplane Icon Centered -->
      <img src="images/airplane-icon.png" alt="Airplane Icon" style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 20px; background-color: #4db8e9; padding: 20px;">

      <h2 style="font-size: 24px; font-weight: 700; margin-bottom: 15px; color: #333;">How to get in Palawan?</h2>

      <p style="font-size: 16px; line-height: 1.8; color: #444; background-color: rgb(124, 180, 231); padding: 15px; border-radius: 5px;">
        Palawan can be reached by air or sea. There are several airports on the island, including Puerto Princesa International Airport, El Nido Lio Airport, San Vicente Airport and Coron Francisco B. Reyes Airport. Those airports offer regular flights from Manila and other major Philippine cities. You can also take a ferry or a fast craft from Manila or other ports in the Philippines to Palawan. Once you arrive in Palawan, there are several transportation options to get around the island, including buses, vans, tricycles, and boats.
      </p>
      
      <span style="font-size: 36px; color: #ccc; position: absolute; bottom: -20px; right: -10px;">”</span>
    </div>
  </div>
</div>





    