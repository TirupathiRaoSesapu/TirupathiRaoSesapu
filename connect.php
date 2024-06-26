<?php 
    $serverName="localhost";
    $userName="root";
    $password = "";
    $databaseName="tirupathiraosesapu";

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);

    // Database connection
    if (!$conn) {
            die("Connection Failed :".mysqli_connect_error());
    }

    if (isset($_POST['save']))
    {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];
        $pasword = $_POST['password'];

        $sql_query = "INSERT INTO login_information (first_name, last_name, email, gender, mobile_number, user_password) values ($first_name, $last_name, $email, $gender, $number, $pasword)";

        if (mysqli_query($conn, $sql_query))
        {
            echo "New Details Entry Inserted Successfully !";
        }
        else
        {
            echo "Error :".$sql."".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>