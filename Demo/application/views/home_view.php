<?php
      if(isset($_POST['upfile'])){
      session_start();
      $inputFileName = $_POST['upfile'];
      $_SESSION['upfile'] = $inputFileName;
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>SIMS-Home</title>
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>application\views\login.css"> -->
  <link rel="stylesheet" type="text/css" href="application\views\login.css">

</head>
<body style="background-color:#dddddd";>
<center>
<br>
<br>
<h1>Admin Homepage</h1>
<br>
<form method="post" action="load.php">
	<button type="button" onclick="location.href='filemanager'">File Manager</button>
	<!-- <input type="text" id="svalue"> -->
  <button type="button" onclick="location.href='main'">Dashboard</button>

  <input type="file" value="Select File" name="upfile">

  <!-- <button type="submit" onclick="location.href='load.php'">Data Upload</button> -->
  <button type="submit" name="upload" >Data Upload</button>

  <button type="button" onclick="alert('Feature Not Avaliable')">Account Manager</button>
</form>
  <br>
  <br>
  <img src="cmsLogo.png" alt="">

</center>
</body>

</html>
