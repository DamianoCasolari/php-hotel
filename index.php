<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad-word</title>

    <!--link google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!--link font-awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link css  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"
        defer></script>
</head>

<body class="d-flex justify-content-center align-items-center mt-5 text-center">

    <h1> </h1>

    <?php foreach ($hotels as $hotel): ?>
        <div class="card rounded-4 p-3 m-2">
            <?php foreach ($hotel as $key => $value): ?>
                <p>
                    <?= $key . " : " . $value; ?>
                </p>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>





    <!-- <form class="w-50" action="myScript.php" method="POST">
        <div class="card p-5 bg-dark text-white shadow-lg rounded-5">
            <div class="mb-3">
                <label for="text" class="form-label fw-bold">Write the text to correct</label>
                <textarea class="form-control" id="text" name="text" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="word" class="form-label fw-bold">Taboo word</label>
                <input type="text" class="form-control" id="word" name="word" placeholder="choose a word to censor">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-25 ">Submit</button>
                <button type="reset" class="btn btn-danger w-25">Reset</button>
            </div>
        </div> -->
    </form>


    <!-- link javascript  -->
    <script src="./assets/js/app.js"></script>
</body>

</html>