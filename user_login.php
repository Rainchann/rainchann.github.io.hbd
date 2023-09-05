<?php   

    //connect to db
    $conn =mysqli_connect('localhost', 'root', 'd.ZljYqU15vUK49p', 'diary');

    //check connection
    if (!$conn) {
        header("Location: ./diary.html");
    };

    //write query
    $sql = 'SELECT username, password FROM user_info';

    //get result
    $result = mysqli_query($conn, $sql);

    //fetching result into an array
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode(($data));

    // mysqli_close($conn);

    //storing an array
    
    // mysqli_free_result($result);

    // $my_title = $_GET["my_title"];
    // $my_content = $_GET["my_content"];
    // $my_datetime = $_GET["my_datetime"];

    // mysqli_close($conn);

    // header("Location: ./diary.html");

    // print_r(htmlspecialchars($data[4]['content']));


?>