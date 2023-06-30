<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "task";

$conn = mysqli_connect($servername, $username, $password, $database);


$response =array();
if($con){
    $sql = "select * from user";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content_Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['fname'] = $row['fname'];
            $response[$i]['lname'] = $row['lname'];
            $response[$i]['bday'] = $row['bday'];
            $response[$i]['email'] = $row['email'];
            $response[$i]['contact'] = $row['contact'];
            $i++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);

    }
}
else{
    echo "Database connection failed";
}

?>