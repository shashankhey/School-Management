<?php 
include 'header.php';


if (isset($_POST['get_data']) || isset($_GET['get_data'])) {

    if(empty($_POST['class']) || empty($_POST['section'])|| empty($_POST['combination'])){
        $class = my_simple_crypt($_GET['class'],'d');
        $section = my_simple_crypt($_GET['section'],'d');
        $test_type = my_simple_crypt($_GET['test_type'],'d');
        $combination = my_simple_crypt($_GET['combination'],'d');
    }else{
        $class = $_POST['class'];
        $section = $_POST['section'];
        $test_type = $_POST['test_type'];
        $combination = $_POST['combination'];
    }



    unset ($_SESSION['test_type']);
    unset ($_SESSION['combination']);
    unset ($_SESSION['class']);
    unset ($_SESSION['section']);
    unset ($_SESSION['sub1_mx']);
    unset ($_SESSION['sub2_mx']);
    unset ($_SESSION['sub3_mx']);
    unset ($_SESSION['sub4_mx']);
    unset ($_SESSION['sub5_mx']);
    unset ($_SESSION['sub6_mx']);


    if ($test_type == 'M-TEST' && ($combination == 'PCMB' || $combination == 'PCMCS')) {
        
       
        $_SESSION['test_type'] = 'M-TEST';
        $_SESSION['combination'] = $combination;
        $_SESSION['class'] = $class;
        $_SESSION['section'] = $section;
        $_SESSION['sub1_mx'] = '50';
        $_SESSION['sub2_mx'] = '50';
        $_SESSION['sub3_mx'] = '50';
        $_SESSION['sub4_mx'] = '50';
        $_SESSION['sub5_mx'] = '50';
        $_SESSION['sub6_mx'] = '50';


    } elseif ($test_type == 'M-TEST' && $combination == 'EBACS') {
       

        $_SESSION['test_type'] = 'M-TEST';
        $_SESSION['combination'] = $combination;
        $_SESSION['class'] = $class;
        $_SESSION['section'] = $section;
        $_SESSION['sub1_mx'] = '50';
        $_SESSION['sub2_mx'] = '50';
        $_SESSION['sub3_mx'] = '50';
        $_SESSION['sub4_mx'] = '50';
        $_SESSION['sub5_mx'] = '50';
        $_SESSION['sub6_mx'] = '50';
    } elseif ($test_type == 'CET' && ($combination == 'PCMB' || $combination === 'PCMCS')) {
       

        $_SESSION['test_type'] = 'CET';
        $_SESSION['combination'] = $combination;
        $_SESSION['class'] = $class;
        $_SESSION['section'] = $section;
        $_SESSION['sub1_mx'] = '60';
        $_SESSION['sub2_mx'] = '60';
        $_SESSION['sub3_mx'] = '60';
        $_SESSION['sub4_mx'] = '60';

    } elseif (($test_type == 'EXAM' || $test_type == 'P-EXAM') && ($combination == 'PCMB' || $combination === 'PCMCS')) {
        
       
        $_SESSION['test_type'] = $test_type;
        $_SESSION['combination'] = $combination;
        $_SESSION['class'] = $class;
        $_SESSION['section'] = $section;
        $_SESSION['sub1_mx'] = '100';
        $_SESSION['sub2_mx'] = '100';
        $_SESSION['sub3_mx'] = '70';
        $_SESSION['sub4_mx'] = '70';
        $_SESSION['sub5_mx'] = '100';
        $_SESSION['sub6_mx'] = '70';

    } elseif (($test_type == 'EXAM' || $test_type == 'P-EXAM') && $combination == 'EBACS') {
       
        $_SESSION['test_type'] = $test_type;
        $_SESSION['combination'] = $combination;
        $_SESSION['class'] = $class;
        $_SESSION['section'] = $section;
        $_SESSION['sub1_mx'] = '100';
        $_SESSION['sub2_mx'] = '100';
        $_SESSION['sub3_mx'] = '100';
        $_SESSION['sub4_mx'] = '100';
        $_SESSION['sub5_mx'] = '100';
        $_SESSION['sub6_mx'] = '70';
    }
}



?>
<div class="content-wrapper pb-0">
<center>
<h4 class=" badge bg-success "><?php echo "$class $section $combination $test_type Marks Entry Student List";?></h4>
</center>
<div style="height: auto;overflow:scroll;">

    <table class="table table-bordered">
        <thead class="bg-danger text-light">
            <th>Sl No</th>
            <th>Student Name</th>
            <th>Reg No</th>
            <th>Action</th>
        </thead>
            <tbody >

            <?php
            $sql = mysqli_query($conn, "SELECT * FROM student_data WHERE student_class='$class' and section='$section' and  combination='$combination '   ");
            $i = 1;
            while ($row = mysqli_fetch_array($sql)) {
                
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['reg_no']; ?></td>
                    <td> <a href="<?php echo "MarksEntry?reg_no=" . my_simple_crypt($row['reg_no'], 'e');?>"><button class="btn btn-info">Update Marks</button></a></td>
                </tr>

            <?php
            }
                // print_r($_SESSION);
            ?>
        </tbody>
    </table>
    </div>


</div>
<?php include 'footer.php'; ?>