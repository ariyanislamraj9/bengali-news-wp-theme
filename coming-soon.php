<?php /* Template Name: Coming Soon */ 
 global $itpolly;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Coming Soon </title>


    

<style>
body, html {
  height: 100%;
  margin: 0;
}


.bg {
	height: 100%;
	position: relative;
	font-family: "Courier New", Courier, monospace;
	font-size: 25px;
    background: linear-gradient(45deg, #042461 0%, rgba(225, 5, 34, 0) 70%), linear-gradient(135deg, #340447 10%, rgba(49, 5, 209, 0) 80%), linear-gradient(225deg, #0f053a 10%, rgba(10, 219, 216, 0) 80%), linear-gradient(315deg, #050813 100%, rgba(9, 245, 5, 0) 70%);
}

.title2 {
	font-size: 50px;
	font-weight: 600;
	margin-bottom: 6px;
	line-height: 1;
}

.title {
	margin-bottom: 30px;
	font-size: 23px;
	text-transform: capitalize;
}

.middle {
	position: absolute;
	top: 46%;
	left: 50%;
	transform: translate(-50%, -50%);
	text-align: center;
	color: #fff;
	width: 100%;
}

.desing-developed {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	text-align: center;
	padding: 10px 0;
	color: #fff;
	font-size: 23px;
}

.desing-developed a {
	color: #fff;
	text-decoration: none;
	font-weight: 700;
	font-size: 23px;
}


</style>


</head>
<body>
    
    <div class="bg">
        <div class="middle">
            <div class="title2"><?php echo $itpolly['coming_title']; ?></div>
            <div class="title"> <?php echo $itpolly['coming_details']; ?> </div>
            <div id="itpolly"> </div>
        </div>

        <div class="desing-developed">
           Developed By <a href="" target="_balck" title="itpolly.Com"> ITPolly.Com </a>
        </div>

        
    
    </div>


     
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("<?php echo $itpolly['coming_date']; ?>").getTime();
    
    // Update the count down every 1 second
    var countdownfunction = setInterval(function() {
    
      // Get todays date and time
      var now = new Date().getTime();
      
      // Find the distance between now an the count down date
      var distance = countDownDate - now;
      
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
      // Output the result in an element with id="demo"
      document.getElementById("itpolly").innerHTML = days  + " <span> Day</span>  " + hours + " <span> Hours </span>  "
      + minutes + " <span> Minutes </span>   " + seconds + " <span> Second </span> ";
      
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("itpolly").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>


</body>
</html>

		

