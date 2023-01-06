<?php include 'header.php'; ?>

<div class="content-wrapper pb-0">
    <center>
        <legend>
            <h3 class="badge bg-danger text-light">Delete Student</h3>
        </legend>

                    <form action="" method="post">
                        <label for="">Please Enter Register Number of Student :</label>
                        <input type="text" name="reg_no" id="" placeholder="Reg No" style="width: min-content;" class="form-control">
                        <button type="submit" name="get_student" class="btn btn-success m-3">Get Data</button>
                    </form>
                        <?php 
                        
                        if (isset($_POST['get_student'])) {
                            $reg_no = mysqli_real_escape_string($conn,$_POST['reg_no']);  
                            $query = "SELECT * FROM student_data WHERE reg_no = '$reg_no'";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>

                                    <div class="row alert alert-success">
                                        <div class="col-sm"><b>Student Name : </b><?php echo $row['student_name']?></div>
                                        <div class="col-sm"><b>Combination : </b><?php echo $row['combination']?></div>
                                        <div class="col-sm"><b>Class : </b><?php echo $row['student_class']?></div>
                                        <div class="col-sm"><b>Section : </b><?php echo $row['section']?></div>
                                        <center><a href="DeteleApi?reg=<?php echo my_simple_crypt($row['reg_no'])."&token=".uniqid(); ?>"><button class="btn btn-danger">Delete</button></a></center>   
                                    </div>
                                 
                                    <?php
                                }
                            }else{
                                ?>
                                <div class="row alert alert-danger ">
                                    <div class="col-sm">No Data Found for <?php echo $reg_no;?> ....!!</div>
                                </div>
                                <?php
                            }
                        }
                        include'footer.php';
                        ?>

