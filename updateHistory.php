<?php 
    function updateHistory($subjectName){
        include "conn.php";
        if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
            $id = $_SESSION['id'];
            
            $sql =  mysqli_query($conn, "SELECT learn_history FROM users WHERE id = '$id'");
            
            if (mysqli_num_rows($sql) === 1) {
                $row = mysqli_fetch_assoc($sql);
                $learn_history = $row['learn_history'];
                $learn_history = $learn_history.$subjectName;
                mysqli_query($conn, "UPDATE users SET learn_history = '$learn_history' WHERE users.id = '$id'");
            }
        }
    }

?>