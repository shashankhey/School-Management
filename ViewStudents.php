
    <?php include'header.php';?>
    <div class="content-wrapper pb-0" >
    <h4 class="text-center text-capitalize text-dark"><?php $class=$_POST['class'];
$section=$_POST['section'];
$combination=$_POST['combination'];    echo"$class Sec '$section' $combination ATTENDANCE"; ?></h4>
<form action="ComfimationList" method="post">
    <div style="height: auto;overflow: scroll;">
    <table id="myTable" class="table table-bordered" border="1px">
    <thead>      
            <th>Sl.No</th>
            <th>Student Name</th>
            <th>Reg No</th>
            <th>Attendance</th>
 

</thead>
        <?php 



$sql="SELECT * from student_data where student_class='$class'AND section='$section' and combination='$combination'ORDER BY student_name ASC";
$query=mysqli_query($conn,$sql);
$count="SELECT COUNT(reg_no) as count from student_data where student_class='$class'AND section='$section' and combination='$combination' ORDER BY student_name ASC";
$ask=mysqli_query($conn,$count);
$r=mysqli_fetch_array($ask);

$i=1;


while($info=mysqli_fetch_assoc($query)){
    ?>
        <tr>
            <td><?php echo $i++;?></td>
            <td>
            <input type="text" class="form-control" readonly name="name[]" style="width: fit-content;" value="<?php echo $info['student_name'];?>" title="<?php echo $info['mobile_no']?>" >
            </td>

            <td>
                <input type="text" class="form-control" readonly style="width: fit-content;" name="reg_no[]" value="<?php echo $info['reg_no'];?>">
                <input type="text" hidden name="mobile_no[]" value="<?php echo $info['mobile_no'];?>">

            </td>
           
            <td>
                <select required name="attend[]" class="form-control" id="">
                    <option value="PRESENT" selected>PRESENT</option>
                    <option value="ABSENT">ABSENT</option> 

                </select>
                <input type="text" name="loginid[]" hidden value="<?php echo $_SESSION['username']?>">
                <input type="text" name="date[]" hidden value="<?php echo date("Y-m-d")?>">
                    <input type="text" name="class[]" hidden value="<?php echo $info['student_class'];?>">
                    <input type="text" name="section[]" hidden value="<?php echo $info['section'];?>">
            </td>

        </tr>
        <?php }

?>
    </table>
    </div>
   
    <center><strong>Total Strength <?php echo"$class $section ($combination)";?>:</strong>
        <input type="text" name="numbers" readonly class="form-control" style="width: min-content;" value="<?php echo $r['count'];?>">
        <br>
        <button type="submit" class="btn btn-info" name="submit">submit</button>
    </center>
    </div>


</form>

    <?php include'footer.php';?>
