<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Josefin Sans', sans-serif;
    }
    @media print {
  footer {page-break-before: always;}
}
</style>
    <title>Admit Card -Svk Academy</title>
</head>
<body>
            <?php 
                    include'database.php';
                         
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
                    $id=my_simple_crypt($_GET['test_id'],'d');
                    if(empty($id)){
                        echo "<h1>Invalid ID</h1>";
                    }else{
                        $tt_query=mysqli_query($conn,"SELECT * FROM time_table where test_id='$id' ");
                        $tt=mysqli_fetch_array($tt_query);
                        $class=$tt['class'];
                    $students_query=mysqli_query($conn,"SELECT * FROM student_data where student_class='$class' order by section,student_name ASC ");
                        
                        
                            while($results=mysqli_fetch_array($students_query)){?>
                 
                 <div class="card pt-4 pl-4 pr-4 pb-o m-4 bg-light border-dark border-2">
                   
                   <div class="card-title ">
                       <center>
                           <!-- <h1 class="dispaly-3">SVK ACADEMY</h1>
                           <small class="h6">N R EXTENSION CHINTAMANI</small><br> -->
                           <img src="banner.png"  width="900px"/><br>
                           <h4 class="pt-1">ADMIT CARD</h4>
                           <hr class="my-2">
                       </center>
                   </div>
                   <div class="card-body">
                           <table class="table table-borderless">
                              <tr>
                                  <td align="left">
                                                <h5>Name : <b><?php echo $results['student_name']?> </b></h5>  
                                  </td>
                                  <td align="center">
                                                <p>Class & Section : <b><?php echo $results['student_class']." '".$results['section']."'"?></b></p>  
                                  </td>
                                  <td align="right">
                                                <p>Combination : <b><?php echo $results['combination']?> </b></p>  
                                  </td>
                                  <td align="right">
                                                <h5>Reg No : <b><?php echo $results['reg_no']?> </b></h5>  
                                  </td>
                              </tr>
                              <tr>
                                  <td align="center" >
                                                <h5>Test/Exam : <b> <?php echo $tt['test']?></b></h5>  
                                  </td>
                                  <td align="center" colspan="2">
                                                <h5> Month : <b><?php echo $tt['month']?> </b></h5>  
                                  </td>
                                  <td align="center">
                                                <h5> Date of Issue : <b><?php echo date('d-m-Y');?> </b></h5>  
                                  </td>
                                 
                              </tr>
                           </table>
                           <table class="table table-sm table-bordered border-2 border-dark">
                               <thead class="thead-light">
                                   <tr>
                                       <td align="center" > Sl No.</td>
                                       <td align="center" > Subject </td>
                                       <td align="center" > Date</td>
                                       <td align="center" > Sign</td>
                                   </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td align="center" style="width:90px;"  > 1 </td>
                                           <td align="center" style="width:380px;"><?php echo $tt['subject1']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date1']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                           <td align="center" ></td>
                                       </tr>
                                       <tr>
                                           <td align="center" style="width:90px;" > 2</td>
                                           <td align="center"style="width:380px;"><?php echo $tt['subject2']?></td>
                                           <td align="center"><?php  $var=explode("-",$tt['date2']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                           <td align="center"></td>
                                       </tr>
                                       <tr>
                                           <td align="center"  style="width:90px;" > 3</td>
                                           <td align="center" style="width:380px;"><?php echo $tt['subject3']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date3']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                           <td align="center" ></td>

                                       </tr>
                                       <tr>
                                           <td align="center"  style="width:90px;" > 4</td>
                                           <td align="center" style="width:380px;"><?php echo $tt['subject4']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date4']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                           <td align="center" ></td>

                                       </tr>
                                       <tr>
                                           <td align="center"  style="width:90px;" > 5</td>
                                           <td align="center" style="width:380px;"><?php echo $tt['subject5']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date5']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                           <td align="center" ></td>

                                       </tr>
                                       <tr>
                                           <td align="center" style="width:90px;"  > 6</td>
                                           <td align="center" style="width:380px;"><?php echo $tt['subject6']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date6']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                           <td align="center" ></td>

                                       </tr>
                                   </tbody>
                           </table>
                           <div >
                                               <table class="table">
                                           <tr>
                                               <td  align="center" style="padding-top: 3%;"> Candidate Sign </td>
                                               <td align="center" style="padding-top: 3%;"> Class Teacher Sign </td>
                                               <td align="center" style="padding-top: 3%;"> Principal Sign </td>
                                           </tr>
                                       </table>
                                       <center><small>Powered By <a href="https://starktechlabs.in">Stark Tech Innovative Labs, Bengaluru</a></small></center>
                           </div>
                    </div> 
               </div>   
               <footer></footer>
                          <?php   }
                          
                    }
            
            ?>  
                    
               


                    
</body>
</html>