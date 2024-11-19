<!DOCTYPE html>
<?php
include('func1.php');
$pid = '';
$ID = '';
$appdate = '';
$apptime = '';
$fname = '';
$lname = '';
$doctor = $_SESSION['dname'];
$sex = $dob = '';
if (isset($_GET['pid']) && isset($_GET['ID']) && ($_GET['appdate']) && isset($_GET['apptime']) && isset($_GET['fname']) && isset($_GET['lname'])) {
  $pid = $_GET['pid'];
  $ID = $_GET['ID'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $appdate = $_GET['appdate'];
  $apptime = $_GET['apptime'];
}

if (isset($_POST['prescribe']) && isset($_POST['pid']) && isset($_POST['ID']) && isset($_POST['appdate']) && isset($_POST['apptime']) && isset($_POST['lname']) && isset($_POST['fname'])) {
  $appdate = $_POST['appdate'];
  $apptime = $_POST['apptime'];
  $disease = $_POST['disease'];
  $allergy = $_POST['allergy'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $pid = $_POST['pid'];
  $ID = $_POST['ID'];
  $prescription = $_POST['prescription'];

  $query = mysqli_query($con, "insert into prescriptions(doctor,pid,ID,fname,lname,appdate,apptime,disease,allergy,prescription) values ('$doctor','$pid','$ID','$fname','$lname','$appdate','$apptime','$disease','$allergy','$prescription')");
  if ($query) {
    echo "<script>alert('Prescribed successfully!');</script>";
  } else {
    echo "<script>alert('Unable to process your request. Try again!');</script>";
  }
}
if (!empty($pid)) {
  $stmt = $con->prepare("SELECT fname, lname, gender, dob FROM patient WHERE pid = ?");
  $stmt->bind_param("s", $pid);
  $stmt->execute();
  $result = $stmt->get_result();
  $patient_data = $result->fetch_assoc();

  if ($patient_data) {
      $fname = $patient_data['fname'];
      $lname = $patient_data['lname'];
      $sex = $patient_data['gender'];
      $dob = $patient_data['dob'];

      // Calculate age based on DOB
      $dob_date = new DateTime($dob);
      $today = new DateTime();
      $age = $today->diff($dob_date)->y;
  } else {
      echo "<script>alert('Patient not found!');</script>";
  }
  $stmt->close();
}


?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <meta name="viewport" content="width=device-width, -scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="pres.css">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Health Centre NIT Delhi </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <style>
      .bg-primary {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
      }

      .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #342ac1;
        border-color: #007bff;
      }

      .text-primary {
        color: #342ac1 !important;
      }

      .btn-primary {
        background-color: #3c50c1;
        border-color: #3c50c1;
      }
    </style>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="doctor-panel.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Back</a>
        </li>
      </ul>
    </div>
  </nav>

</head>
<style type="text/css">
  button:hover {
    cursor: pointer;
  }

  #inputbtn:hover {
    cursor: pointer;
  }
</style>

<body style="padding-top:50px;">
  <!-- <div class="container-fluid" style="margin-top:50px;">
    <h3 style="margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome &nbsp<?php echo $doctor ?>
    </h3>

    <div class="tab-pane" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
      <form class="form-group" name="prescribeform" method="post" action="prescribe.php">

        <div class="row">
          <div class="col-md-4"><label>Disease:</label></div>
          <div class="col-md-8">
            <textarea id="disease" cols="86" rows="5" name="disease" required></textarea>
          </div><br><br><br>

          <div class="col-md-4"><label>Allergies:</label></div>
          <div class="col-md-8">
            <textarea id="allergy" cols="86" rows="5" name="allergy" required></textarea>
          </div><br><br><br>
          <div class="col-md-4"><label>Prescription:</label></div>
          <div class="col-md-8">
            <textarea id="prescription" cols="86" rows="10" name="prescription" required></textarea>
          </div><br><br><br>
          <input type="hidden" name="fname" value="<?php echo $fname ?>" />
          <input type="hidden" name="lname" value="<?php echo $lname ?>" />
          <input type="hidden" name="appdate" value="<?php echo $appdate ?>" />
          <input type="hidden" name="apptime" value="<?php echo $apptime ?>" />
          <input type="hidden" name="pid" value="<?php echo $pid ?>" />
          <input type="hidden" name="ID" value="<?php echo $ID ?>" />
          <br><br><br><br>
          <input type="submit" name="prescribe" value="Prescribe" class="btn btn-primary" style="margin-left: 40pc;">
      </form>
      <br>

    </div>
  </div> -->

  <div class="prescription">
    <div class="scroll-page">
      <div class="pres">
        <div class="pres-top">
          <div class="pres-top-left">
            <div class="doc-logo-section">
              <div class="logo">
                <img src="./images/logo.svg" alt="Health Center Logo">
              </div>
              <div class="logo-text">
                <p>Health Center</p>
                <p>National Institute of Technology Delhi</p>
              </div>
            </div>
          </div>
          <div class="pres-top-right">
            <div class="doc-info">
              <span class="bold">Dr. <?php echo $doctor ?></span>
              <span class="italic">Md. Medicine</span>
              <span>Room No. 112</span>
              <span>Mini Campus</span>
              <span>NIT, Delhi</span>
              <span>+91 9509649232</span>
            </div>
          </div>
        </div>
        <div class="pres-content">
          <div class="pres-content-left">
            <span class="same-line">
              <span class="bold">Name:</span>
              <span class="bbt"><?php echo $fname . " " . $lname; ?></span>
            </span>
            <span class="same-line">
              <span class="bold">Age:</span>
              <span class="bbt"><?php echo $age ?></span>
            </span>
            <span class="same-line">
              <span class="bold">Sex:</span>
              <span class="bbt"><?php echo $sex ?></php></span>
            </span>
            <span class="same-line">
              <label for="weight" class="font-bold block">Weight:</label>
              <input type="number" id="weight" value="70" min="40" max="300"> Kg
            </span>
            <span class="same-line">
              <label for="height" class="font-bold block">Height:</label>
              <input type="number" id="height" value="6.1" min="3" max="6.6" step="0.1"> ft
            </span>
            <span class="same-line">
              <label for="bp" class="font-bold block">B.P.:</label>
              <input type="number" id="bp-systolic" value="120" min="60" max="150"> /
              <input type="number" id="bp-diastolic" value="80" min="60" max="150"> mm
            </span>
            <span class="same-line">
              <label for="pulse-rate" class="font-bold block">Pulse Rate:</label>
              <input type="number" id="pulse-rate" value="72" min="60" max="100">
            </span>
            <span class="same-line">
              <label for="spo2" class="font-bold block">Spo<sub>2</sub>:</label>
              <input type="number" id="spo2" value="98" min="50" max="150"> %
            </span>
            <span class="same-line">
              <label for="temperature" class="font-bold block">Temperature:</label>
              <input type="number" id="temperature" value="98.4" min="68.4" max="120.4" step="0.1"> °F
            </span>
          </div>
          <div class="pres-content-right">
            <div class="pres-content-header">
              <div class="pres-content-header-left">
                <span class="bold">ID:</span>
                <span class="btb"><?php echo $pid ?></span>
              </div>
              <div class="pres-content-header-right">
                <span class="bold">Date:</span>
                <span class="btb"><?php echo date('d/m/Y')?></span>
              </div>
            </div>
            <div class="pres-content-content">
              <div class="pres-content-symptom">
                <span class="bold">Symptom:</span>
                <textarea style="height: 171px;"></textarea>
              </div>
              <div class="pres-content-diagnosis">
                <span class="bold">Diagnosis:</span>
                <textarea style="height: 123px;"></textarea>
              </div>
              <div class="pres-content-medication">
                <span class="bold">Medication:</span>
                <textarea style="height: 373px;"></textarea>
              </div>
              <div class="pres-content-test">
                <span class="bold">Tests:</span>
                <textarea style="height: 232px;"></textarea>
              </div>
            </div>
            <div class="pres-content-footer">
              <button class="p-button-sm flex" onclick="alert('Printing...')">Print</button>
              <button class="p-button-sm flex" onclick="alert('Submitting...')">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="history-scroll scroll-page">
      <div class="history pres">
        <!-- Add History Components -->
        <div class="history-item">History 1</div>
        <div class="history-item">History 2</div>
        <div class="history-item">History 3</div>
        <div class="history-item">History 4</div>
        <div class="history-item">History 5</div>
      </div>
    </div>
  </div>
</body>

</html>