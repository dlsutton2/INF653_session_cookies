<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./css/main.css">

    <title>Zippy Used Autos</title>
</head>
<body class="p-4">
    <header class="mb-2 border-bottom border-1 border-secondary d-flex flex-column flex-md-row-reverse justify-content-md-between align-items-md-center">
        <?php if(!isset($_SESSION['userid']) &&
                ($action != 'register' && $action != 'logout')) { ?>

            <p class="align-self-end"><a href="?action=register" class="fw-bold">Register</a></p>

        <?php } elseif (isset($_SESSION['userid']) &&
                        ($action != 'register' && $action != 'logout')) { ?>

            <p class="align-self-end"><?= "Welcome {$_SESSION['userid']}! "?>(<a href="?action=logout" class="fw-bold">Sign Out</a>)</p>

        <?php } else { ?>
            <div></div>
        <?php } ?>
        <h1>Zippy Used Autos</h1>
    </header>
   <main>