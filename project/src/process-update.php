<?php
    $patientid = $_POST['patientid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $height = $_POST['height'];
    $weightt = $_POST['weightt'];
    $blood_type = $_POST['blood_type'];
    $created_on = $_POST['created_on'];
    $modified_on = $_POST['modified_on'];

    include 'config.php';

    // Bước 02:
    $sql = "UPDATE patient (patientid, firstname, lastname, dateofbirth, gender, mobile, email, height, weightt, 
    blood_type, created_on, modified_on)
    SET ('$patientid','$firstname','$lastname','$dateofbirth',' $gender','$mobile','$email','$height','$weightt',' $blood_type',' $created_on','$modified_on')";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:index.php");
        header("Location:indexfull.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>