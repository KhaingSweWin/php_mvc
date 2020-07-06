<?php
  include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
    $applicantsObj = new ApplicantsView();
    echo $applicantsObj->showApplicant('khaing');
    
    $applicantsObj2= new ApplicantsContr();
    echo $applicantsObj2->createApplicant('Mrs.', 'Khaing swe win', 'ksw','female');
  ?>
</body>
</html>
