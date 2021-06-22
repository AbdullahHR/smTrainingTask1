<?php
    //database connection
    $con = new mysqli('127.0.0.1','root','', 'motorsdb');

    //check connection 
    if (mysqli_connect_errno()):
        printf("Connect failed: %s\n", mysqli_connect_errno());
        exit();
    endif;

    $motor1 = $_POST['motor1'];
    $motor2 = $_POST['motor2'];
    $motor3 = $_POST['motor3'];
    $motor4 = $_POST['motor4'];
    $motor5 = $_POST['motor5'];
    $motor6 = $_POST['motor6'];

    if (isset($_POST['save'])){
        echo "<br>";
        
        $my_query = "INSERT INTO motors (m1, m2, m3, m4, m5, m6) VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', $motor6);";
        $result = mysqli_query($con, $my_query);
        if($result)
        {
            echo "Values saved successfuly!";
        }else{
            echo "ERROR: Unable to insert values <br>";
        }

    }else if(isset($_POST['start'])){
    echo "<br>";
    $my_query = "select * from motors ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($con, $my_query);
    $print_data = mysqli_fetch_row($result);
    
    echo "Last motors angle values were:";
    echo "<br>";
    //Motor1
    echo "Motor1: ".$print_data[1];
    echo "<br>";


    //Motor2
    echo "Motor2: ".$print_data[2];
    echo "<br>";


    //Motor3
    echo "Motor3: ".$print_data[3];
    echo "<br>";


    //Motor4
    echo "Motor4: ".$print_data[4];
    echo "<br>";


    //Motor5
    echo "Motor5: ".$print_data[5];
    echo "<br>";


    //Motor6
    echo "Motor6: ".$print_data[6];
}

?>