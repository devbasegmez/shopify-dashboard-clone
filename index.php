<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link type="text/css" rel="stylesheet" href="assets/css/style.min.css?v=<?php echo date("Ymdhis");?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-header w-screen h-screen overscroll-none">
<?php include ('header.php'); ?>
<section class="content w-full overflow-auto rounded-t-[15px] bg-general">
    <?php include ('menu.php'); ?>
    <?php include ('switch.php'); ?>
</section>
<div class="overlay"></div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="node_modules/flowbite/dist/flowbite.min.js"></script>
<script type="text/javascript" src="assets/js/custom.min.js"></script>
</body>
</html>