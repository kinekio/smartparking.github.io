<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="s1.css" type="text/css">
<style type="text/css">
	li {
		font-family: sans-serif;
		font-size:18px;
	}

html { 
  background: url(img/mainpage.jpeg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}	
	
</style>
<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            };
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
</head>
<body link="white" alink="white" vlink="white">
     <div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
			<li><a href="booktkt.php">Book Parking Spot</a></li>
            <li><A HREF="pnrstatus.php">Booking Status</A></li>
            <li><a href="location.php">Location</a></li>
			<li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
</body>
</html>
