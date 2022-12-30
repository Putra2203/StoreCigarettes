<!DOCTYPE html>
    <html lang="en">
        <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowerStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        input[type=text],
        select {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 100%;
        background-color: deepskyblue;
        color: black;
        padding: 14px 20px;
        margin: 8px 0px;
        display: inline-block;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        textarea {
        width: 300px;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: aliceblue;
        font-size: 16px;
        resize: none;
        text-align: left;
        }

        #tamu {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #tamu td,
        #tamu th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #tamu tr:nth-child(even) {
        background-color: aliceblue;
        }
        #tamu tr:hover {
        background-color: antiquewhite;
        }

        #tamu tr {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: azure;
        color: black;
        }
    </style>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="img/smoking-svgrepo-com.svg" alt="image" width="50">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
              <a class="nav-link" href="order.html">Order</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="buku_tamu.php">Buku Tamu</a>
            </li>
        </ul>
    </div>
</div>
</nav>

<?php include "koneksi.php"; ?>