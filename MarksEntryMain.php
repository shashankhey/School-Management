<?php include 'header.php'; ?>
<div class="content-wrapper pb-0">
    <center>
    <h3 class="badge bg-dark">Marks Entry</h3>


<form action="ViewStudentsMarksEntry" method="POST" >

<div class="row">
    <div class="col-lg-3">
    Select Class:-
                        <select name="class" id="" class="form-control">
                            <option value="::NON::" selected>Select CLass</option>
                            <option value="1ST PU">1ST PU</option>
                            <option value="2ND PU">2ND PU</option>
                           
                        </select>
    </div>
    <div class="col-lg-3">
    Select Combination:-
                        <select name="combination" id="" class="form-control">
                            <option value="::NON::" selected>Select Combination</option>
                            <option value="PCMB">PCMB</option>
                            <option value="PCMCS">PCMCS</option>
                            <option value="EBACS">EBACS</option>
                            
                        </select>
    </div>
    <div class="col-lg-3">
    Select Section:-
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
    EXAM/TEST TYPE:-
                        <select name="test_type" id="" class="form-control">
                            <option value="::NON::" selected>Select Test</option>
                            <option value="M-TEST">Monthly Test</option>
                            <option value="CET">CET Test</option>
                            <option value="P-EXAM">Preparatory Exam</option>
                            <option value="EXAM">General Exam</option>

                        </select>
    </div>
</div>



    <button type="submit" name="get_data" class="btn btn-success mt-3">Get Students</button>
		
		</form>


    </center>
</div>
<?php 
include 'footer.php';
?>