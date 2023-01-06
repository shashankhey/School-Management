<?php include'header.php';?>
<div class="content-wrapper pb-0">  
                    <center>
                        <h3 class="badge bg-github">Attendance Report General</h3>
                        <br>
                     <form action="GetAttendanceReportGeneral" method="post">
                     <div class="row">
                            <div class="col-lg-6">
                          <label>From Date : </label> <input class="form-control" type="date" name="FromDate" id="">
                            </div>
                            <div class="col-lg-6">
                            <label>End Date : </label> <input class="form-control" type="date" name="ToDate" id="">

                            </div>
                        </div>
                            <button type="submit" name="get_gen_att_rep" class="m-3 btn btn-primary">Get Report</button>
                     </form>
                    </center>
                            
</div>

<?php include'footer.php';?>