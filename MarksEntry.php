<?php  include'header.php'; 

        $reg_no=my_simple_crypt($_GET['reg_no'],'d');
        $sql=mysqli_query($conn,"select * from student_data where reg_no='$reg_no'");
        $row=mysqli_fetch_assoc($sql);
?>
<div class="content-wrapper pb-0">
                     <form action="UploadResultsApi" method="post">
                     <center>
                       <h4 class="badge bg-reddit">Marks entry Portal </h4> 

                       <div class="row">
                            <div class="col-sm">
                                <label for="">Student Name :</label>
                                <input type="text" name="student_name" readonly value="<?php echo $row['student_name']?>" id="" class="form-control">
                            </div>
                            <div class="col-sm">
                            <label for="">Class , Section & Combination</label>
                            <input type="text" name="class_det" readonly value="<?php echo $row['student_class'].'-'.$row['section'].'-'.$row['combination']?>" id="" class="form-control">
                            </div>
                            <div class="col-sm">
                            <label for="">Reg No :</label>
                            <input type="text" name="reg_no" readonly value="<?php echo $row['reg_no']?>" id="" class="form-control">
                            <input type="text" name="father_name"  hidden readonly value="<?php echo $row['father_name']?>" id="" class="form-control">
                            <input type="text" name="mother_name" hidden readonly value="<?php echo $row['mother_name']?>" id="" class="form-control">
                            </div>
                            <div class="col-sm">
                            <label for="">Mobile No :</label>
                                <input type="text" name="mobile_no" readonly value="<?php echo $row['mobile_no']?>" id="" class="form-control">
                            </div>
                       </div>
                       <div class="row">
                            <div class="col-sm">
                                <label for="">Month :</label>
                                <input type="text" name="month" readonly value="<?php  $month=date("m");
                  switch ($month) {
                    case "01": $mon="JAN";break;
                    case "02": $mon="FEB";break;
                    case "03": $mon="MAR";break;
                    case "04": $mon="APR";break; 
                    case "05": $mon="MAY";break; 
                    case "06": $mon="JUN";break;
                    case "07": $mon="JUL";break;    
                    case "08": $mon="AUG";break;    
                    case "09": $mon="SEP";break;    
                    case "10": $mon="OCT";break;    
                    case "11": $mon="NOV";break;    
                    case "12": $mon="DEC";break;    
          
                    default:
                    $mon="AUG";
                }  echo $mon; ?>" id="" class="form-control">
                            </div>
                            <div class="col-sm">
                            <label for="">Test :</label>
                            <input type="text" name="test" readonly value="<?php echo $_SESSION['test_type']?>" id="" class="form-control">
                            </div>
                            <div class="col-sm">
                            <label for="">Login Id:</label>
                                <input type="text" name="login_id" readonly value="<?php echo $_SESSION['username']?>" id="" class="form-control">
                            </div>
                            
                       </div>



                       <table class="table-bordered mt-5">
                        <thread>
                            <th>
                                SUBJECT
                            </th>
                            <th>
                                MAX MARKS
                            </th>
                            <th>
                                MARKS OBTAINED
                            </th>
            </thread>
                      <tbody>
                          <?php 
                                        if ($_SESSION['test_type']=='CET') { ?> 
                        <tr>
                            <td>
                                <input type="text" name="s1" class="form-control" readonly id=""
                                    value="<?php echo $row['sub3'];?>">
                            </td>
                            <td>
                                <input type="number" name="mx1" value="<?php echo $_SESSION['sub1_mx'];?>" readonly class="form-control" id="">
                            </td>
                            <td>
                                <input type="text" name="m1" autofocus id="v1" onKeyUp="javascript:Add();" required class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="s2" class="form-control" readonly id=""
                                    value="<?php echo $row['sub4'];?>">
                            </td>
                            <td>
                            <input type="number" name="mx2" value="<?php echo $_SESSION['sub2_mx'];?>" readonly class="form-control" id="">

                            </td>
                            <td>
                                <input type="text" name="m2" autofocus id="v2" onKeyUp="javascript:Add();" required class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="s3" class="form-control" readonly id=""
                                    value="<?php echo $row['sub5'];?>">

                            </td>
                            <td>
                            <input type="number" name="mx3" value="<?php echo $_SESSION['sub3_mx'];?>" readonly class="form-control" id="">

                            </td>
                            <td>
                                <input type="text" name="m3" autofocus id="v4" onKeyUp="javascript:Add();" required class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="s4" class="form-control" readonly id=""
                                    value="<?php echo $row['sub6'];?>">

                            </td>
                            <td>
                            <input type="number" name="mx4" value="<?php echo $_SESSION['sub4_mx'];?>" readonly class="form-control" id="">

                            </td>
                            <td>
                                <input type="text" name="m4" autofocus id="v5" onKeyUp="javascript:Add();" required class="form-control">
                            </td>
                        </tr>

                                       <?php }else{?>

<tr>
                            <td>
                                <input type="text" name="s1" class="form-control" readonly id=""
                                    value="<?php echo $row['sub1'];?>">
                            </td>
                            <td>
                                <input type="number" name="mx1" value="<?php echo $_SESSION['sub1_mx'];?>" readonly class="form-control" id="">
                            </td>
                            <td>
                                <input type="number" name="m1" min="0" maxlength="3" max="100"  autofocus id="v1" onKeyUp="javascript:Add();" required class="form-control">
                <!-- onKeyUp="if(this.value>100){this.value='100';}else if(this.value<0){this.value='0';}" -->
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="s2" class="form-control" readonly id=""
                                    value="<?php echo $row['sub2'];?>">
                            </td>
                            <td>
                            <input type="number" name="mx2" value="<?php echo $_SESSION['sub2_mx'];?>" readonly class="form-control" id="">

                            </td>
                            <td>
                                <input type="text" name="m2" autofocus id="v2" onKeyUp="javascript:Add();" required class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="s3" class="form-control" readonly id=""
                                    value="<?php echo $row['sub3'];?>">
                            </td>
                            <td>
                            <input type="number" name="mx3" value="<?php echo $_SESSION['sub3_mx'];?>" readonly class="form-control" id="">

                            </td>
                            <td>
                                <input type="text" name="m3" autofocus id="v3" onKeyUp="javascript:Add();" required class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="s4" class="form-control" readonly id=""
                                    value="<?php echo $row['sub4'];?>">

                            </td>
                            <td>
                            <input type="number" name="mx4" value="<?php echo $_SESSION['sub4_mx'];?>" readonly class="form-control" id="">

                            </td>
                            <td>
                                <input type="text" name="m4" autofocus id="v4" onKeyUp="javascript:Add();" required class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="s5" class="form-control" readonly id=""
                                    value="<?php echo $row['sub5'];?>">

                            </td>
                            <td>
                            <input type="number" name="mx5" value="<?php echo $_SESSION['sub5_mx'];?>" readonly class="form-control" id="">

                            </td>
                            <td>
                                <input type="text" name="m5" autofocus id="v5" onKeyUp="javascript:Add();" required class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="s6" class="form-control" readonly id=""
                                    value="<?php echo $row['sub6'];?>">

                            </td>
                            <td>
                            <input type="number" name="mx6" value="<?php echo $_SESSION['sub6_mx'];?>" readonly class="form-control" id="">

                            </td>
                            <td>
                                <input type="text" name="m6" autofocus id="v6" onKeyUp="javascript:Add();" required class="form-control">
                            </td>
                        </tr>

                                        <?php }

                          ?>
                      </tbody>
                    </table>
                    <script language="javascript" type="text/javascript">
                    function Add() {
                        var val1, val2, val3, val4, val5, val6;

                        // If input value is null, then the below mentioned if condition will
                        // come into picture and make the value to '0' to avoid NaN Error.

                        val1 = parseInt(document.getElementById("v1").value);
                        if (isNaN(val1) == true) {
                            val1 = 0;
                        }

                        var val2 = parseInt(document.getElementById("v2").value);
                        if (isNaN(val2) == true) {
                            val2 = 0;
                        }

                        var val3 = parseInt(document.getElementById("v3").value);
                        if (isNaN(val3) == true) {
                            val3 = 0;
                        }

                        var val4 = parseInt(document.getElementById("v4").value);
                        if (isNaN(val4) == true) {
                            val4 = 0;
                        }
                        var val5 = parseInt(document.getElementById("v5").value);
                        if (isNaN(val5) == true) {
                            val5 = 0;
                        }
                        var val6 = parseInt(document.getElementById("v6").value);
                        if (isNaN(val6) == true) {
                            val6 = 0;
                        }

                        document.getElementById("total").value = val1 + val2 + val3 + val4 + val5 + val6;
                    }
                    </script>
                   <?php if($_SESSION['test_type']!="CET"){
                       echo'  <h5>TOTAL MARKS </h5><input type="number" name="total" readonly class="form-control"
                       style="width: min-content;" id="total">';
                   }?>
                   <label for="">Result :</label><select class="form-control" style="width:min-content" name="result" id="">
                       <option value="">Select Result</option>
                       <option value="PASS">PASS</option>
                       <option value="FAIL">FAIL</option>
                   </select>
                   <br>
                   <button type="submit" class="btn btn-danger">Submit</button>
                       </center>
                     </form>
</div>
<?php include'footer.php';?>