<?php
// define variables and set to empty values
$fname=$mname=$lname=$showroom=$model = $email = $phone = $address = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["firstname"]);
    $mname = test_input($_POST["midname"]);
  $lname = test_input($_POST["lastname"]);
  $phone = test_input($_POST["Mobile_Number"]);

  $model = test_input($_POST["Model_name"]);
  $address = test_input($_POST["address"]);
  $date = test_input($_POST["Date"]);
  $showroom = test_input($_POST["Places"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h1>Thanks you for your intrest.</h1><br>Dear " .$fname." ".$mname." ".$lname."<br>You will soon recieve a confirmation call on your mobile number- ".$phone." regarding test drive of the car ".$model." at our showroom in ".$showroom." <br>The list of document you need to carry will be convey to you via mail to your address [ ". $address." ]. Kindly remember this date- [".$date." ]</h1>";



?>