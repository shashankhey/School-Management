<?php include'header.php';?>
<div class="content-wrapper pb-0">  
                    <center>
                        <h3 class="badge bg-success">Attendance Report Class</h3>
                        <br>
                     <form action="GetAttendanceReportClass" method="post">
                     <div class="row">
                     <div class="col-lg-3">
                 <label>    Select Class:-</label>
                        <select name="class" id="" class="form-control">
                            <option value="::NON::" selected>Select Class</option>
                            <option value="1ST PU">1ST PU</option>
                            <option value="2ND PU">2ND PU</option>
                           
                        </select>
                     </div>
                     <div class="col-lg-3">
                     <label>Select Section:-</label>
                        <select name="section" id="" class="form-control">
                        <option value="::NON::" selected>Select Section</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>

                        </select>
                     </div>

                            <div class="col-lg-3">
                          <label>From Date : </label> <input class="form-control" type="date" name="FromDate" id="">
                            </div>
                            <div class="col-lg-3">
                            <label>End Date : </label> <input class="form-control" type="date" name="ToDate" id="">

                            </div>
                        </div>
                            <button type="submit" name="get_gen_att_rep" class="m-3 btn btn-primary">Get Report</button>
                     </form>
                    </center>
                            
</div>

<?php include'footer.php';?>