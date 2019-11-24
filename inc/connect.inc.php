<?php
$conn = mysqli_connect("localhost", "root", "00000000") or die("Couldn't connet to SQL server");
mysqli_select_db($conn, "ebuybd") or die("Couldn't select DB");

date_default_timezone_set('Africa/Cairo');
