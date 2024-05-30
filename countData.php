<?php
include "conn.php";
                    
$sql_staff_data =  mysqli_query($conn, "SELECT * FROM users WHERE rank = 'admin' OR rank = 'staff'");
$sql_course_data =  mysqli_query($conn, "SELECT * FROM courses");

$i = 0;
$j = 0;

while ($count_staff_row = mysqli_fetch_assoc($sql_staff_data)) {
    $i++;
}

while ($count_course_row = mysqli_fetch_assoc($sql_course_data)) {
    $j++;
}

$_SESSION['count_staff'] = $i;
$_SESSION['count_course'] = $j;

?>