<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>learn-mvc</title>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="../../public/css/style.scss">
    <style>
     
    </style>
</head>
<body>

<?php

if (!empty($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $errors) {
        echo "<h1> $errors</h1>";
    }
    unset($_SESSION['errors']);
}

$this->renderTemplate();
?>
</body>
</html>