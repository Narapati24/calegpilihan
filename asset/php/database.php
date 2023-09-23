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

function conn()
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "dennyrudiana";

  $db = mysqli_connect($hostname, $username, $password, $database) or die(mysqli_error($db));
  return $db;
}

function queryView($data)
{
  $db = connView();
  $result = mysqli_query($db, $data) or die(mysqli_error($db));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function query($data)
{
  $db = conn();
  $result = mysqli_query($db, $data) or die(mysqli_error($db));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function insertComment($data)
{
  $db = conn();
  $nama = $data['nama'];
  $text = $data['text'];

  $query = "INSERT INTO comment
              VALUES
              (null, '$nama', '$text')";

  mysqli_query($db, $query) or die(mysqli_error($db));

  return [
    'error' => false,
    'msg' => 'Data Telah Diterima'
  ];
  exit;
}

function updateView()
{
  $db = connView();

  mysqli_query($db, 'UPDATE server SET svr_count = svr_count + 1 WHERE svr_name = "dennyrudiana"') or die(mysqli_error($db));
}
