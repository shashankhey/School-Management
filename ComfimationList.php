<?php include'header.php';?>
<div class="content-wrapper pb-0">
                    <center>

                    <?php 
                    $date=$_POST['date'][0];
                    $class=$_POST['class'][0];
                    $section=$_POST['section'][0];

                    $sql=mysqli_query($conn,"SELECT * FROM student_attendance where attendance_date='$date'and student_class='$class' and section='$section'");
                    if(mysqli_num_rows($sql)>0){
                        ?>
                        <script>
                            Swal.fire({
                                title: 'Warning',
                                text: "Attendance Already Marked for <?php echo"$class $section of Date: $date";?>",
                                icon: 'warning',
                                confirmButtonColor: '#3085d6',
                                showCancelButton: true,
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, I understood !'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href='StudentAttendance';
                                }else{
                                    window.location.href='index';
                                }
                                })
                                                //                         setTimeout(function(){
                                                //     
                                                // }, 3000)
                             </script>
                   <?php
                    }else{
                        ?>

<h2>Attendance Confimation List</h2>
                        <form action="AttendanceApi" method="post">
                        <div style="height: auto;overflow: scroll;">
                                    
                                    <table class="table table-bordered">
                                            <thead class="bg-dark text-light"> 
                                            <th>Sl No</th>
                                            <th>Student Name</th>
                                            <th>Attendance</th>
                                            <th>Reg No</th>
                                            </thead>
                                            <tbody>
                                 
                                                    <?php
                                                    $z=1;
                                                    for ($i=0;$i<$_POST['numbers'];$i++) {
                                                        if($_POST['attend'][$i]=="ABSENT"){
                                                            ?>
                                                            <tr class="alert-danger">
                                                                <td><?php echo $z++;?></td>
                                                                <td><input type="text" class="form-control" style="width: fit-content;" readonly name="name[]" value="<?php echo $_POST['name'][$i];?>" title="<?php echo $_POST['mobile_no'][$i];?>" ></td>
                                                                <td><input type="text" class="form-control" style="width: fit-content;" readonly name="attend[]" value="<?php echo $_POST['attend'][$i];?>" ></td>
                                                                <td><input type="text" class="form-control" style="width: fit-content;"  readonly name="reg_no[]" value="<?php echo $_POST['reg_no'][$i];?>" ><input hidden type="text" class="form-control"  readonly name="mobile_no[]" value="<?php echo $_POST['mobile_no'][$i];?>" >
                                                                <input hidden type="text" class="form-control"  readonly name="date[]" value="<?php echo $_POST['date'][$i];?>" >
                                                                <input hidden type="text" class="form-control"  readonly name="loginid[]" value="<?php echo $_POST['loginid'][$i];?>" >
                                                                <input type="text" name="class[]" hidden value="<?php echo $_POST['class'][$i];?>">
                                                                  <input type="text" name="section[]" hidden value="<?php echo $_POST['section'][$i];?>"></td>
                                                            </tr>
                
                                                            <?php
                                                        }
                                                    }
                                                    
                                                    ?>
                                            </tbody>
                   </table>
                                                </div>
                                                <input type="text" hidden class="form-control"  readonly name="number" value="<?php echo $_POST['numbers'];?>" >

                   <button type="submit" class="btn btn-primary m-3"  onclick="return confirm('Are you sure to Acknowledge Todays Attendance ?')"   >Verified</button>
                        </form>
                        <?php
                    }
                    
                    ?>
                                   
                    </center>
</div>



<?php include'footer.php';?>