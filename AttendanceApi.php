<?php 
ini_set('display_errors',0);
        //insert query
        include'database.php';


   

        $s = "INSERT INTO `student_attendance`(`student_name`, `reg_no`, `student_class`, `section`, `attendance_date`, `login_id`, `response`) VALUES";
                for ($i=0;$i<$_POST['number'];$i++) {
                    if ($_POST['attend'][$i]=="ABSENT") {

                        $class=$_POST['class'][$i];
                        $section=$_POST['section'][$i];
                        $date=$_POST['date'][$i];
                        $sql=mysqli_query($conn,"SELECT * FROM student_attendance where attendance_date='$date'and student_class='$class' and section='$section'");
                        if (mysqli_num_rows($sql)>0) {
                            echo "<script>alert('Attendance Already Marked');window.location.href='index'</script>";
                        }else{
                            $_POST['name'][$i]." is absent.".$_POST['date'][$i]."\n".$_POST['loginid'][$i];
                            $date=$_POST['date'][$i];
                            $name= $_POST['name'][$i];
                            $ab_message=rawurldecode("Dear Parents  $name is Absent Today");
                           // Account details
                           $apiKey = urlencode('MDJmNGY3OWVmZDQyMmNlNWUwNmRmYmUyNGRkMWIyZWI=');    
                        
                           // Message details $_POST['mobile_no'][$i]
                           $numbers = $_POST['mobile_no'][$i];
                           $sender = urlencode('SMPUCH');
                           $message = rawurlencode("Date: $date, :  $ab_message ,Regards Principal SMPUCH");
                        
                        
                        
                           // Prepare data for POST request
                           $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
                        
                           // Send the POST request with cURL
                           $ch = curl_init('https://api.textlocal.in/send/');
                           curl_setopt($ch, CURLOPT_POST, true);
                           curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                           $response = curl_exec($ch);
                           curl_close($ch);
    
                            $s .="('".$_POST['name'][$i]."','".$_POST['reg_no'][$i]."','".$_POST['class'][$i]."','".$_POST['section'][$i]."','".$_POST['date'][$i]."','".$_POST['loginid'][$i]."','".$response."'),";
                        }

                        
                    }
                }
         $s = rtrim($s,",");
       $insert=mysqli_query($conn,$s);
       if ($insert) {
                
            //alert Attendance Marked Successfully and Redired to Index
            echo "<script>alert('Attendance Marked Successfully');window.location.href='index'</script>";
        
       }
       else{
        echo "<script>alert('Attendance Failed to Marls ..! Please Contact Tecchnical Team');window.location.href='index'</script>";

        //    echo "Error: " . $conn->error;
       }


?>