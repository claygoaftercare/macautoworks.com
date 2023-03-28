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
            } else { 
                        echo "Registeration Failed!:";# 
                        ?><br/><a href ="#">Go back to the login screen.</a><?php
                    }
?>