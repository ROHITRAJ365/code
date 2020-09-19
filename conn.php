<?php
$Firstname = $POST['username'];
$Lastname = POST['password'];
$gender = POST['gender'];
$email = POST['email'];
$Designation = POST['designaion'];
$Telephonecode = POST['TelePhonecode'];
$phone = POST['phone'];
$Hobbie = POST['hobbie'];





if (empty($username) || !empty($passwordname) || !empty($gender) || !empty($email) || !empty($phoneno) || !empty($phone) || !$empty(Designation) || !$empty(Hobbie) {
     $conn = new mysqli('localhost','tesz.form');
     if($conn->connect_error)
      $host = "localhost";
      $dbusername = "root";
      $dbPassword = "";
      $dbname = "tesz.form";


    //create coonnection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error()){
       die('connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    }else{
         $SELECT = SELECT email form register where email = ? limit 1";
         $INSERT = INSERTT Into register (username, password, gender, email, Telephoneno, phone, Designation,Hobbie) values(?, ?, ?, ?, ?, ?, ?, ?)";
         $stmt->bind_param("sssssi,$firstname,$lastname, $gender,$email, $telephoneno, $designation);

        //Prepare statement
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_parm("s",$email);
        $stmt->execute();
        $stmt->bind result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

       if ($rnum==0) {
           $stmt->close();

           $stmt = $conn->prepare($INSERT);
           $stmt->bind_param("ssssii", $username, $password, $gender, $email, $phonecode, $phone);
           $stmt->execute();
           echo "New record inserted sucessfully";
           } else {
                 echo "Someone already registered using this email";
} else {
       echo "All field are reequired";
        die();
}
