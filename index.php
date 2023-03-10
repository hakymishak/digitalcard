
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>My Business Card</title>
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link rel="icon" href="assets/profilepic.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>

  <?php

$host = "localhost";
$user = "root";
$password = "";
$database = "EOA";
$conn = mysqli_connect($host, $user, $password, $database);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_GET['id'];

$sql = "SELECT * FROM dbcE WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

if (!$result) {
  die("Error: " . mysqli_error($conn));
}


$user = mysqli_fetch_assoc($result);

    echo'<div class="logo">
 <br>     
    </div>';
    
    
    echo '<div class="nav-bar"><img class="navbarimg" src="assets/nfcc.png" alt="">
       <i class="navbari"> My Digital Business Card</i><br></div>';
       
echo '<div class="card-container">
        <a href="" class="hero-image-container"></a>
        <main class="main-content">
          <h1>' .$user['name'].'</h1>
          <p class="position"><strong>Co-Founder, Finance & Operation</strong></p>

          <div class="card-container1">
          <p class="company"><i>'.$user['company'].'</i></p>
          <p class="tagline"><i>"Optimising Your Warehouse Management & Performance to The Next Level"</i></p>
        </div>
  
        </main>
</div>';


echo
 '<div class="card-container2">
        <p class="contactme"> <strong>CONTACT ME</strong></p>
        <div class="coin-base">
            <a href="https://facebook.com"> <img src="assets/icons8-mail-100.png" class="small-avatar1"/></a>
            <a href="https://facebook.com"> <img src="assets/icons8-iphone-se-90.png" alt="avatar" class="small-avatar2"/></a>
            <a href="https://facebook.com"> <img  src="assets/web.png" alt="avatar" class="small-avatar3"/></a>
        </div>
  </div>


  </div>';

echo
  '<div class="card-container3">
    <p class="addme"><strong>ADD ME AT</strong></p>
    <div class="coin-base">
        <a href="https://facebook.com"><img src="assets/icons8-linkedin-circled-100.png" alt="avatar" class="small-avatar4"/></a>
        <a href="https://instagram.com"><img src="assets/icons8-facebook-100.png" alt="avatar" class="small-avatar5"/></a>
        <a href="https://facebook.com"><img  src="assets/icons8-instagram-100.png" alt="avatar" class="small-avatar6"/></a>
    </div>
</div>';

echo
'<a href='.$user['vcf'].' class="float" target="_blank">
    <i class="fa my-float">Save The Contact Card</i>
    </a>';

    mysqli_close($conn);
    ?>
  </body>
  </html>