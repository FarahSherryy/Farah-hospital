<?php
$password = "farah123";

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo "Password: $password\n";
echo "Hashed Password: $hashedPassword\n";
?>
