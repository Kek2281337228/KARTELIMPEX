
<?php
session_start();
$users = [
  'admin' => '12345',
  'manager' => 'securepass'
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($users[$username]) && $users[$username] === $password) {
  $_SESSION['user'] = $username;
  echo json_encode(['success' => true]);
} else {
  echo json_encode(['success' => false]);
}
?>
