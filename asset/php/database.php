<?php

function connView()
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "servercountview";

  $db = mysqli_connect($hostname, $username, $password, $database) or die(mysqli_error($db));
  return $db;
}

function query($data)
{
  $db = connView();
  $result = mysqli_query($db, $data) or die(mysqli_error($db));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function update()
{
  $db = connView();

  mysqli_query($db, 'UPDATE server SET svr_count = svr_count + 1 WHERE svr_name = "dennyrudiana"') or die(mysqli_error($db));
}
