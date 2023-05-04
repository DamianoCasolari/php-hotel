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

// $parking = $_GET['parking'];

if ($_GET['parking'] == 1) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'] == true;
    });
}

// var_dump($_GET['vote']);

if ($_GET['vote'] == "on") {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 1;
    });
}
if ($_GET['vote2'] == "on") {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 2;
    });
}
if ($_GET['vote3'] == "on") {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 3;
    });
}
if ($_GET['vote4'] == "on") {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 4;
    });
}
if ($_GET['vote5'] == "on") {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 5;
    });
}




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
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"
        defer></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- <h1 class="container-lg text-center"> HOTEL LIST </h1> -->
    <div class="d-flex">
        <div class="container_form d-flex justify-content-center">
            <form class="h-100" method="GET">
                <div class="card p-5 bg-dark text-white h-100 rounded-0">
                    <div class="mb-3">
                        <label for="parking" class="form-label fw-bold">Only hotels with parking</label>
                        <input type="checkbox" value="1" name="parking" id="parking">
                    </div>
                    <div class="mb-3">
                        <h6>Only hotels with vote </h6>
                        <div class="d-flex flex-column text-start">
                            <div>
                                <input class="me-2" type="radio" name="vote" id="vote">
                                <label for="vote" class="form-label fw-bold">1 or more </label>
                            </div>
                            <div>
                                <input class="me-2" type="radio" name="vote2" id="vote2">
                                <label for="vote2" class="form-label fw-bold">2 or more </label>
                            </div>
                            <div>
                                <input class="me-2" type="radio" name="vote3" id="vote3">
                                <label for="vote3" class="form-label fw-bold">3 or more</label>
                            </div>
                            <div>
                                <input class="me-2" type="radio" name="vote4" id="vote4">
                                <label for="vote4" class="form-label fw-bold">4 or more</label>
                            </div>
                            <div>
                                <input class="me-2" type="radio" name="vote5" id="vote5">
                                <label for="vote5" class="form-label fw-bold">5</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 text-center">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="container_card d-flex flex-wrap justify-content-center align-items-center mt-5">
            <h1 class="container-fluid text-center"> HOTEL LIST </h1>

            <?php foreach ($hotels as $hotel): ?>
                <div class="card my_card col-6 col-md-3 rounded-4 p-3 m-3">
                    <?php foreach ($hotel as $key => $value): ?>
                        <span class="fw-bold">
                            <?= $key . ' : ' ?>
                        </span>
                        <span>
                            <?= $value ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- link javascript  -->
    <script src="./assets/js/app.js"></script>
</body>

</html>