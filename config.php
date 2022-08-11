<?php

//define the variables and set to empty values 
$industry = $course = $relevent_experience = $working_place = $living_place = $qualification = $work_evidence = $industry_qualified = $name = $email = $contact = $additional_query = '';
//define error variable and set to empty
$industryErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['industry'])) {
    $industryErr = 'Industry is required..!';
    header("Location:index.php?industryErr=" . $industryErr, TRUE, 301);
    exit();
  } else {
    $industry = test_input($_POST['industry']);
  }


  if (empty($_POST['course'])) {
    $courseErr = 'Course is required..!';
    header("Location:index.php?courseErr=" . $courseErr, TRUE, 301);
    exit();
  } else {
    $course = test_input($_POST['course']);
  }


  if (empty($_POST['relevent_experience'])) {
    $releventExperienceErr = 'Relevent Experience is required..!';
    header("Location:index.php?releventExperienceErr=" . $releventExperienceErr, TRUE, 301);
    exit();
  } else {
    $relevent_experience = test_input($_POST['relevent_experience']);
  }


  if (empty($_POST['working_place'])) {
    $workingPlaceErr = 'Working Place is required..!';
    header("Location:index.php?workingExperienceErr=" . $workingPlaceErr, TRUE, 301);
    exit();
  } else {
    $working_place = test_input($_POST['working_place']);
  }


  if (empty($_POST['living_place'])) {
    $livingPlaceErr = 'Living Place is required..!';
    header("Location:index.php?livingPlaceErr=" . $livingPlaceErr, TRUE, 301);
    exit();
  } else {
    $living_place = test_input($_POST['living_place']);
  }


  if (empty($_POST['qualification'])) {
    $qualificationErr = 'Qualification is required..!';
    header("Location:index.php?qualificationErr=" . $qualificationErr, TRUE, 301);
    exit();
  } else {
    $qualification = test_input($_POST['qualification']);
  }

  if (empty($_POST['work_evidence'])) {
    $workEvidenceErr = 'Work Evidence is required..!';
    header("Location:index.php?workEvidenceErr=" . $workEvidenceErr, TRUE, 301);
    exit();
  } else {
    $workEvidence = test_input($_POST['work_evidence']);
  }

  if (empty($_POST['industry_qualified'])) {
    $industryQualifiedErr = 'industry Qualified is required..!';
    header("Location:index.php?industryQualifiedErr=" . $industryQualifiedErr, TRUE, 301);
    exit();
  } else {
    $industryQualified = test_input($_POST['industry_qualified']);
  }

  if (empty($_POST['name'])) {
    $nameErr = 'Name is required..!';
    header("Location:index.php?nameErr=" . $nameErr, TRUE, 301);
    exit();
  } else {
    $name = test_input($_POST['name']);
  }

  if (empty($_POST['email'])) {
    $emailErr = 'Email is required..!';
    header("Location:index.php?emailErr=" . $emailErr, TRUE, 301);
    exit();
  } else {
    $email = test_input($_POST['email']);
  }


  if (empty($_POST['contact'])) {
    $contactErr = 'Contact is required..!';
    header("Location:index.php?contactErr=" . $contactErr, TRUE, 301);
    exit();
  } else {
    $contact = test_input($_POST['contact']);
  }


  if (empty($_POST['additional_query'])) {
    $additional_query = ' ';
  } else {
    $additional_query = test_input($_POST['additional_query']);
  }
}


function test_input($input)
{
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

$created_at = date('Y-m-d', time());

//setr the conncection of database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'rplform';

//create database connection 
$conn = new mysqli($servername, $username, $password, $dbName);

//data storing query 
$sqlQuery = "insert into rplform (industry,course, relevent_experience, working_place,living_place,qualification, work_evidence, industry_qualified,name, email,contact, additional_query, created_at)
          values('$industry','$course','$relevent_experience','$working_place', '$living_place','$qualification',
          '$workEvidence','$industryQualified','$name', '$email','$contact','$additional_query','$created_at'  )";

if ($conn->query($sqlQuery)) {
  $success = "Successfully form data inserted...";
  header('Location:index.php?success=' . $success, TRUE, 301);
} else {
  $error = "form data inserted failed...";
  header('Location:index.php?error=' . $error, TRUE, 301);
}
