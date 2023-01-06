<?php include 'header.php'; ?>

<div class="content-wrapper pb-0">
    <center>
        <legend>
            <h3 class="badge bg-danger text-light">Add Student</h3>
        </legend>
    </center>
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-3">
                <label for="reg_no">Reg No</label><input required  class="form-control" type="text" name="reg_no" id="reg_no" />
            </div>
            <div class="col-lg-3">
                <label for="student_name">Student Name</label><input required  class="form-control" type="text" name="student_name" id="student_name" />

            </div>
            <div class="col-lg-3">
                <label for="student_name">Gender</label> <select name="gender" class="form-control" id="">
                <option value="">Select Gender</option>
                <option value="Girl">Girl</option>
                <option value="Boy">Boy</option>
                </select> 

            </div>
            <div class="col-lg-3">
                <label for="father_name">Father Name</label><input required  class="form-control" type="text" name="father_name" id="father_name" />
            </div>
        </div>
        <div class="row">
        <div class="col-lg-3">
                <label for="date_of_admission">Date Of Birth </label><input required  class="form-control" type="date" name="dob" id="dob" />

            </div>
            <div class="col-lg-3">
                <label for="mother_name">Mother Name</label><input required  class="form-control" type="text" name="mother_name" id="mother_name" />

            </div>
            <div class="col-lg-3">
                <label for="address">Address</label> <textarea required  class="form-control" placeholder="Recidential Address" type="text" name="address" id="address" cols="30" rows="10"></textarea>

            </div>
            <div class="col-lg-3">
                <label for="date_of_admission">Date Of Admission</label><input required  class="form-control" type="date" name="date_of_admission" id="date_of_admission" />

            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="admission_no">Admission No</label><input required  class="form-control" type="text" name="admission_no" id="admission_no" />

            </div>
            <div class="col-lg-3">
                <label for="sub1">Mother Tongue</label>
                <select required  class="form-control" type="text" name="mother_tongue" id="mother_tongue">
                    <option value="">Select  Mother Tongue</option>
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
                <label for="sub1">G1</label>
                <select required  class="form-control" type="text" name="sub1" id="sub1">
                    <option value="">Select Game 1</option>
                    <option value="ClashOfClan">Clash Of Clan</option>
                    <option value="ClashOfRoyale">Clash Of Royale</option>
                    <option value="ClashOfEmpire">Clash Of Empire</option>
                </select>



            </div>
            <div class="col-lg-3">
                <label for="sub2">G2</label><select required  class="form-control" type="text" name="sub2" id="sub2">
                    <option value="">Select Game 2</option>

                    <option value="Ludo">Ludo</option>
                    <option value="Chess">Chess</option>
                </select>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="sub3">G3</label>
                <select required  class="form-control" type="text" name="sub3" id="sub3">
                    <option value="">Select Game 3</option>

                    <option value="Pubg">Pubg</option>
                    <option value="CallOfDuty">Call Of Duty</option>

                </select>
            </div>
            <div class="col-lg-4">
                <label for="sub4">G4</label>

                <select required  class="form-control" type="text" name="sub4" id="sub4">
                    <option value="">Select Game 4</option>
                    <option value="Valorant">Valorant</option>
                    <option value="CSGO">CS Go</option>

                </select>

            </div>
            <div class="col-lg-4">
                <label for="sub5">G5</label> <select required  class="form-control" type="text" name="sub5" id="sub5">
                    <option value="">Select Game 5</option>
                    <option value="FIFA">FIFA</option>
                    <option value="DonBradmanCricket">Don Bradman Cricket</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="sub6">G6</label><select required  class="form-control" type="text" name="sub6" id="sub6">
                    <option value="">Select Game 6</option>
                    <option value="Forza">Forza</option>
                    <option value="F1">F1</option>
                </select>

            </div>
            <div class="col-lg-4">
                <label for="combination">Combination</label>
                
                <select required  class="form-control" type="text" name="combination" id="combination">
                    <option value="">Select combination</option>
                    <option value="PCM">PCM</option>
                    <option value="PCMP">PCMP</option>
                    <option value="PCMX">PCMX</option>
                </select>

            </div>
            <div class="col-lg-4">
                <label for="student_class">Student Level</label>
                <select required  class="form-control" type="text" name="student_class" id="student_class">
                    <option value="">Select Level</option>
                    <option value="Noob">Noob</option>
                    <option value="Pro">Pro</option>
                </select>
              

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="section">Section</label>
                <select required  class="form-control" type="text"  name="section" id="section">
                    <option value="">Select Section</option>
                   <option value="A">A</option>
                   <option value="B">B</option>
                   <option value="C">C</option>
                   <option value="D">D</option>
                </select>
                

            </div>
            <div class="col-lg-4">
                <label for="mobile_no">Mobile No</label><input required  class="form-control" type="number" name="mobile_no" id="mobile_no" />

            </div>
            <div class="col-lg-4">
                <label for="email_id">Email Id</label><input required  class="form-control" type="email" name="email_id" id="email_id" />

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">
                <label for="sats_no">Sats No</label><input required  class="form-control" type="text" name="sats_no" id="sats_no" />

            </div>
            <div class="col-lg-4">

            </div>

            <label  for="login_id" hidden >Login Id</label><input  required hidden class="form-control" value="SVKADMIN" type="text" name="login_id" id="login_id" />


        </div>
        <center>
                    <button type="submit" class="btn btn-success text-center mt-3  float-sm-center" name="submit">Add</button>
                </center>
    </form>

</div>
<?php 
                    if(isset($_POST['submit'])){
                       


                                    
                        $reg_no = mysqli_real_escape_string($conn,$_POST['reg_no']);  
                        $student_name = mysqli_real_escape_string($conn,$_POST['student_name']);  
                        $gender = mysqli_real_escape_string($conn,$_POST['gender']);  
                        $father_name = mysqli_real_escape_string($conn,$_POST['father_name']);  
                        $dob = mysqli_real_escape_string($conn,$_POST['dob']);  
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

                            //validate reg_no mobile_no email_id sts_no
                            $sql=mysqli_query($conn,"SELECT * FROM student_data WHERE reg_no='$reg_no' and mobile_no='$mobile_no' and email_id='$email_id' and sats_no='$sats_no' and dob='$dob'");
                            if(mysqli_num_rows($sql)>0){
                                ?>
                                <script>
                                    Swal.fire(
                                                'Warning',
                                                '<?php echo $student_name." already Exsist ";?>',
                                                'warning'
                                                )
                                </script>
                           <?php
                            }else{
                                                         //INSERT 
                            $query = " INSERT INTO student_data ( reg_no, student_name,gender,dob, father_name, mother_name, address, date_of_admission, admission_no,mother_tongue, sub1, sub2, sub3, sub4, sub5, sub6, combination, student_class, section, mobile_no, email_id, sats_no, login_id,academic_year )  VALUES ( '$reg_no', '$student_name','$gender','$dob', '$father_name', '$mother_name', '$address', '$date_of_admission', '$admission_no','$mother_tongue', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6', '$combination', '$student_class', '$section', '$mobile_no', '$email_id', '$sats_no', '$login_id','2021-2022') "; 
                            $result = mysqli_query($conn,$query); 

                            if( $result )
                            {
                               ?>
                                    <script>
                                        Swal.fire(
                                                    'Success',
                                                    '<?php echo $student_name." Added Successfully ";?>',
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
                                                    'Internal Error',
                                                    '<?php echo $student_name." Failed to Add!! Contact Technical Team ";?>',
                                                    'error'
                                                    )
                                    </script>
                               <?php
                            }
                            }
                            


                    }


?>









<?php include 'footer.php'; ?>