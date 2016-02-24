<!doctype html>
<html lang="en">
<head>

    <!-- meta data & title -->
    <meta charset="utf-8">
    <title>Register Donor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/style-projects.css">
    <!-- Reg form stylesheets -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/css/styleRegForm.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body class="body">

<!-- Include the header file -->
<?php include 'header.php' ?>
<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12  form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Be a Donor , Save thousands of lives</h3>

                            <p>
                                <small>Fill in the form below to register as a donor</small>
                            </p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="registration-form">

                            <!-- first name , last name -->
                            <div class="row">
                                <label class="col-xs-2">First name</label>
                                <input type="text" name="firstName" placeholder="Enter First Name" class="col-xs-3"
                                       id="firstName">
                                <label class="col-xs-2 col-xs-offset-1">Last name</label>
                                <input type="text" name="lastName" placeholder="Enter Last Name" class="col-xs-3"
                                       id="lastName">
                            </div>
                            <br>
                            <!-- email , nic -->
                            <div class="row">
                                <label class="col-xs-2">Email</label>
                                <input type="text" name="email" placeholder="Enter Email Address." class="col-xs-3"
                                       id="email">
                                <label class="col-xs-2 col-xs-offset-1">NIC Number</label>
                                <input type="text" name="nic" placeholder="Enter NIC Number" class="col-xs-3" id="nic">

                            </div>
                            <br>
                            <!-- contact number ,?????? -->
                            <div class="row">
                                <label class="col-xs-2">Contact Number</label>
                                <input type="text" name="contact" placeholder="Enter Contact Number" class="col-xs-3"
                                       id="contact">
                                <label class="col-xs-2 col-xs-offset-1">City</label>
                                <input type="text" name="" placeholder="Enter your city" class="col-xs-3" id="city">
                            </div>
                            <br>

                            <!-- DOB ,Gender -->
                            <div class="row">
                                <label class="col-xs-2">Date of Birth</label>

                                <div class="col-xs-3">
                                    <!-- DOB date-->
                                    <select name="date" style="width: 75px; margin-left: -15px;"
                                            >
                                        <option value=""> DD</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>

                                    <!-- DOB month-->
                                    <select name="month" style="width: 75px;" >
                                        <option value="0"> MM</option>
                                        <option value="january">January</option>
                                        <option value="febuary">Febuary</option>
                                        <option value="march">March</option>
                                        <option value="april">April</option>
                                        <option value="may">May</option>
                                        <option value="june">June</option>
                                        <option value="july">July</option>
                                        <option value="august">August</option>
                                        <option value="september">September</option>
                                        <option value="october">October</option>
                                        <option value="november">November</option>
                                        <option value="december">December</option>
                                    </select>

                                    <!-- DOB year-->
                                    <select name="year" style="width: 100px;" >
                                        <option value="0"> YYYY</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                    </select>

                                </div>


                                <label class="col-xs-2 col-xs-offset-1">Gender</label>
                                <select id='gender' class="col-xs-3" onchange="selectValidation(this.value)">
                                    <option value='none'>Select Gender</option>
                                    <option value='male'>Male</option>
                                    <option value='female'>Female</option>
                                </select>
                                <label id="errorGender" style="color: red;"> </label>
                            </div>
                            <br>

                            <div class="row">
                                <label class="col-xs-2">Donor Type</label>
                                <select id='donorType' class="col-xs-3" onchange="selection(this.value)">
                                    <option value='0'>Select Donor Type</option>
                                    <option value='1'>Blood Donor</option>
                                    <option value='2'>Equipments Donor</option>
                                    <option value='3'>Both</option>
                                </select>
                            </div>
                            <br>
                            <!-- inputs for blood donor-->

                            <span id="bloodDonorList" class="" col-xs-10" >
                            <div class="row">
                                <label class="col-xs-2">Blood Type</label>
                                <select id='bloodType' class="col-xs-3">
                                    <option value='0'>Select Blood Type</option>
                                    <option value='a+'>A+</option>
                                    <option value='a-'>A-</option>
                                    <option value='b+'>B+</option>
                                    <option value='b-'>B-</option>
                                    <option value='o+'>O+</option>
                                    <option value='o-'>O-</option>
                                    <option value='ab+'>AB+</option>
                                    <option value='ab-'>AB-</option>

                                </select>
                            </div>
                            <br>

                            <div class="row">
                                <label class="col-xs-4">Have you donated blood before?</label>
                                <select id='donatedBefore' class="col-xs-2 ">
                                    <option value='0'>Select</option>
                                    <option value='y'>Yes</option>
                                    <option value='n'>No</option>
                                </select>
                            </div>
                            <br>

                            <div class="row">
                                <label class="col-xs-4">How often can you donate blood?</label>
                                <select id='donationPeriod' class="col-xs-2 ">
                                    <option value='0'>Select</option>
                                    <option value='fourMonths'>Four Months</option>
                                    <option value='sixMonths'>Six Months</option>
                                    <option value='year'>A Year</option>
                                </select>
                            </div>

                            </span>

                            <!-- inputs for equipment donor-->
                            <span id="equipmentDonorList" class="layer2 col-xs-10">
                                <div class="row">
                                    <label class="col-xs-4">Donating Equipments</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="wheelchairs">Wheelchairs</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="spectacles">Spectacles</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="scannerMachines">Scanner
                                        Machines</label>
                                    <label class="checkbox-inline"><input type="checkbox" value="other">Other</label>
                                </div>
                                <br>
                            </span>

                            <span id="bothDonorList">
                                <br>
                                 <div class="row">
                                     <label class="col-xs-4">Donating Equipments</label>
                                     <label class="checkbox-inline"><input type="checkbox" value="wheelchairs">Wheelchairs</label>
                                     <label class="checkbox-inline"><input type="checkbox" value="spectacles">Spectacles</label>
                                     <label class="checkbox-inline"><input type="checkbox" value="scannerMachines">Scanner
                                         Machines</label>
                                     <label class="checkbox-inline"><input type="checkbox" value="other">Other</label>
                                 </div>
                                <br>
                            </span>
                            <button type="submit" class="btn col-xs-2 col-xs-offset-4">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- include Footer -->
<?php include 'footer.php' ?>



<!-- Javascript -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        document.getElementById('bloodDonorList').style.visibility = 'hidden';
        document.getElementById('equipmentDonorList').style.visibility = 'hidden';
        document.getElementById('bothDonorList').style.visibility = 'hidden';
    });
</script>

<!-- hide and show panels according to donor type-->

<script>
    function selection(val) {
        if (val == "1") {
            document.getElementById('bloodDonorList').style.visibility = 'visible';
            document.getElementById('equipmentDonorList').style.visibility = 'hidden';
            document.getElementById('bothDonorList').style.visibility = 'hidden';
        } else if (val == "2") {
            document.getElementById('equipmentDonorList').style.visibility = 'visible';
            document.getElementById('bloodDonorList').style.visibility = 'hidden';
            document.getElementById('bothDonorList').style.visibility = 'hidden';

        } else if (val == "3") {
            document.getElementById('bloodDonorList').style.visibility = 'visible';
            document.getElementById('bothDonorList').style.visibility = 'visible';
            document.getElementById('equipmentDonorList').style.visibility = 'hidden';
        } else {
            window.alert("Please select a value");
        }
    }
</script>


<script>
    function selectValidation(val) {
        alert(val);
        if (val == "none") {
            document.getElementById("errorGender").innerHTML = "Please select a value";
            document.getElementById("errorGender").style.color = "red";


        }else{
            document.getElementById("errorGender").innerHTML = "";
        }
    }

</script>


</body>
</html>