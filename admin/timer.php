<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/header.php');
include_once ($filepath.'/../classes/Exam.php');

$exm = new Exam();
?>

  <style>
      .adminpanel{
          border: 1px solid #dddddd;
          border-radius: 12px;
          color: #999999;
          margin: 18px auto 0;
          padding: 15px;
          width: 650px;
      }
  </style>

 <?php
     
   $server = "localhost";
   $user = "root";
   $pass = "";
   $database = "db_exam";
   $conn = mysqli_connect ($server, $user, $pass, $database);
   
     
     
     
     if(isset($_POST["timer"])){
     $timer = $_POST['timer'];
        
     $a_sql="UPDATE timer SET timer='$timer' WHERE id=3";
     if(mysqli_query($conn, $a_sql))
     header("location: timer.php");
     else
     $msg='error:'.mysqli_error();
     
     }
     
    ?>

    <div class="main">
        <h1 style="text-align: center; font-size: 24px">Add Question</h1>

      

        <div class="adminpanel">
            <form action="timer.php" method="post">
                <input type="datetime-local" name="timer">
                <input type="submit" name="submit">
            </form>
        </div>



    </div>
<?php include 'inc/footer.php'; ?>