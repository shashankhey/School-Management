<?php include'header.php';?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"  style="width:100%">
        <thead>
            <tr>
                <th>Reg No</th>
                <th>Student name</th>
                <th>Date Of Birth</th>
                <th>Gender</th>
                <th>Father name</th>
                <th>Mother Name</th>
                <th>Mother Tongue</th>
                <th>Address</th>
                <th>Mobile No</th>
                <th>Date Of Admission</th>
                <th>Admission No</th>
                <th>Combination</th>
                <th>Class</th>
                <th>Section</th>
                <th>Email Id</th>
                <th>Record Added On</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM student_data order by record_created_on desc ";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['reg_no'] . "</td>";
                echo "<td>".$row['student_name']."</td>";
                echo "<td>".$row['dob']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['father_name']."</td>";
                echo "<td>".$row['mother_name']."</td>";              
              echo "<td>".$row['mother_tongue']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['mobile_no']."</td>";
                echo "<td>".$row['date_of_admission']."</td>";
                echo "<td>".$row['admission_no']."</td>";
                echo "<td>".$row['combination']."</td>";
                echo "<td>".$row['student_class']."</td>";
                echo "<td>".$row['section']."</td>";
                echo "<td>".$row['email_id']."</td>";
                echo "<td>".$row['record_created_on']."</td>";
                echo "</tr>";

            }

    ?>
   
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

{
    extend: 'excel',
    className: 'btn text-light bg-success',
    text: 'Download Excel',
    title: '<?php echo $table_header;?>',
   
    key: { // press E for export excel
        key: 'e',
        altKey: false
    }
},
{
    extend: 'pdf',
    className: 'btn text-light bg-danger',
    text: 'Download PDF',
    orientation: 'landscape',
    pageSize: 'A3',
    title: '<?php echo $table_header;?>',
  
    key: { // press E for export excel
        key: 'p',
        altKey: false
    }
},
{
    extend: 'copy',
    className: 'btn text-light bg-primary',
    text: 'Copy Result',
  
},


]
	    } );
	 
	    table.buttons().container()
	        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
	} );
     </script>
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