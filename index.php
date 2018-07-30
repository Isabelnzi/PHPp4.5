<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>P4ex4</title>
  </head>
  <body>
    <p>
  <?php
  $number = 35;
  $firstname = 'Isabel';
function identity($number,$firstname) {
  return $number.$firstname;
}
echo identity( $firstname,$number);
?>
   </p>
  </body>
