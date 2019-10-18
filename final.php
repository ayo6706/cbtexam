<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();
?>
<script language="JavaScript" type="text/javascript">
var seconds =60;
var url="?action=logout";

function redirect(){
 if (seconds <=0){
 // redirect to new url after counter  down.
  window.location = url;
 }else{
  seconds--;
  document.getElementById("pageInfo").innerHTML = "logging out in "+seconds+" seconds."
  setTimeout("redirect()", 1000)
 }
}
</script>

 




    <div class="main">
        <h1>You are done!</h1>
        <div style="text-align: center" class="starttest">
            <br/>
            <p>Congratulation! You have just completed the test your result has been sent to your email.</p>
            <strong style="color: #444444">Final Score:
            <?php
               if(isset($_SESSION['score'])){
                   echo $_SESSION['score'];
                   unset($_SESSION['score']);
               }
            ?>
            </strong>
			<p> 
				<div id="pageInfo">
				<script>
				redirect();
				</script>
				
				</div>
			</p>
            <br/>
            <br/>
            <br/>
           <!-- <a style="border-color: green;  text-align: center ;" href="viewAns.php">View Right Answer</a>-->
          <!--  <a style="border-color: green;" href="start_test.php">Start Test Again.!</a>-->
        </div>

    </div>
    <?php
    
    $total    = $exm->getTotalRows();
    ?>
    
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $process = $pro->processData($_POST);
    }
    ?>
    
    <div class="main">
    <h1>All Questions & Answers </h1>
    <div class="test">
    
    <table>
    <?php
    $getQues = $exm->getQuesByOrder();
    if($getQues){
    while($question = $getQues->fetch_assoc()){
    ?>
    <tr>
    <td colspan="2">
    <h3 style="font-size: 18px">Ques <?php echo $question['quesNo']; ?>: <?php echo $question['ques'];?> </h3>
    </td>
    </tr>
    
    <?php
    $number = $question['quesNo'];
    $answer = $exm->getAnswer($number);
    if($answer){
    while($result = $answer->fetch_assoc()){
    ?>
    
    <tr>
    <td>
    <input type="radio"/>
    <?php
    if($result['rightAns']== '1'){
    echo "<span style='color: blue'>".$result['ans']."</span>";
    }else{
    echo $result['ans'];
    }
    ?>
    </td>
    </tr>
    <?php } } ?>
    <?php } } ?>
    </table>
    </div>
    <br/>
    <!-- <p style="text-align: center"><a class="finalStart" style="border-color: green;" href="start_test.php">Start Test Again!</a></p>-->
    <br/>
    </div>
    
<?php include 'inc/footer.php'; ?>