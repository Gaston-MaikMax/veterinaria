<?php


$password = '1234';

echo password_hash($password, PASSWORD_DEFAULT);

$hash = '$2y$10$fupnA7Gu24aTS8ETlniqce7X04LIkF3/k3EbLq/67YvbupWptfqP2';

if (password_verify($password, $hash)) {
  echo 'Password is valid!';
} else {
  echo 'Invalid password.';
}
