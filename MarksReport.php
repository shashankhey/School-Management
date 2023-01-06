<?php include 'header.php'; ?>
<div class="content-wrapper pb-0">
    <center>
    <h3 class="badge bg-danger">Marks Report</h3>


<form action="MarksList" method="POST" >

<div class="row">
    <div class="col-lg-3">
    Select Class:-
                        <select name="class" id="" class="form-control">
                            <option value="" selected>Select CLass</option>
                            <option value="1ST PU">1ST PU</option>
                            <option value="2ND PU">2ND PU</option>
                           
                        </select>
    </div>
    <div class="col-lg-3">
    Select Combination:-
                        <select name="combination" id="" class="form-control">
                            <option value="" selected>Select Combination</option>
                            <option value="PCMB">PCMB</option>
                            <option value="PCMCS">PCMCS</option>
                            <option value="EBACS">EBACS</option>
                            
                        </select>
    </div>
    <div class="col-lg-3">
    Select Month:-
                        <select name="month" id="" class="form-control">
                            <option value="" selected>Select Month</option>
                            <option value="JAN">JAN</option>
                            <option value="FEB">FEB</option>
                            <option value="MAR">MAR</option>
                            <option value="APR">APR</option>
                            <option value="MAY">MAY</option>
                            <option value="JUN">JUN</option>
                            <option value="JUL">JUL</option>
                            <option value="AUG">AUG</option>
                            <option value="SEP">SEP</option>
                            <option value="OCT">OCT</option>
                            <option value="NOV">NOV</option>
                            <option value="DEC">DEC</option>

                        </select>
    </div>
    <div class="col-lg-3">
    EXAM/TEST TYPE:-
                        <select name="test_type" id="" class="form-control">
                            <option value="" selected>Select Test</option>
                            <option value="M-TEST">Monthly Test</option>
                            <option value="CET">CET Test</option>
                            <option value="P-EXAM">Preparatory Exam</option>
                            <option value="EXAM">General Exam</option>

                        </select>
    </div>
</div>



    <button type="submit" name="get_gen_marks_rep" class="btn btn-primary mt-3">Generate Report</button>
		
		</form>


    </center>
</div>
<?php 
include 'footer.php';
?>