<?php include 'header.php'; ?>

<div class="content-wrapper pb-0">
    <center>
        <legend>
            <h3 class="badge bg-warning text-light">Update Student</h3>
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
                            if(mysqli_num_rows($result) > 0) { 
                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                        <form action="" method="post">
        <div class="row">
            <div class="col-lg-3">
                <label for="reg_no">Reg No</label><input required value="<?php echo $row['reg_no']?>"  value="<?php echo $row['']?>" class="form-control" type="text" name="reg_no" id="reg_no" />
            </div>
            <div class="col-lg-3">
            <label for="student_name">Gender</label> <select name="gender" class="form-control" id="">
            <option value="<?php echo $row['gender']?>" selected class="bg-warning"><?php echo $row['gender']?></option>
                <option value="Girl">Girl</option>
                <option value="Boy">Boy</option>
                </select> 

            </div>
            <div class="col-lg-3">
                <label for="student_name">Student Name</label><input required value="<?php echo $row['student_name']?>"  class="form-control" type="text" name="student_name" id="student_name" />

            </div>
            <div class="col-lg-3">
                <label for="father_name">Father Name</label><input required value="<?php echo $row['father_name']?>"  class="form-control" type="text" name="father_name" id="father_name" />
            </div>
        </div>
        <div class="row">
        <div class="col-lg-3">
                <label for="date_of_admission">Date Of Birth</label><input required value="<?php echo $row['dob']?>"  class="form-control" type="date" name="dob" id="dob" />

            </div>
            <div class="col-lg-3">
                <label for="mother_name">Mother Name</label><input required value="<?php echo $row['mother_name']?>"  class="form-control" type="text" name="mother_name" id="mother_name" />

            </div>
            <div class="col-lg-3">
                <label for="address">Address</label> <textarea required  class="form-control" placeholder="Recidential Address" type="text" name="address" id="address" cols="30" rows="10"><?php echo $row['address']?></textarea>

            </div>
            <div class="col-lg-3">
                <label for="date_of_admission">Date Of Admission</label><input required value="<?php echo $row['date_of_admission']?>"  class="form-control" type="date" name="date_of_admission" id="date_of_admission" />

            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="admission_no">Admission No</label><input required value="<?php echo $row['admission_no']?>"  class="form-control" type="text" name="admission_no" id="admission_no" />

            </div>
            <div class="col-lg-3">
                <label for="sub1">Mother Tongue</label>
                <select required  class="form-control" type="text" name="mother_tongue" id="mother_tongue">
                <option value="<?php echo $row['mother_tongue']?>" selected class="bg-warning"><?php echo $row['mother_tongue']?></option>
                    <option value="KANNADA">KANNADA</option>
                    <option value="HINDI">HINDI</option>
                    <option value="URDU">URDU</option>
                    <option value="TELUGU">TELUGU</option>
                    <option value="TAMIL">TAMIL</option>
                    <option value="MALAYALAM">MALAYALAM</option>
                    <option value="KONKANI">KONKANI</option>
                    <option value="TULU">TULU</option>
                </select>



            </div>
            <div class="col-lg-3">
                <label for="sub1">Sub1</label>
                <select required   class="form-control" type="text" name="sub1" id="sub1">
                    <option value="<?php echo $row['sub1']?>" selected class="bg-warning"><?php echo $row['sub1']?></option>
                    <option value="KANNADA">KANNADA</option>
                    <option value="HINDI">HINDI</option>
                    <option value="URDU">URDU</option>
                </select>



            </div>
            <div class="col-lg-3">
                <label for="sub2">Sub2</label><select required class="form-control" type="text" name="sub2" id="sub2">
                <option value="<?php echo $row['sub2']?>" selected class="bg-warning"><?php echo $row['sub2']?></option>

                    <option value="ENGLISH">ENGLISH</option>
                    <option value="OTHER[NSFQ]">OTHER[NSFQ]</option>
                </select>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="sub3">Sub3</label>
                <select required   class="form-control" type="text" name="sub3" id="sub3">
                <option value="<?php echo $row['sub3']?>" selected class="bg-warning"><?php echo $row['sub3']?></option>

                    <option value="PHYSICS">PHYSICS</option>
                    <option value="ECONOMICS">ECONOMICS</option>

                </select>
            </div>
            <div class="col-lg-4">
                <label for="sub4">Sub4</label>

                <select required value="<?php echo $row['']?>"  class="form-control" type="text" name="sub4" id="sub4">
                <option value="<?php echo $row['sub4']?>" selected class="bg-warning"><?php echo $row['sub4']?></option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
                    <option value="BUSINESS STUDIES">BUSINESS STUDIES</option>

                </select>

            </div>
            <div class="col-lg-4">
                <label for="sub5">Sub5</label> <select required  class="form-control" type="text" name="sub5" id="sub5">
                <option value="<?php echo $row['sub5']?>" selected class="bg-warning"><?php echo $row['sub5']?></option>
                    <option value="MATHEMATICS">MATHEMATICS</option>
                    <option value="ACCOUNTS">ACCOUNTS</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="sub6">Sub6</label><select required value="<?php echo $row['']?>"  class="form-control" type="text" name="sub6" id="sub6">
                <option value="<?php echo $row['sub6']?>" selected class="bg-warning"><?php echo $row['sub6']?></option>
                    <option value="BIOLOGY">BIOLOGY</option>
                    <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
                </select>

            </div>
            <div class="col-lg-4">
                <label for="combination">Combination</label>
                
                <select required   class="form-control" type="text" name="combination" id="combination">
                <option value="<?php echo $row['combination']?>" selected class="bg-warning"><?php echo $row['combination']?></option>
                    <option value="PCMB">PCMB</option>
                    <option value="PCMCS">PCMCS</option>
                    <option value="EBACS">EBACS</option>
                </select>

            </div>
            <div class="col-lg-4">
                <label for="student_class">Student Class</label>
                <select required value="<?php echo $row['']?>"  class="form-control" type="text" name="student_class" id="student_class">
                <option value="<?php echo $row['student_class']?>" selected class="bg-warning"><?php echo $row['student_class']?></option>

                    <option value="1ST PU">1ST PU</option>
                    <option value="2ND PU">2ND PU</option>
                </select>
              

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="section">Section</label>
                <select required  class="form-control" type="text"  name="section" id="section">
                <option value="<?php echo $row['section']?>" selected class="bg-warning"><?php echo $row['section']?></option>

                   <option value="A">A</option>
                   <option value="B">B</option>
                   <option value="C">C</option>
                   <option value="D">D</option>
                </select>
                

            </div>
            <div class="col-lg-4">
                <label for="mobile_no">Mobile No</label><input required value="<?php echo $row['mobile_no']?>"  class="form-control" type="number" name="mobile_no" id="mobile_no" />

            </div>
            <div class="col-lg-4">
                <label for="email_id">Email Id</label><input required value="<?php echo $row['email_id']?>"  class="form-control" type="email" name="email_id" id="email_id" />

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">
                <label for="sats_no">Sats No</label><input required value="<?php echo $row['sats_no']?>"  class="form-control" type="text" name="sats_no" id="sats_no" />

            </div>
            <div class="col-lg-4">

            </div>

            <label  for="login_id" hidden >Login Id</label><input  required value="<?php echo $row['login_id']?>" hidden class="form-control" value="SVKADMIN" type="text" name="login_id" id="login_id" />


        </div>
        <center>
                    <button type="submit" class="btn btn-success text-center mt-3 float-sm-center" name="submit">Update</button>
                </center>
    </form>

                                    <?php
                                }
                            }else{
                                echo "<div class='alert alert-danger'> No Student found for Reg No : $reg_no</div>";
                            }
                        }
                        

                            if(isset($_POST['submit'])){
                                $reg_no = mysqli_real_escape_string($conn,$_POST['reg_no']);  
                                $student_name = mysqli_real_escape_string($conn,$_POST['student_name']);  
                                $gender = mysqli_real_escape_string($conn,$_POST['gender']);  
                                $dob = mysqli_real_escape_string($conn,$_POST['dob']);  
                                $father_name = mysqli_real_escape_string($conn,$_POST['father_name']);  
                                $mother_name = mysqli_real_escape_string($conn,$_POST['mother_name']);  
                                $address = mysqli_real_escape_string($conn,$_POST['address']);  
                                $date_of_admission = mysqli_real_escape_string($conn,$_POST['date_of_admission']);  
                                $admission_no = mysqli_real_escape_string($conn,$_POST['admission_no']);  
                                $mother_tongue = mysqli_real_escape_string($conn,$_POST['mother_tongue']);  
                                $sub1 = mysqli_real_escape_string($conn,$_POST['sub1']);  
                                $sub2 = mysqli_real_escape_string($conn,$_POST['sub2']);  
                                $sub3 = mysqli_real_escape_string($conn,$_POST['sub3']);  
                                $sub4 = mysqli_real_escape_string($conn,$_POST['sub4']);  
                                $sub5 = mysqli_real_escape_string($conn,$_POST['sub5']);  
                                $sub6 = mysqli_real_escape_string($conn,$_POST['sub6']);  
                                $combination = mysqli_real_escape_string($conn,$_POST['combination']);  
                                $student_class = mysqli_real_escape_string($conn,$_POST['student_class']);  
                                $section = mysqli_real_escape_string($conn,$_POST['section']);  
                                $mobile_no = mysqli_real_escape_string($conn,$_POST['mobile_no']);  
                                $email_id = mysqli_real_escape_string($conn,$_POST['email_id']);  
                                $sats_no = mysqli_real_escape_string($conn,$_POST['sats_no']);  
                                $login_id = mysqli_real_escape_string($conn,$_POST['login_id']);  
                                $updated_on = date('d-m-Y');  
                                 //UPDATE 
                                    $query = " UPDATE student_data SET  reg_no = '$reg_no',  student_name = '$student_name', gender = '$gender',dob = '$dob', father_name = '$father_name',  mother_name = '$mother_name',  address = '$address',  date_of_admission = '$date_of_admission',  admission_no = '$admission_no', mother_tongue = '$mother_tongue', sub1 = '$sub1',  sub2 = '$sub2',  sub3 = '$sub3',  sub4 = '$sub4',  sub5 = '$sub5',  sub6 = '$sub6',  combination = '$combination',  student_class = '$student_class',  section = '$section',  mobile_no = '$mobile_no',  email_id = '$email_id',  sats_no = '$sats_no',  login_id = '$login_id',  updated_on = '$updated_on' WHERE reg_no = '$reg_no' "; 
                                    $result = mysqli_query($conn,$query); 

                                    if( $result )
                                    {
                                        ?>
                                <script>
                                    Swal.fire(
                                                'Success',
                                                '<?php echo $student_name." Details Updated Successfully ";?>',
                                                'success'
                                                )
                                </script>
                           <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <script>
                                            Swal.fire(
                                                        'Error',
                                                        '<?php echo $student_name." Details Failed To Update ";?>',
                                                        'error'
                                                        )
                                        </script>
                                   <?php
                                    }
                            }


                        ?>
    </center>
    
<?php include 'footer.php'; ?>