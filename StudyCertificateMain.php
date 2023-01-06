<?php include 'header.php'; ?>

<div class="content-wrapper pb-0">
    <center>
        <legend>
            <h3 class="badge bg-success text-light">Student Certificate Printing</h3>
        </legend>

                    <form action="" method="post">
                        <label for="">Please Enter Register Number of Student :</label>
                        <input type="text" name="reg_no" id="" placeholder="Reg No" style="width: min-content;" class="form-control">
                        <button type="submit" name="get_student" class="btn btn-dark m-3">Get Data</button>
                    </form>
    </center>
<?php 
    if (isset($_POST['get_student'])) {
        $reg_no = mysqli_real_escape_string($conn,$_POST['reg_no']);  
       if(empty($reg_no)){
        ?>
        <div class="alert alert-warning" role="alert">
         <h4 class="alert-heading">Hey ,<?php echo $_SESSION['username'];?> ! </h4>
        Please Provide Reg No to Check details Null Input Isn't Allowed.
        </div>
       <?php
       }else{
        $query = mysqli_query($conn,"SELECT * FROM student_data WHERE reg_no = '$reg_no'");
        if (mysqli_num_rows($query) > 0) {
            $row=mysqli_fetch_array($query);
            ?>
           <div class="alert alert-success text-center" role="alert">
            <h4 class="alert-heading">Certificate Ready To Print</h4>
            <?php  echo $row['student_name']; ?> Study Certificate Successfully Generated <a href="#" class="badge bg-danger" onclick="window.open('StudyCertificate?reg_no=<?php echo my_simple_crypt($row['reg_no'],'e')?>','popup','width=750,height=750'); return false;">Click Here to Print</a> 
          </div>
          <?php
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
             <h4 class="alert-heading">Oh Sorry No Data Found for <?php echo $reg_no;?></h4>
            Please Check the Registration No and Try again. 
            </div>
           <?php
        }
       }

    }

?>


</div>
<?php include'footer.php';?>
