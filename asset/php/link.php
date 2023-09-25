<?php
require 'database.php';
require 'array.php';
updateCount('cut_relawan');

$id = $_GET['id'];
header('Location: ' . $sosmed[$id]['link']);
