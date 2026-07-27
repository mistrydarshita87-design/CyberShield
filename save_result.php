<?php
$conn = mysqli_connect("localhost","root","","cybershield");

$name = $_POST['name'];
$score = $_POST['score'];
$total = 12;

mysqli_query($conn,"
INSERT INTO quiz_results (user_name, score, total, created_at)
VALUES ('$name', '$score', '$total', NOW())
");
?>