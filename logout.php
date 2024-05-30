<?php
session_start();
if (isset($_SESSION['id'])){
    session_unset();
    session_destroy();
    echo "<script>
    alert('Logged out')
    location.replace('index.php');
    </script>";
}

else {
    echo "<script>
        alert ('Please login first')    
        location.replace('login.php');
        </script>";
    }
?>