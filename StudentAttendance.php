<?php include 'header.php'; ?>
<div class="content-wrapper pb-0">
    <center>
    <h3 class="badge bg-danger">Student Attendance</h3>


<form action="ViewStudents" method="POST" >

<div class="row">
    <div class="col-lg-4">
    Select Class:-
                        <select name="class" id="" class="form-control">
                            <option value="::NON::" selected></option>
                            <option value="1ST PU">1ST PU</option>
                            <option value="2ND PU">2ND PU</option>
                           
                        </select>
    </div>
    <div class="col-lg-4">
    Select Combination:-
                        <select name="combination" id="" class="form-control">
                            <option value="::NON::" selected></option>
                            <option value="PCMB">PCMB</option>
                            <option value="PCMCS">PCMCS</option>
                            <option value="EBACS">EBACS</option>
                            
                        </select>
    </div>
    <div class="col-lg-4">
    Select Section:-
                        <select name="section" id="" class="form-control">
                            <option value="::NON::" selected></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>

                        </select>
    </div>
</div>



    <button type="submit" class="btn btn-success mt-3">Get Students</button>
		
		</form>


    </center>
</div>
<?php 
include 'footer.php';
?>