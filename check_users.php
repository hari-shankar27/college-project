<?php
include "db.php";
$result = mysqli_query($conn, "SELECT COUNT(*) as count FROM users");
$row = mysqli_fetch_assoc($result);
echo "Users in DB: " . $row['count'];
?>