<?php include 'header.php'; ?>

<div class="content-wrapper pb-0">
    <center>
        <legend>
            <h3 class="badge bg-youtube text-light">Print Marks Card</h3>
        </legend>

                    <form action="" method="post">
                        <label for="">Please Enter Register Number of Student :</label>
                        <input type="text" name="reg_no" id="" placeholder="Reg No" style="width: min-content;" class="form-control">
                        <button type="submit" name="get_student" class="btn btn-success m-3">Get List</button>
                    </form>

    </center>
    <?php 
            
            if (isset($_POST['get_student'])) {
                $reg_no = $_POST['reg_no'];
                $query = "SELECT * FROM final_exam WHERE reg_no = '$reg_no'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    ?><div style="overflow:scroll;height:auto;">
                        <table class="table table-bordered">
                        <thead class="bg-warning text-light">
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Test/Exam</th>
                            <th>Total Marks</th>
                            <th>Percentage</th>
                            <th>Academic Year</th>
                            <th>Added Date</th>
                            <th>Login</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                    <?php
                    $i=1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['student_name']; ?></td>
                            <td><?php echo $row['test_type']; ?></td>
                            <td><?php echo $row['total_marks']; ?></td>
                            <td><?php echo $row['percentage']; ?></td>
                            <td><?php echo $row['academic_year']; ?></td>
                            <td><?php echo $row['added_on']; ?></td>
                            <td><?php echo $row['login_id']; ?></td>
                            <td>
                             <a href="#"  onclick="window.open('PrintMarksCard?reg_no=<?php echo my_simple_crypt($row['reg_no'],'e').'&rec_date='.my_simple_crypt($row['added_on'],'e');?>','popup','width=750,height=750'); return false;"><button class="badge bg-success">Print</button></a>     

                        </tr>


                        
                        <?php
                    }?>
                    </tbody>
                    </table>
                    </div>
                    <?php
                } else {
                      echo"<div class='alert alert-primary'> No Recent Records Found for $reg_no</div>";
                }
            }
    ?>
</div>
<?php include 'footer.php'; ?>

