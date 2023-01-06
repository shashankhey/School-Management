<?php include 'header.php';

if (isset($_POST['get_gen_marks_rep'])) {
    $class = $_POST['class'];
    $month = $_POST['month'];
    $test_type = $_POST['test_type'];
    $combination = $_POST['combination'];
    if (empty($class) || empty($test_type) || empty($month)||empty($combination)) { ?>
        <script>
            Swal.fire({
                title: 'Warning',
                text: "Please Provide Valid Data to Generate Report !",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, I understood !'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'MarksReport';
                } else {
                    window.location.href = 'index';
                }
            })
            
        </script>
<?php }else{
                        
                    $query = mysqli_query($conn,"SELECT * FROM final_exam WHERE class = '$class' and test_type='$test_type' and month='$month' and combination='$combination'")or die(mysqli_error($conn));
                    ?>
                      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
	<table id="example" class="table table-bordered dt-responsive nowrap"  style="width:100%">
        <thead>
         
                <th>Reg No</th>
                <th>Student name</th>
                <th>Class & Section</th>
                <th>KAN/HIN</th>
                <th>ENG/OTHER</th>
                <th>PHY/ECO</th>
                <th>CHEM/B.S</th>
                <th>MAT/ACC</th>
                <th>BIO/C.S</th>
                <th>TOTAL</th>
                <th>PER </th>

          
        </thead>
        <tbody>
                    <?php
                    while($row = mysqli_fetch_array($query)){?>
                        <tr>
                            <td><?php echo $row['reg_no'];?></td>
                            <td><?php echo $row['student_name'];?></td>
                            <td><?php echo $row['class']."-".$row['section'];?></td>
                            <td><?php echo $row['sub_1_marks'];?></td>
                            <td><?php echo $row['sub_2_marks'];?></td>
                            <td><?php echo $row['sub_3_marks'];?></td>
                            <td><?php echo $row['sub_4_marks'];?></td>
                            <td><?php echo $row['sub_5_marks'];?></td>
                            <td><?php echo $row['sub_6_marks'];?></td>
                            <td><?php echo $row['total_marks'];?></td>
                            <td><?php echo $row['percentage'];?></td>

                            

                        </tr>
                    
                        




                  <?php  }?>
   
                   </tbody>
               </table>
               <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
               <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
               <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
               <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
               <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
               <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
               <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
               <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
               <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
               <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
               <script>
               $(document).ready(function() {
                   var table = $('#example').DataTable( {
                       lengthChange: false,
                       buttons: [
        'copy', 'excel', 'pdf','colvis',
        {
    extend: 'print',
    className: 'btn text-light bg-warning text-light',
    title: '<center><?php echo $logo."<br/> ". $table_header;?></h2><center><h5><?php echo " Results of $class $combination $test_type of $month;";?></h5><h6>Developed By- Stark Tech Innovative Labs</h6></center></center>',
    text: 'Print ',
    
    key: { // press E for export excel
        key: 't',
        altKey: false
    }
},
    ]
                        } );
                
                   table.buttons().container()
                       .appendTo( '#example_wrapper .col-md-6:eq(0)' );
               } );
                </script>
                <?php

}
}else{ 
    ?>
       <script>
          Swal.fire({
                title: 'Warning',
                text: "Please Provide Valid Data to Generate Report !",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, I understood !'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'MarksReport';
                } else {
                    window.location.href = 'index';
                }
            })
            
        </script>

    
 <?php 
      } ?>
      
</div>
        <footer class="footer">
          <div class="container">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"><b>Copyright © <?php echo date("Y");?> Stark Tech Innovative Labs LLP, Bengaluru </b></span>
              <span class="float-none float-sm-center d-block mt-1 mt-sm-0 text-center"> <b><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp <a href="https://wa.me/916360355202?text=<?php echo rawurlencode("Hi Starks Technical Team, Please do help us to Resolve this Issue from *SVK ACADEMY*");?>">+91-6360355202</a></b></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><b> <i class="fa fa-envelope-o" aria-hidden="true"></i> Mail Us <a href="mailto:support@starktechlabs.in">support@starktechlabs.in</a></b></span>
            </div>
          </div>
        </footer>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
      <!-- Custom js for this page -->
      <script src="assets/js/dashboard.js"></script>
      <script src="assets/js/settings.js"></script>
      
    <!-- End custom js for this page -->
  </body>
</html>


