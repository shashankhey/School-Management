<?php include'header.php';?>
<div class="content-wrapper pb-0">  
    <center>
        <h3 class="badge bg-primary"> Admit card Printing [Bulk]</h3>
        <form action="" method="POST">
          
                        <label>Select Test</label>
                        <select class="form-control" style="width: min-content;" name="test">
                            <option value="">Select Test</option>
                            <?php $reg= mysqli_query($conn,"SELECT * FROM time_table"); 
                            while($test_name=mysqli_fetch_assoc($reg)){
                                echo "<option value='".$test_name['test_id']."'>".$test_name['test']."[".$test_name['created_on']."]</option>";
                                }?>
                        </select>
                   <button type="submit" name="get_test_data" class="btn btn-danger m-3">Get Data</button>
                    
        </form>

        <?php  
        if(isset($_POST['get_test_data'])){
            $test_id = $_POST['test'];
            $data= mysqli_query($conn,"SELECT * FROM time_table WHERE test_id='$test_id'");

            if(mysqli_num_rows($data)>0){
                
            $tt=mysqli_fetch_assoc($data);
          
            ?>     <div class="row bg-behance text-light p-4 m-4">
            <div class="col-sm"><h4>Test / Exam : <br> <?php echo $tt['test'];?></h4></div>
                <div class="col-sm"><h4>Class : <?php echo $tt['class'];?></h4></div>
                <div class="col-sm"><h4>Month : <?php echo $tt['month'];?></h4></div>
                <div class="col-sm"><h4>Test/Exam Added By : <?php echo $tt['loginid'];?></h4></div>
                <div class="col-sm"><h4>Added On : <?php echo $tt['created_on'];?></h4></div>

                

            </div>
            <div class="container-fluid" style="overflow:scroll;height:auto;width:auto;">
       
                
            <table class="table table-striped table-bordered border-5 border-dark">
                               <thead class="bg-dark text-light">
                                   <tr>
                                       <th align="center" > Sl No.</th>
                                       <th align="center" > Subject </th>
                                       <th align="center" > Date</th>
                                    
                                   </tr>
                                   </thead>
                                   <tbody >
                                       <tr>
                                           <td align="center" style="width:auto;"  > 1 </td>
                                           <td align="center" style="width:auto;"><?php echo $tt['subject1']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date1']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                          
                                       </tr>
                                       <tr>
                                           <td align="center" style="width:auto;" > 2</td>
                                           <td align="center"style="width:auto;"><?php echo $tt['subject2']?></td>
                                           <td align="center"><?php  $var=explode("-",$tt['date2']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                           
                                       </tr>
                                       <tr>
                                           <td align="center"  style="width:auto;" > 3</td>
                                           <td align="center" style="width:auto;"><?php echo $tt['subject3']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date3']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                           

                                       </tr>
                                       <tr>
                                           <td align="center"  style="width:auto;" > 4</td>
                                           <td align="center" style="width:auto;"><?php echo $tt['subject4']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date4']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                         

                                       </tr>
                                       <tr>
                                           <td align="center"  style="width:auto;" > 5</td>
                                           <td align="center" style="width:auto;"><?php echo $tt['subject5']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date5']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                     

                                       </tr>
                                       <tr>
                                           <td align="center" style="width:auto;"  > 6</td>
                                           <td align="center" style="width:auto;"><?php echo $tt['subject6']?></td>
                                           <td align="center" ><?php  $var=explode("-",$tt['date6']); echo $var[2]."/".$var[1]."/".$var[0] ?></td>
                                          

                                       </tr>
                                   </tbody>
                           </table> 
            </div>
            <a href="#" class="badge bg-danger m-4" onclick="window.open('AdmitCard?test_id=<?php echo my_simple_crypt($tt['test_id'],'e')?>','popup','width=1080,height=750'); return false;">Click Here to Generate</a> 
        
            <?php

            }else{
                        echo"<div class='alert alert-danger'>
                                <div class='alert-heading'>Sorry No Data Found for Test Id $test_id</div>
                        </div>";
            }

        }
        
        ?>
    </center>
</div>
<?php include'footer.php';?>