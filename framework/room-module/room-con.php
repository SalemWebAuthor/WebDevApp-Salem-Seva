<?php error_reporting(0);
    $number = $_POST['number'];
    $type = ucfirst($_POST['type']);
    $description = ucfirst($_POST['description']);
    $price = ucfirst($_POST['price']);
    $floor = ucfirst($_POST['floor']);

    //DB_Connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("Insert into room(number, type, description, price, floor) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("issds", $number, $type, $description, $price, $floor);
        $stmt->execute();
        echo "Added Successfully";
        $stmt->close();
        $conn->close();
    }
?>
