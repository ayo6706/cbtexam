<html>
<body>
<div id="countdown"></div>
<div id="notifier"></div>
<?php
session_start();



 if(empty($_SESSION['starttime'])) {
 $_SESSION['starttime'] = 40;
 $starttim = $_SESSION['starttime'];
 }else{
 $starttim = $_SESSION['starttime'];
 }
?>

<script type="text/javascript">

(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }

  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 10 ? 0 : x);

  }



  function setTimer( remain, actions ) {

    var action;

    (function countdown() {

       display("countdown", toMinuteAndSecond(remain));

       if (action = actions[remain]) {

         action();

       }

       if (remain > 0) {
         remain -= 1;
         setTimeout(arguments.callee, 1000);
       }
    })(); // End countdown
  }

  setTimer( <?php echo $starttim; ?> , {
    10: function () { display("notifier", "Just 10 seconds to go"); },
     5: function () { display("notifier", "5 seconds left");        },
     0: function () { display("notifier", "Time is up baby");       }
  });
})();



var html = document.getElementById("countdown").innerHTML;


</script>

<?php

 $_SESSION['starttime'] = '<script>html</script>';
  
  echo $_SESSION["starttime"];
  
  // Set session variables
  $_SESSION["favcolor"] = "<script>html</script>";
  $_SESSION["favanimal"] = "cat";
  echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
  

?>


<h2>JavaScript Variables</h2>

<p>Create a variable, assign a value to it, and display it:</p>

<p id="demo"></p>

<script>
var carName = document.getElementById("countdown").innerHTML;
document.getElementById("demo").innerHTML = carName;
</script>


<?php $starttime = '<div id="countdown"></div>' ?>
<?php echo $starttime?>

<script>
   var res = carName;
</script>
<?php
  $_SESSION['starttime'] = "<script>document.writeln(res);</script>";
  echo $_SESSION['starttime'];
?>









<script>

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};</script>

<body>
    <div>Registration closes in <span id="time">05:00</span> minutes!</div>
    
    
    
    <?php
    if(empty($_SESSION['starttime'])) {
    $_SESSION['starttime'] = 40;
    $starttim = $_SESSION['starttime'];
    }else{
    $starttim = $_SESSION['starttime'];
    }
    
    
    ?>
</body>
</body>
</html>
