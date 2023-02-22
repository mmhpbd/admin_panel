<?php
    session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <section>
        <nav class="navbar header">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./ZEDX EYE.png" alt="Bootstrap" width="150">
                </a>
                <button name="logout"><i class="fa-solid fa-right-from-bracket"></i></button>
            </div>
        </nav>
    </section>
    <section class="fullybody">
        <div class="sidebarmain">

            <ul>
                <li class="sidebar"><a href="#">
                        <div class="itemside">
                            <i class="fa-solid fa-gauge"></i>
                            <h3>DESHBOARD</h3>
                        </div>
                    </a></li>
                <li class="sidebar"><a href="#">
                        <div class="itemside">
                            <i class="fa-solid fa-paper-plane"></i>
                            <h3>GET STARTED</h3>
                        </div>
                    </a></li>
                <li class="sidebar"><a href="#">
                        <div class="itemside">
                            <i class="fa-brands fa-squarespace"></i>
                            <h3>GET FREE SCAN</h3>
                        </div>
                    </a></li>
                <li class="sidebar"><a href="#">
                        <div class="itemside">
                            <i class="fa-solid fa-handshake"></i>
                            <h3>GET QOUTS</h3>
                        </div>
                    </a></li>
                <li class="sidebar"><a href="#">
                        <div class="itemside">
                            <i class="fa-solid fa-link"></i>
                            <h3>CONTACT</h3>
                        </div>
                    </a></li>
            </ul>
        </div>
        <div class="partofdesh">
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="card1">
                            <a href="#">
                                <i class="fa-solid fa-gauge"></i>
                                <h3>DESHBOARD</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="card">
                            <a href="#">
                                <i class="fa-solid fa-handshake"></i>
                                <h3>GET QOUTS</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="card1">
                            <a href="#">
                                <i class="fa-solid fa-handshake"></i>
                                <h3>GET QOUTS</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="card">
                            <a href="#">
                                <i class="fa-solid fa-link"></i>
                                <h3>CONTACT</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>



<?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        navber("localtion: admin_login.php");
    }
?>


</body>

</html>