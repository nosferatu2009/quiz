<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script></head>
<body style="background-image: url(a.jpg);height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;>
	<div class="container">
		<br><h1 class="text-center text-primary">DATA STRUCTURES ALGORTHIMS BASED MCQs</h1><br>
		<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username'];?></h2>
		<div class ="col-lg-8 m-auto d-block">
		<div class="card">
			<h3 class="text-center card-header text-warning"><?php echo $_SESSION['username'];?> ,you have to attempt all the questions mentioned below <br>Each question weight 4 marks<br></h3>
		</div><br>
		<form action="check.php" method="post">
		<?php
		for($i=1;$i<6;$i++){
		 $q="select * from questions where qid=$i";
		 $query=mysqli_query($con,$q);

		 while($rows=mysqli_fetch_array($query)){
		?>
		<div class="card">
			<h4 class ="card-header"><?php echo $rows['question']?></h4>
            
            <?php
                $q="select * from answers where ans_id=$i";
		 $query=mysqli_query($con,$q);

		 while($rows=mysqli_fetch_array($query)){?>
              <div class="card-body">
              <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid'];?>">
              <?php echo $rows['answer']; ?>

</div>
           
		
		<?php
	      }
	  }
	}
	  ?>
	  <input type="submit" name="submit" value="submit" class="btn btn-warning m-auto d-block"></form>
</div>
</div>
		<br><br><a href="logout.php" class= "btn btn-primary m-auto d-block">logout</a>
		<br>
		<h5 class="text-center text-danger m-auto d-block">@menkaquiz2019</h5><br><br>
	</div>

</body>
</html>