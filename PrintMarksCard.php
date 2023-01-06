
<html lang="en">
<head >
    <title>
       SVK Academy - Examination Result 2021-2022
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">


<style>
 @media print

{

.noprint {display:none;}

}
</style>

</head>

<body>
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
                $reg_no=my_simple_crypt($_GET['reg_no'],'d');
                $date=my_simple_crypt($_GET['rec_date'],'d');
                if (empty($reg_no)||empty($date)) {
                    echo "<script>alert('Invalid Registration Number or Date');</script>";
                    echo "<script>window.location.href='index';</script>";
                }else{
                    include'database.php';
                    $result=mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `final_exam` WHERE `reg_no`='$reg_no' and added_on='$date'")) or die(mysqli_error($conn));
                    $test_type=$result['test_type'];
                    $combination=$result['combination'];
                    if ($test_type == 'M-TEST' && ($combination == 'PCMB' || $combination == 'PCMCS')) {
        
       
                        $test_type = 'M-TEST';
                        $combination = $combination;
                     
                        $sub1_mx = '50';
                        $sub2_mx = '50';
                        $sub3_mx = '50';
                        $sub4_mx = '50';
                        $sub5_mx = '50';
                        $sub6_mx = '50';
                
                
                    } elseif ($test_type == 'M-TEST' && $combination == 'EBACS') {
                       
                
                        $test_type = 'M-TEST';
                        $combination = $combination;
                     
                        $sub1_mx = '50';
                        $sub2_mx = '50';
                        $sub3_mx = '50';
                        $sub4_mx = '50';
                        $sub5_mx = '50';
                        $sub6_mx = '50';
                    } elseif ($test_type == 'CET' && ($combination == 'PCMB' || $combination === 'PCMCS')) {
                       
                
                        $test_type = 'CET';
                        $combination = $combination;
                     
                        $sub1_mx = '60';
                        $sub2_mx = '60';
                        $sub3_mx = '60';
                        $sub4_mx = '60';
                
                    } elseif (($test_type == 'EXAM' || $test_type == 'P-EXAM') && ($combination == 'PCMB' || $combination === 'PCMCS')) {
                        
                       
                        $test_type = $test_type;
                        $combination = $combination;
                     
                        $sub1_mx = '100';
                        $sub2_mx = '100';
                        $sub3_mx = '70';
                        $sub4_mx = '70';
                        $sub5_mx = '100';
                        $sub6_mx = '70';
                
                    } elseif (($test_type == 'EXAM' || $test_type == 'P-EXAM') && $combination == 'EBACS') {
                       
                        $test_type = $test_type;
                        $combination = $combination;
                     
                        $sub1_mx = '100';
                        $sub2_mx = '100';
                        $sub3_mx = '100';
                        $sub4_mx = '100';
                        $sub5_mx = '100';
                        $sub6_mx = '70';
                    }
                       if($result['percentage']>="35%" || $result['test_type']=="CET") 
                       {
                           $res="PASS";
                       }else{
                           $res="FAIL";
                       }
                       if($result['test_type']=="M-TEST"){
                        $tt="Monthly Test";   
                       }elseif($result['test_type']=="CET"){
                        $tt="Common Enterance Test";
                       }elseif($result['test_type']=="EXAM"){
                        $tt="Exam";
                       }elseif($result['test_type']=="SEM"){

                       }

                    ?>

    <div class="container"> 
        <div class="row ">
            <div class="col-lg-12">
                <div >
                    <div  class="card mb-0 pb-0">
                    <img class="card-img-top" src="banner.png" alt="SVK ACADEMY , CHINATAMNI">
                        <div class="card-header">
                            <div class=" text-center">
                                <h4>
                                    <?php echo $tt." Results ".$result['academic_year']; ?>
                                </h4>
                            </div>
                        </div>
                        <div class="card-body mb-0 pb-0">
                            <div >
                                <table  class="table table-bordered mt-0 pt-0 "  style="background-color: #ffffff;
                                    font-size: 1.1em;">
                                    <tbody>
                                        <tr>
                                            <td colspan="7" align="center"class="bg-warning text-dark">
                                                <strong>CANDIDATE DETAILS</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Reg No.
                                            </td>
                                            <td colspan="6" align="left">
                                                <strong>
                                                    <span ><?php echo $result['reg_no']?></span>
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Candidate Name :
                                            </td>
                                            <td colspan="6" align="left">
                                                <strong>
                                                    <span id="ctl00_cphBody_lbl_C_NAME"><?php echo $result['student_name']?></span>
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Father's Name :
                                            </td>
                                            <td colspan="6" align="left">
                                                <strong>
                                                    <span id="ctl00_cphBody_lbl_M_NAME"><?php echo $result['father_name']?></span>
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Mother's Name :
                                            </td>
                                            <td colspan="6" align="left">
                                                <strong>
                                                    <span id="ctl00_cphBody_lbl_F_NAME"><?php echo $result['mother_name']?></span>
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            Class, Combination  & Section :
                                            </td>
                                            <td colspan="6" align="left">
                                                <strong>
                                                    <span id="ctl00_cphBody_lbl_DDMMYYYY"><?php echo $result['class']." ".$result['combination']." - ".$result['section']?></span>
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" align="center"class="bg-light text-dark">
                                                <strong>EXAM DETAILS</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Academic Year :
                                            </td>
                                            <td colspan="6" align="left">
                                                <strong> <?php  echo $result['academic_year'] ?></strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Month :
                                            </td>
                                            <td colspan="6" align="left">
                                                <strong> <?php  echo $result['month'] ?></strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                TEST/ EXAM :
                                            </td>
                                            <td colspan="6" align="left">
                                                <strong> <?php  echo $tt;
                                                    ?></strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" align="center" class="bg-warning text-dark">
                                                <strong>MARKS DETAILS</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" align="center">
                                                <strong>SUBJECT</strong>
                                            </td>
                                            <td width="10%" align="center">
                                                <strong>MAX MARKS</strong>
                                            </td>
                                            <td width="10%" align="center">
                                                <strong>MARKS OBTAINED</strong>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_Sub1"><?php echo $result['sub_1_name']?></span>
                                            </td>
                                            <td align="center">
                                            <span id="ctl00_cphBody_lbl_Sub1"><?php echo $sub1_mx?></span>
                                            </td>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_PAP2_MK1"><?php echo $result['sub_1_marks']?></span>
                                            </td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_Sub1"><?php echo $result['sub_2_name']?></span>
                                            </td>
                                            <td align="center">
                                            <span id="ctl00_cphBody_lbl_Sub1"><?php echo $sub2_mx?></span>
                                            </td>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_PAP2_MK1"><?php echo $result['sub_2_marks']?></span>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_Sub1"><?php echo $result['sub_3_name']?></span>
                                            </td>
                                            <td align="center">
                                            <span id="ctl00_cphBody_lbl_Sub1"><?php echo $sub3_mx?></span>
                                            </td>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_PAP2_MK1"><?php echo $result['sub_3_marks']?></span>
                                            </td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_Sub1"><?php echo $result['sub_4_name']?></span>
                                            </td>
                                            <td align="center">
                                            <span id="ctl00_cphBody_lbl_Sub1"><?php echo $sub4_mx?></span>
                                            </td>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_PAP2_MK1"><?php echo $result['sub_4_marks']?></span>
                                            </td>
                                            
                                           
                                        </tr>
                                       <?php 
                                                    if($test_type!="CET"){
                                                        ?>
                                                         <tr>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_Sub1"><?php echo $result['sub_5_name']?></span>
                                            </td>
                                            <td align="center">
                                            <span id="ctl00_cphBody_lbl_Sub1"><?php echo $sub5_mx?></span>
                                            </td>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_PAP2_MK1"><?php echo $result['sub_5_marks']?></span>
                                            </td>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_Sub1"><?php echo $result['sub_6_name']?></span>
                                            </td>
                                            <td align="center">
                                            <span id="ctl00_cphBody_lbl_Sub1"><?php echo $sub6_mx?></span>
                                            </td>
                                            <td align="center">
                                                <span id="ctl00_cphBody_lbl_PAP2_MK1"><?php echo $result['sub_6_marks']?></span>
                                            </td>
                                            
                                           
                                        </tr>
                                                        <?php
                                                    }
                                       
                                       ?>
                                        <tr>
                                            <td align="center">
                                                <strong>Result :<strong>
                                                    <span id="ctl00_cphBody_lbl_RESULT"><?php echo $result['result'];?></span>
                                                </strong></strong>
                                            </td>
                                            <td align="center">
                                                <strong>Total Marks : <strong>
                                                    <span id="ctl00_cphBody_lbl_RESULT"><?php echo $result['total_marks'];?></span>
                                                </strong></strong>
                                            </td>
                                            <?php if($test_type!="CET"){?>
                                                <td align="center">
                                                <strong>Percentage : <strong>
                                                    <span id="ctl00_cphBody_lbl_RESULT"><?php echo $result['percentage'];?></span>
                                                </strong></strong>
                                            </td>
                                            
                                            <?php }?>
                                           
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="bg-warning" align="center">
                                                <strong>: DISCLAIMER :</strong>
                                            </td>
                                        </tr>
                                        <tr  class="table table-sm mb-0 pb-0">
                                            <td colspan="7">
                                                <table class="table table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                1.
                                                            </td>
                                                            <td colspan="4" align="justify">
                                                                This is a Computer Generated Provisional Score Card.These cannot be treated as original mark sheets, Stark Tech Innovative Labs is not Responsible for Any Mistakes, Original mark sheets
                                                                are to be issued by the <b>SVK Academy separately.</b>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                
                                                            </td>
                                                            <td colspan="4" lass="text-decoration-none" align="center">
                                                                Designed and Developed by <a style="text-decoration: none;" href="https://starktechlabs.in">Stark Tech Innovative Labs LLP</a>, Bengaluru <br> Mail : <a style="text-decoration: none;"href="mailto:support@starktechlabs.in">support@starktechlabs.in</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div>


    </div>
</body>

</html>
<?php }?>
