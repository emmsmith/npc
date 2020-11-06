<!DOCTYPE html>
<html>

<head>
    <title>Enquire - Noah's Pet Clinic</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <meta name="viewport" content="width=device-width">
</head>

<body>

    <!-- Header -->

    <header class="flex-container">
        <img id="logo" src="images/NPClogo.png">
        <nav>
            <span><a href="index.html">Home</a></span>
            <span><a href="services.html">Services</a></span>
            <span><a href="enquire.php?service1=">Enquire</a></span>
        </nav>
    </header>

    <!-- Main Content Container -->

    <!-- Title bit-->

    <div class="main">

        <div id="title">
            <h1>Enquire</h1>
        </div>

        <div id="heading">
        </div>

        <!-- About -->

        <div id="intro">
            <p>We offer a wide range of pet services to all our customers. To find out how much a service costs, please enter a service to find out it's price below. For a full list of services, please go to our Services page by clicking on the navigation link above.</p>
        </div>

        <div>
          <img id="photo" src="images/dog2-vet.png"/>
        </div>

        <div>
        <form method='GET'  action='enquire.php'>

          Service: <input type="text" name='service1' value="" />
          <input id="button" type='submit' value='Check price'>
          
          </form>
          <div id="module">
          <?php
          $con = mysqli_connect("localhost","root","", "npc");
            if (!$con) {
              die ("Failed");
            }
            //echo "success.";
          
            $a = $_GET['service1'];
          
            
          $sql = "SELECT * FROM npc where service='$a' ";
            $result = $con->query($sql);
            if (!empty($result) && $result->num_rows > 0) { 
              while($row = $result->fetch_assoc()) {  
                echo ("Cost: £".$row["price"]."<br>"); 
              } 
            }
              else {
              echo "Please enter a valid service."; 
            } 
          
          
            
            
          
          ?>
          </div>
          </div>
</body>

</html>