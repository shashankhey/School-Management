<?php 
function my_simple_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = 'mwa_encyption';
    $secret_iv = '9886162566';
  
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
  
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
  
    return $output;
  }
include_once'database.php';
error_reporting(0);
$studentid = mysqli_real_escape_string($conn,$_REQUEST['reg_no']);
$st_name =mysqli_real_escape_string($conn, $_REQUEST['student_name']);
$class_det = mysqli_real_escape_string($conn,$_REQUEST['class_det']);
$var=explode("-",$class_det);
$std=$var[0];
$sec=$var[1];
$comb=$var[2];
$mobile= mysqli_real_escape_string($conn,$_REQUEST['mobile_no']);
$test=mysqli_real_escape_string($conn, $_REQUEST['test']);
$month=mysqli_real_escape_string($conn, $_REQUEST['month']);
$s1= mysqli_real_escape_string($conn,$_REQUEST['s1']);
$mx1=mysqli_real_escape_string($conn, $_REQUEST['mx1']);
$m1= mysqli_real_escape_string($conn,$_REQUEST['m1']);
$s2= mysqli_real_escape_string($conn,$_REQUEST['s2']);
$mx2=mysqli_real_escape_string($conn, $_REQUEST['mx2']);
$m2= mysqli_real_escape_string($conn,$_REQUEST['m2']);
$s3= mysqli_real_escape_string($conn,$_REQUEST['s3']);
$mx3= mysqli_real_escape_string($conn,$_REQUEST['mx3']);
$m3= mysqli_real_escape_string($conn,$_REQUEST['m3']);
$s4= mysqli_real_escape_string($conn,$_REQUEST['s4']);
$mx4=mysqli_real_escape_string($conn, $_REQUEST['mx4']);
$m4= mysqli_real_escape_string($conn,$_REQUEST['m4']);
$s5= mysqli_real_escape_string($conn,$_REQUEST['s5']);
$mx5= mysqli_real_escape_string($conn,$_REQUEST['mx5']);
$m5= mysqli_real_escape_string($conn,$_REQUEST['m5']);
$s6= mysqli_real_escape_string($conn,$_REQUEST['s6']);
$mx6= mysqli_real_escape_string($conn,$_REQUEST['mx6']);
$m6= mysqli_real_escape_string($conn,$_REQUEST['m6']);
 $total= mysqli_real_escape_string($conn,$_REQUEST['total']);
 $father_name= mysqli_real_escape_string($conn,$_REQUEST['father_name']);
 $mother_name= mysqli_real_escape_string($conn,$_REQUEST['mother_name']);
 $exam_result= mysqli_real_escape_string($conn,$_REQUEST['result']);




 $total_marks=$_REQUEST['m1']+$_REQUEST['m2']+$_REQUEST['m3']+$_REQUEST['m4']+$_REQUEST['m5']+$_REQUEST['m6']; 
if($test=="CET"){
    $max=$_REQUEST['mx1']+$_REQUEST['mx2']+$_REQUEST['mx3']+$_REQUEST['mx4'];
}else{
    $max=$_REQUEST['mx1']+$_REQUEST['mx2']+$_REQUEST['mx3']+$_REQUEST['mx4']+$_REQUEST['mx5']+$_REQUEST['mx6'];
    
$percentage=($total/$max)*100;
$per=bcdiv($percentage, 1, 2)."%";
}


$login=$_REQUEST['login_id'];

  




 $sql="INSERT INTO `final_exam`( `reg_no`, `student_name`, `father_name`, `mother_name`, `class`, `section`, `combination`, `test_type`, `month`, `sub_1_name`, `sub_1_marks`, `sub_2_name`, `sub_2_marks`, `sub_3_name`, `sub_3_marks`, `sub_4_name`, `sub_4_marks`, `sub_5_name`, `sub_5_marks`, `sub_6_name`, `sub_6_marks`, `total_marks`, `percentage`, `login_id`, `academic_year`, `RESULT`) 
VALUES('$studentid','$st_name','$father_name','$mother_name','$std','$sec','$comb','$test','$month','$s1','$m1','$s2','$m2','$s3','$m3','$s4','$m4','$s5','$m5','$s6','$m6','$total_marks','$per','$login','2021-2022','$exam_result') ";

                        $result=mysqli_query($conn,"SELECT * FROM final_exam WHERE reg_no='$studentid' and  test_type='$test' and  month='$month' ");

            if(mysqli_num_rows($result)>0){
                ?>
                <script>
                    
                        if (confirm('<?php echo" $login you have already Entered $st_name marks of $test of $month";?>')) {
                            window.location.href = 'ViewStudentsMarksEntry<?php echo"?class=".my_simple_crypt($std,'e')."&section=".my_simple_crypt($sec,'e')."&combination=".my_simple_crypt($comb,'e')."&test_type=".my_simple_crypt($test,'e')."&get_data=1";?>';
                        } else {
                           window.location.href = 'ViewStudentsMarksEntry<?php echo"?class=".my_simple_crypt($std,'e')."&section=".my_simple_crypt($sec,'e')."&combination=".my_simple_crypt($comb,'e')."&test_type=".my_simple_crypt($test,'e')."&get_data=1";?>'
                        }
                   
                    
                </script>
        <?php

            }else{
                $send=mysqli_query($conn,$sql);
if($send==true)
{
 sleep(0.5);
 if($test=="CET"){
    echo"   <script>alert('For CET Marks Template is not Approved by TRAI, Govt of India, Once Approved Message will be Sent')</script>";
 }elseif($test!="CET"){
       // Account details
	$apiKey = urlencode('MDJmNGY3OWVmZDQyMmNlNWUwNmRmYmUyNGRkMWIyZWI=');
	
	// Message details
	$numbers = $mobile;
	$sender = urlencode('SMPUCH');
   $name=$st_name;
   $sub1=$m1;
   $sub2=$m2;
   $sub3=$m3;
   $sub4=$m4;
   $sub5=$m5;
   $sub6=$m6;
   $total_marks=$total;
   $circular_date=date("d-m-y");
	$circular_message ="$month $test, KAN-$m1,ENG-$m2,PHY-$m3,CHE-$m4,MAT-$m5,BIO/CS-$m6 T=$total/$max P=$per";

   $ss="Dear Parents, $month $test Result- KAN/HIN-$m1, ENG-$m2, PHY/ECO-$m3, CHE/BS-$m4, MAT/ACC-$m5, BIO/CS-$m6 TOT-$total/$max PER-$per, Regards Principal SMPUCH."; 
	$message = rawurlencode("Dear $name, $month $test Result- KAN/HIN-$m1, ENG-$m2, PHY/ECO-$m3, CHE/BS-$m4, MAT/ACC-$m5, BIO/CS-$m6 TOT-$total/$max PER-$per, Regards Principal SMPUCH.");
    
        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    
        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
   


$data=(array)json_decode($response);
if($data['status']=="success"){
    echo"<script>alert('$ss sent to $mobile Successfully')</script>";
}elseif($data['status']=="failure"){
    echo"   <script>alert('Failed to send Message to $mobile, Please Check the Number')</script>";
}
 }
echo"   <script>alert('$st_name $std $sec ($studentid) $comb $test of $month  Marks Submitted sucessfully Total Marks:-$total Percentage:- $per')</script>";


?>   <script> 
 window.location.href = 'ViewStudentsMarksEntry<?php echo"?class=".my_simple_crypt($std,'e')."&section=".my_simple_crypt($sec,'e')."&combination=".my_simple_crypt($comb,'e')."&test_type=".my_simple_crypt($test,'e')."&get_data=1";?>'

// window.location.replace("../teachers/DisplayStudents.php");
</script> 
<?php


}elseif($send==false){
   echo "   <script>alert('Sorry $login ...!!! $st_name $test of $month Marks failed to Submit !! Contact Technical Team...')</script>
   ".mysqli_error($conn);
   ?>
    <script>   
    window.location.replace='index';
</script> 
   <?php
}
            }

?>
