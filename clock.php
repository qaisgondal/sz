<?php
define('TITLE','S$Z');
    include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clock</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="clockBody">
    <!-- <h1 class="mt-5">hy </h1>
    <h1 class="mt-5">hy </h1>
    <h1 class="mt-5">hy </h1> -->
    <div class="clock">
        <div class="hour">
            <div class="hr" id="hr"></div>
        </div>
        <div class="min">
            <div class="mn" id="mn"></div>
        </div>
        <div class="sec">
            <div class="sc" id="sc"></div>
        </div>
    </div>
</body>
</html>

<?php
include('footer.php');
?>