<?php @include'header.php';?>
<div class="content-wrapper pb-0">  
<form action="" method="post">


<div class="row">
    <div class="col-sm">
    SELECT LEVEL:-
<select name="class" id="" class="form-control">
                    <option value="::NON::" selected></option>
                    <option value="Noob">Noob</option>
                    <option value="Pro">Pro</option>
                 

                </select>
    </div>
    <div class="col-sm">
    SELECT MATCH TYPE:-
<select name="test" id="" required class="form-control">
<option value="" >Select MATCH</option>
                            <option value="Monthly Match">Monthly Match</option>
                            <option value="COMP">COMP</option>
                            <option value="No Rank">No Rank</option>
                            <option value="Tournament">Tournament</option>

                </select>
    </div>
    <div class="col-sm">
    SELECT MONTH OF MATCH:-
                <select name="month" id="" class="form-control">
                    <option value="" selected>-</option>
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
</div>

<div class="row">
    <div class="col-sm">
   <center> <div class="badge bg-danger p-2 m-4 text-center">SL NO 1.</div></center>
    </div>
    <div class="col-sm">
    G1
    <select  class="form-control" name="subject1" id="">
    <option value="">Select GAME</option>

                            <option value="KANNADA/HINDI">KAN/HIN</option>
                            <option value="FORZA/F1">FORZA/F1</option>
                            <option value="LUDO/CHESS">LUDO/CHESS</option>
                            <option value="PUBG/CALL OF DUTY">PUBG/CALL OF DUTY</option>
                            <option value="VALORANT/CSGO">VALORANT/CSGO</option>
                            <option value="FIFA/DON BRADMAN CRICKET">FIFA/DON BRADMAN CRICKET</option>
                        </select>
    </div>
    <div class="col-sm">
    DATE OF MATCH 1
    <input class="form-control" type="date" name="date1" id="">
    </div>
</div>
<div class="row">
    <div class="col-sm">
   <center> <div class="badge bg-success p-2 m-4 text-center">SL NO 2.</div></center>
    </div>
    <div class="col-sm">
    G2
    <select  class="form-control" name="subject2" id="">
                            <option value="">Select Game</option>
                            <option value="KANNADA/HINDI">KAN/HIN</option>
                            <option value="FORZA/F1">FORZA/F1</option>
                            <option value="LUDO/CHESS">LUDO/CHESS</option>
                            <option value="PUBG/CALL OF DUTY">PUBG/CALL OF DUTY</option>
                            <option value="VALORANT/CSGO">VALORANT/CSGO</option>
                            <option value="FIFA/DON BRADMAN CRICKET">FIFA/DON BRADMAN CRICKET</option>
                        </select>
    </div>
    <div class="col-sm">
    DATE OF MATCH 2
    <input class="form-control" type="date" name="date2" id="">
    </div>
</div>
<div class="row">
    <div class="col-sm">
   <center> <div class="badge bg-primary p-2 m-4 text-center">SL NO 3.</div></center>
    </div>
    <div class="col-sm">
    G3
    <select  class="form-control" name="subject3" id="">
                            <option value="">Select Game</option>
                            <option value="KANNADA/HINDI">KAN/HIN</option>
                            <option value="FORZA/F1">FORZA/F1</option>
                            <option value="LUDO/CHESS">LUDO/CHESS</option>
                            <option value="PUBG/CALL OF DUTY">PUBG/CALL OF DUTY</option>
                            <option value="VALORANT/CSGO">VALORANT/CSGO</option>
                            <option value="FIFA/DON BRADMAN CRICKET">FIFA/DON BRADMAN CRICKET</option>
                        </select>
    </div>
    <div class="col-sm">
    DATE OF TEST/EXAM 3
    <input class="form-control" type="date" name="date3" id="">
    </div>
</div>
<div class="row">
    <div class="col-sm">
   <center> <div class="badge bg-info p-2 m-4 text-center">SL NO 4.</div></center>
    </div>
    <div class="col-sm">
    G4
    <select  class="form-control" name="subject4" id="">
    <option value="">Select Game</option>
                            <option value="KANNADA/HINDI">KAN/HIN</option>
                            <option value="FORZA/F1">FORZA/F1</option>
                            <option value="LUDO/CHESS">LUDO/CHESS</option>
                            <option value="PUBG/CALL OF DUTY">PUBG/CALL OF DUTY</option>
                            <option value="VALORANT/CSGO">VALORANT/CSGO</option>
                            <option value="FIFA/DON BRADMAN CRICKET">FIFA/DON BRADMAN CRICKET</option>
                        </select>
    </div>
    <div class="col-sm">
    DATE OF MATCH 4
    <input class="form-control" type="date" name="date4" id="">
    </div>
</div>
<div class="row">
    <div class="col-sm">
   <center> <div class="badge bg-warning p-2 m-4 text-center">SL NO 5.</div></center>
    </div>
    <div class="col-sm">
    G5
    <select  class="form-control" name="subject5" id="">
    <option value="">Select Game</option>
                            <option value="KANNADA/HINDI">KAN/HIN</option>
                            <option value="FORZA/F1">FORZA/F1</option>
                            <option value="LUDO/CHESS">LUDO/CHESS</option>
                            <option value="PUBG/CALL OF DUTY">PUBG/CALL OF DUTY</option>
                            <option value="VALORANT/CSGO">VALORANT/CSGO</option>
                            <option value="FIFA/DON BRADMAN CRICKET">FIFA/DON BRADMAN CRICKET</option>
                        </select>
    </div>
    <div class="col-sm">
    DATE OF MATCH 5
    <input class="form-control" type="date" name="date5" id="">
    </div>
</div>
<div class="row">
    <div class="col-sm">
   <center> <div class="badge bg-dark p-2 m-4 text-center">SL NO 6.</div></center>
    </div>
    <div class="col-sm">
    G6
    <select  class="form-control" name="subject6" id="">
    <option value="">Select Game</option>
                            <option value="KANNADA/HINDI">KAN/HIN</option>
                            <option value="FORZA/F1">FORZA/F1</option>
                            <option value="LUDO/CHESS">LUDO/CHESS</option>
                            <option value="PUBG/CALL OF DUTY">PUBG/CALL OF DUTY</option>
                            <option value="VALORANT/CSGO">VALORANT/CSGO</option>
                            <option value="FIFA/DON BRADMAN CRICKET">FIFA/DON BRADMAN CRICKET</option>
                        </select>
    </div>
    <div class="col-sm">
    DATE OF MATCH 6
    <input class="form-control" type="date" name="date6" id="">
    </div>
</div>
<br>
<input type="text" name="loginid" hidden value="<?php echo $_SESSION['username']?>" id="">
<center><button type="submit" name="submit_tt" class="btn btn-dribbble">Prepare</button></center>
<br>
</form>
<?php 
        if(isset($_POST['submit_tt'])){
                $test_id = rand(10,10000);  
                $class = $_POST['class'];  
                $test = $_POST['test'];  
                $month = $_POST['month'];  
                $subject1 = $_POST['subject1'];  
                $date1 = $_POST['date1'];  
                $subject2 = $_POST['subject2'];  
                $date2 = $_POST['date2'];  
                $subject3 = $_POST['subject3'];  
                $date3 = $_POST['date3'];  
                $subject4 = $_POST['subject4'];  
                $date4 = $_POST['date4'];  
                $subject5 = $_POST['subject5'];  
                $date5 = $_POST['date5'];  
                $subject6 = $_POST['subject6'];  
                $date6 = $_POST['date6'];  
                $loginid = $_POST['loginid']; 
                
                

                                //INSERT 
                $query = " INSERT INTO time_table ( test_id, class, test, month, subject1, date1, subject2, date2, subject3, date3, subject4, date4, subject5, date5, subject6, date6, loginid )  VALUES ( '$test_id', '$class', '$test', '$month', '$subject1', '$date1', '$subject2', '$date2', '$subject3', '$date3', '$subject4', '$date4', '$subject5', '$date5', '$subject6', '$date6', '$loginid' ) "; 
                $result = mysqli_query($conn,$query); 

                if( $result )
                {
                    ?>
                    <script>
                        Swal.fire(
                                    'Success',
                                    '<?php echo $loginid." Time Table Added Successfully ";?>',
                                    'success'
                                    )
                    </script>
               <?php
                }
                else
                {
                    ?>
                    <script>
                        Swal.fire(
                                    'Internal Error',
                                    '<?php echo $loginid." Failed to Add Time Table!! Contact Technical Team ";?>',
                                    'error'
                                    )
                    </script>
               <?php
                }
        }

?>
</div>
<?php @include'footer.php';?>
