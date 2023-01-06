<?php 
          $conn=mysqli_connect("localhost", "root", "", "schoolerp");

            if(!$conn){
                print'Database Not Connected';
                exit;
            }
?>