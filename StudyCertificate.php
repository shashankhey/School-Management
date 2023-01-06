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
   include'database.php';
    $decrypted =  my_simple_crypt($_GET['reg_no'],'d');
    $id=$decrypted;
    require_once'database.php';
    $sql="select * from student_data where reg_no='$id' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){  date_default_timezone_set('Asia/Kolkata');
            $date = date("Y-m-d");
            $newDate = date("d-m-Y", strtotime($date));
            if($row['gender']=="Boy"){
                    $gen1="KUMAR";
                    $gen2="HIS";
                    $gen3="HE";
            }else{
                $gen1="KUMARI";
                $gen2="HER";
                $gen3="SHE";
            }
            ?>
        <script>
        window.onload.print();
        </script>

    <!DOCTYPE html >
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="image/x-icon" href="../assets/School Logo ICO.ico">

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                crossorigin="anonymous">

            <title>SVK Academy || [<?php echo $row['student_name'];?>] STUDY CERTIFICATE </title>
        </head>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Graduate&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Italiana&family=Monda:wght@700&display=swap');

        h4 {
            font-style: oblique;
        }

        .jumbotron-fluid {
            padding-top: 0px;
        }

        .head1 {
            font-family: 'Graduate', cursive;
        }

        .lead {
            font-weight: 300;
            font-size: large;
        }

      h1,h4, h2, h3,h5,
        .display-4 {
            font-family: 'Cinzel', sans-serif;
        }

        .profile {

            border: 2px solid black;

        }
        @media print {
   .example-screen {
       display: none;
    }
    .example-print {
       display: block;
    }
}
.footer{
               padding:0px;
            align-items:center;
            text-align:center;
            font-size:small;
        }
        body {
            color:#34495E;
            background: #FFFFFF;
            border-width: 5px;
            border-style: solid;
            border-color: #6699ff;

            margin:10px;
        }
        .float-right{
            border: #34495E 3px solid;
        }
        </style>

        <body >
        <!-- onload="window.print()" -->
            <center>
                <div class="jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4"> <img class="img-fluid" src="logo.png" height="32PX"
                                width="82px" alt="Thumbnail image">
                            SVK ACADEMY </h1>

                        <h4 class="lead"> N R EXTENSION,CHINTHAMANI,CHIKKABALLAPURA DIST KA INDIA- 563125 </h4>
                        <h6 class="lead">Contact No.(Office): <strong>9886162566</strong> E-mail:
                            <strong>starktechinnovativelabs@gmail.com</strong></h6>
                        <hr class="my-1" style="border:2px black solid;">
                        <center>
                            <h1 class="head1">
                                STUDY CERTIFICATE
                            </h1>
                        </center>
                    </div>

                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <img class="rounded float-right" style="width:256px;height:256px" src=""
                                    alt="Please Affix the Photo of <?php echo $row['reg_no']." ".$row['student_name']?>">

                            </td>

                        </tr>
                        <tr>

                            <td>
                            </td>
                        </tr>
                    </table>
                    <h3>This is to certify that <?PHP echo $gen1;?>
                        <i><strong><?php echo $row['student_name']; ?>&nbsp;</strong></i>   is the Student of <strong>SVK ACADEMY,CHINTAMANI</strong>, <br> currently studying in <i><strong><?php echo $row['student_class']?>
                            <sup>th</sup></strong></i>  in the Academic Year <strong><?php echo $row['academic_year']; ?>.</strong> <br> <?php echo $gen3;?> is a
                        resident of<i> <strong><?php echo $row['address']?> </strong></i>.</h3>
                    <br>
                    <h4>

                    <?PHP echo $gen2?> Father Name: <strong><q><?php echo $row['father_name']?></q></strong> <br><br>
                    <?PHP echo $gen2;?> Mother Name: <strong><q><?php echo $row['mother_name']?></q></strong> <br><br>
                    <?PHP echo $gen2;?> Date of Birth: <strong><q><?php echo $row['dob']?></q></strong> <br><br>
                    <?PHP echo $gen2;?> Mother Tongue: <strong><q><?php echo $row['mother_tongue']?></q></strong> <br><br>
                    <?PHP echo $gen2;?> Admission Number: <q><strong><?php echo $row['admission_no']?></strong></q> <br><br>
                    <?PHP echo $gen2;?> SATS Number: <q><strong><?php echo $row['sats_no']?></strong></q> <br><br>
                        </h4>

<br><center><h3>This certificate is issued as per college records.</h3></center><br><br><br><br><br>
<h3 style="float:left">  DATE: <strong><?php echo date("d-m-y")?> </strong><br><br>
   PLACE: <strong>CHINTAMANI</strong>  <h5 style="float: right;">HEAD OF INSTITUTION SIGN <br> WITH SEAL</h5>
</h3>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                
               
                <p class="example-screen">               <button class="btn btn-danger" onclick="window.print()">PRINT</button>
</p>
            </center>
            <div class="footer">

<p>Copyright &copy; <?php echo date("Y"); ?> The Portal Designed and Developed by
 <strong>Stark Tech Innovative Labs LLP, Bengaluru </strong>
</div>
        </body>

    </html>
    <?php 
        }
    }else{
        ?>
    <script>
alert('There No Data Available for the Student ID <?php echo $id;?>')
window.close();
    </script>
    <?php
    }
    ?>