<?php
$con = mysqli_connect("localhost", "root", "", "myhmsdb");
if (isset($_POST['update_data'])) {
  $contact = $_POST['contact'];
  $status = $_POST['status'];
  $query = "update appointment set payment='$status' where contact='$contact';";
  $result = mysqli_query($con, $query);
  if ($result)
    header("Location:updated.php");
}

function display_specs()
{
  global $con;
  $query = "select distinct(spec) from doctor";
  $result = mysqli_query($con, $query);
  while ($row = mysqli_fetch_array($result)) {
    $spec = $row['spec'];
    echo '<option data-value="' . $spec . '">' . $spec . '</option>';
  }
}

function display_docs()
{
  global $con;
  $query = "select * from doctor";
  $result = mysqli_query($con, $query);
  while ($row = mysqli_fetch_array($result)) {
    $username = $row['username'];
    $price = $row['docFees'];
    $spec = $row['spec'];
    echo '<option value="' . $username . '" data-value="' . $price . '" data-spec="' . $spec . '">' . $username . '</option>';
  }
}

if (isset($_POST['doc_sub'])) {
  $username = $_POST['username'];
  $query = "insert into doctor(username)values('$username')";
  $result = mysqli_query($con, $query);
  if ($result)
    header("Location:adddoc.php");
}
