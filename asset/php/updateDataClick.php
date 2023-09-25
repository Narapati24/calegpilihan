<?php
require 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['relawan'])) {
    updateCount('cut_relawan');
    $relawan = query("SELECT cut_relawan FROM count")[0];
    $result = $relawan['cut_relawan'];
  } else {

    updateCount('cut_dukungan');
    $dukungan = query("SELECT cut_dukungan FROM count")[0];
    $commentTotal = query("SELECT * FROM comment");
    $result = count($commentTotal) + $dukungan['cut_dukungan'];
  }
  echo $result;
}
