<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();

?>

<?php 
// Program to display URL of current page. 
  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
// Here append the common URL characters. 
$link .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI']; 
      
// Print the link 

?> 
<?php
$total    = $exm->getTotalRows();
$totaln = $total + 1; 
if ($link=="http://localhost/staffexam/test.php?q=$totaln"){
	header("Location: final.php");
	}
	
if(isset($_GET['q'])){
  $number = (int)$_GET['q'];   /*here now $number = quesNo*/
}else{
    header("Location:exam.php");
}
$total    = $exm->getTotalRows();
$question = $exm->getQuesByNumber($number);



?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $process = $pro->processData($_POST);
}


if ($link=="http://localhost:8080/staffexam/test.php?q=11"){
	header("Location: final.php");
	}
?>
<?php
	 if(isset($_GET['q'])){
		$num = $_GET["q"];
		
			
	}


if(empty($_SESSION['starttime'])) {
 $_SESSION['starttime'] = 40;
 $starttim = $_SESSION['starttime'];
 }else{
 $starttim = $_SESSION['starttime'];
 }
?>
<div class="main">






	<script type="text/javascript">
var count = <?php
               
			  echo $question['Timer'];
?>;
var redirect = 'test.php?q=<?php echo "$num" + 1?>'; 
var redirect1 ='final.php'; 
 
function countDown(){
    var timer = document.getElementById("timer");
    if(count > 0){
        count--;
        timer.innerHTML = "countdown "+count+" seconds.";
        setTimeout("countDown()", 1000);
    }else{
        window.location.href = redirect;
    }
}
</script>



<!--
<span id="timer">
<script type="text/javascript">countDown();</script>
</span>-->





<div id="clockdiv">
  <div>
    <span class="days" id="day"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours" id="hour"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes" id="minute"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds" id="second"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>
<div id="demo">
  
    </form>
</div>

  <?php
  
 $server = "localhost";
 $user = "root";
 $pass = "";
 $database = "db_exam";
 $conn = mysqli_connect ($server, $user, $pass, $database);
 
  $query = "SELECT * FROM timer";
  $nos = 1;
  if ($result = mysqli_query($conn, $query)){
  while ($row=mysqli_fetch_assoc($result)) {
  
  
  
  
 
$timer = $row["timer"];


  
  
  
  
  
  }}
  
  
  
  ?>
      <script>
    
      var deadline = new Date("<?php echo $timer ?>").getTime();
      
      var x = setInterval(function() {
      
      var now = new Date().getTime();
      var t = deadline - now;
       var days = Math.floor(t / (1000 * 60 * 60 * 24));
      var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
      var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((t % (1000 * 60)) / 1000);
      document.getElementById("day").innerHTML =days ;
      document.getElementById("hour").innerHTML =hours;
      document.getElementById("minute").innerHTML = minutes;
      document.getElementById("second").innerHTML =seconds;
      if (t < 0) {
              clearInterval(x);
              window.location.href = redirect1;
              document.getElementById("demo").innerHTML = "TIME UP YOU ARE NOT SERIOUS YOU WILL FAIL MY COURSE";
              document.getElementById("day").innerHTML ='0';
              document.getElementById("hour").innerHTML ='0';
              document.getElementById("minute").innerHTML ='0' ;
              document.getElementById("second").innerHTML = '0'; }
      }, 1000);
      </script>



<div id="countdown"></div>
<div id="notifier"></div>

<h1>Question <?php echo $question['quesNo']; ?> of <?php echo $total;?> </h1>
	<div class="test">

		<form method="post" action="">
		<table> 
			<tr>
				<td colspan="2">
				 <h3 style="font-size: 18px">Ques <?php echo $question['quesNo']; ?>: <?php echo $question['ques'];?> </h3>
				</td>
			</tr>

            <?php
                $answer = $exm->getAnswer($number);
            if($answer){
                while($result = $answer->fetch_assoc()){
            ?>

			<tr>
				<td>
				 <input type="radio" name="ans" value="<?php echo $result['id']; ?>"/>
                    <?php echo $result['ans']; ?>
				</td>
			</tr>
			<?php } } ?>

			<tr style="padding-left: 12px;" class="button_next">
			  <td >
				<input type="submit" name="submit" value="Next Question>"/>
				<input type="hidden" name="number" value="<?php echo $number; ?>"/>
			</td>
			</tr>
			
		</table>
     </form>

</div>
 </div>
 

 

 
 
<?php include 'inc/footer.php'; ?>