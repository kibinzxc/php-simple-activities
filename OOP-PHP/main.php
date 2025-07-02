<?php
include_once 'Student.php';
include_once 'Scholar.php';

$students = [];

$student1 = new Student();
$student1->setName("LJ Saliling");
$student1->setAge(21);
$student1->setCourse("BSIT");
$student1->setEmail("lj@school.com");
$students[] = $student1;

$student2 = new Student();
$student2->setName("Lyza Baylon");
$student2->setAge(22);
$student2->setCourse("BSCS");
$student2->setEmail("lyza@school.com");
$students[] = $student2;

$scholar1 = new Scholar();
$scholar1->setName("Mona Bularon");
$scholar1->setAge(23);
$scholar1->setCourse("BSIS");
$scholar1->setEmail("mona@school.com");
$scholar1->setScholarshipAmount(50000);
$students[] = $scholar1;

$scholar2 = new Scholar();
$scholar2->setName("Daniel Castillon");
$scholar2->setAge(24);
$scholar2->setCourse("BSPSYCH");
$scholar2->setEmail("daniel@school.com");
$scholar2->setScholarshipAmount(60000);
$students[] = $scholar2;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profiles</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f1f5f2;
        margin: 0;
        padding: 20px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .card {
        background-color: #d3e4c4;
        border: 1px solid #a8caa0;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 250px;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    h2 {
        color: #4b715a;
    }

    p {
        color: #3b5743;
    }
    </style>
</head>

<body>
    <h1 style="text-align:center;color:#4b715a;">Student Profiles</h1>
    <div class="container">
        <?php foreach ($students as $student) {
            echo $student->getProfileHTML();
        } ?>
    </div>
</body>

</html>