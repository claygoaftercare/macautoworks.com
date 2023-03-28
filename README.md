<!DOCTYPE html>
<html>
    <head>
    <title>How to disable previous dates in date picker using JQuery - devnote.in</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
</head>
<body>
	<form action="index.php"  method= 'POST'>
	<?php include_once 'connect.php';?>
   <br><br><br>
   <input type="text" placeholder="Firstname" name="fname" required>
   <input type="text" placeholder="Lastname" name="lname" required>
   <input type="date" id="date_picker" name="date" required>
   <input type="time" name="time" required>
   <input type="submit" value="Submit" name="submit">
   </form>
    <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);
    </script>
	<?php
	if (isset($_POST['submit'])){ 
            $fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$date = $_POST['date'];
			$time = $_POST['time'];
			$sql = "INSERT INTO record (fname, lname, date, time) VALUES ('".$fname."','".$lname."','".$date."','".$time."')"; 
			$result = mysqli_query($conn, $sql) or die("Database Connection Failed" . mysqli_error($connection));
			//$count = mysqli_num_rows($result);
			echo "Registeration Successful!:";  
    }
	else{
		
    }?>
</body>
</html>
