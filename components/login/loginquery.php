<?php 
    // $user = $_POST['user'];
    $user_info = $_POST['data'];
    $user = $user_info[0];
    $pass = $user_info[1];
    echo $user."<br>";
    echo $pass."<br>";

    include("../../src/connection.php");
    $login_query = " SELECT * FROM usuario WHERE user = '{$user}' && pass = '{$pass}' ";
    $login = mysqli_query( $connection, $login_query );
    var_dump($login);
    if( $login ){
        $login_rows = mysqli_num_rows( $login );
        if( $login_rows == 1 ){
            $login_data = mysqli_fetch_array( $login );
            alert("Correct login :)");
            header("location: dashboard.php");
        }else{
            echo "Something happened with the query:<br>";
            echo $login_query."<br>";
        }
    }else{
        var_dump($login_query);
    }
?>