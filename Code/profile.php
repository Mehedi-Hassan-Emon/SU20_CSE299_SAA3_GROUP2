

<!DOCTYPE html>
<html>

<body>

<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "cse299";

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT firstname, lastname FROM patient where id=1";
$result = mysqli_query($conn, $sql);



mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title> Profile </title>
  
</head>
<body>



<div class="w3-content" style="max-width:1400px"> 
    
  <div class = "w3-margin-top-left" style="max-width:200px">

    <p><a href="coverpage.php" style = "text-decoration: none;" > <button class = "w3-button w3-block"> <i class = "fa fa-paper-plane"></i>Logout </button></a></p>

  </div>

    <header class="w3-container w3-center w3-padding-32">
      <h1><b>My Blog</b></h1>

        <p> <b>Welcome, </b> 

<?php 
$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "cse299";

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT firstname, lastname FROM patient where id = ( SELECT MAX(id) FROM patient )";
 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["firstname"]. "  " . $row["lastname"] ;
    }
} else {
    echo "0 results";
}

?>

<p>Decorate your blog with beautiful memories that you cherish. <br> We should all be grateful for the happy days. </p>

</header>

  <?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "cse299");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "images2/".basename($image);

    $sql = "INSERT INTO images2 (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM images2  WHERE id = ( SELECT MAX(id) FROM images2 )" );
?>

</div>
</body>
</html>


<!DOCTYPE html>
<html>

<body>
<div id="content">
  <?php
    if ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div' class = 'w3-center' >";
        echo "<img src='images2/".$row['image']." ' style= 'width:300px; height:330px; ' >";

        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  
</div>
</body>
</html>

</body>
</html>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">


<!-- w3-content defines a container for fixed size centered content, 
//and is wrapped around the whole page content, except for the footer in this example -->

<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 


<form class= "my-form" action="newdisplay.php"   >

      <input class="button" type="submit" value= "change profile picture" name= "" >
      <br><br><br><br>

    </form>
   </span></p>
</header>


<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="images/travel.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>TRAVEL</b></h3>
      <h5>Title description, <span class="w3-opacity">date</span></h5>
    </div>

    <div class="w3-container">
      <p> Enter Text </p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="images/friends.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>FRIENDS</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Enter Text </p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="images/chatbot.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Talk to us!</b></h4>

      
      <form class= "my-form"  action= "chatbot.php"  >

      <input class="button2" type="submit" value= "Click Here" name= "">

      <p>.</p>
      
    </form>


    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">post 1</span><br>
        <span>Description</span>
      </li>
      <li class="w3-padding-16">
        <img src="/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">post 2</span><br>
        <span>Description</span>
      </li> 
      <li class="w3-padding-16">
        <img src="/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">post 3</span><br>
        <span>Description</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">post 4</span><br>
        <span>Description</span>
      </li>  
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Comfort Place</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Memories</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Food</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Music</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Friends</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
 
</body>
</html>
