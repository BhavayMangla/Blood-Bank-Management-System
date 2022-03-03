<?php
$insert=false;
    if(isset($_POST['name']))
{
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database is failed due to".mysqli_connect_error());
    }
    // echo "successfull connection to db";
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $Phonenumber=$_POST['number'];
    $BloodGroup=$_POST['BloodGroup'];
    $email=$_POST['email'];
    $sql="INSERT INTO `doner_details`.`donor` (`Name`, `Age`, `Gender`, `BloodGroup`, `Phonenumber`, `Email`, `dt`) VALUES ('$name','$gender','$age','$BloodGroup', '$Phonenumber', '$email',current_timestamp());";
    // echo $sql;
    if($con->query($sql)==true){
        // echo "successfully inserted";
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Doners</title>
    <link rel="stylesheet" href="styel.css">
</head>

<body>
    <img class="bg" src="donate.jpg" alt="image(person donating blood)">
    <div class="container">
        <h1>
            A Drop Of Water Makes Ocean</h1>
        <h1>
            A Unit Of Blood Saves Life </h1>
        <p>Enter your details and submit the form to register for Blood Donation camp</p>
       
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name:">
            <input type="text" name="age" id="age" placeholder="Enter your age:">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender:">
            <input type="bloodgroup" name="BloodGroup" id="BloodGroup" placeholder="Enter your BloodGroup:">
            <input type="phone" name="number" id="number" placeholder="Enter your phonenumber:">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <button class="btn">Submit</button>
             <?php
        if($insert==true){
            header("Location:formsubmission.html");
        // echo" <!DOCTYPE html>
        // <html lang='en'>
        
        // <head>
        //     <meta charset='UTF-8'>
        //     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        //     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        //     <title>Blood Doners</title>
        //     <link rel='stylesheet' href='style.css'>
        // </head>
        
        // <body>
        //     <img class='bg' src='donate.jpg' alt='image(person donating blood)'>
        //     <div class='container'>
        //         <h1>
        //             A Drop Of Water Makes Ocean</h1>
        //         <h1>
        //             A Unit Of Blood Saves Life </h1>
        //         <p class='aftersubmit'>Thank you for submitting your details.</p>
        //     </div>
        // </body>
        // </html>";
        }
        ?> 
        </form>
    </div>
</body>


</html>