
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SIMUP</title>
    <link rel="stylesheet" type="text/css" href="page1.css">
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="standar.css" rel="stylesheet" type="text/css">
    <!-- calendar -->
    <link href="kalender/calendar.css" rel="stylesheet" type="text/css" media="screen">
    <script src="kalender/calendar.js"></script>
    <!-- Favicon -->
    <link rel="icon" href="lokasi_favicon_anda.ico" type="image/x-icon">
</head>

<body>
    <style>
        body {
            position: relative;
            background-color: #1A181A;
        }

        .nov {
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            margin-left: 10px;
            margin-top: -13px;
        }

        .navbar-default {
            background-color: #181A18;
            border-color: #080808;
        }

        .navbar-default .navbar-brand {
            color: white;
            display: flex; /* Mengatur elemen ke dalam baris */
            align-items: center; /* Posisikan elemen secara vertikal */
        }

        .navbar-default .navbar-brand img {
            margin-right: 10px; /* Jarak antara logo dan teks */
        }

        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: white;
        }

        .navbar-default .navbar-toggle {
            border-color: #080808;
        }

        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
            background-color: #080808;
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: white;
        }

        .navbar-default .navbar-nav>li>a {
            color: white;
        }

        .navbar-default .navbar-nav>li>a:hover,
        .navbar-default .navbar-nav>li>a:focus {
            color: white;
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:hover,
        .navbar-default .navbar-nav>.open>a:focus {
            background-color: #080808;
            color: white;
        }

        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-in-from-left {
            animation: slideInFromLeft 1s ease forwards;
        }

        .navbar-right {
            margin-right: 10px;
        }

        /* Penyesuaian gaya untuk navbar head */
        .navbar-head {
            padding: 0px 0;
        }

        /* Penyesuaian gaya untuk navbar user */
        .navbar-user {
            padding-bottom: 20px;
            text-align: right;
        }
    </style>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Navbar Logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="content.php">
                    <img src="images/weneed.png" width="70px">
                    <span class="nov">APLIKASI PENDATAAN USULAN PENELITIAN</span>
                </a>
            </div>
            <!-- /.navbar-header -->

            <!-- Navbar Head -->
            <div class="navbar-head">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Navbar Toggle -->
                    <li>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-head -->

            <!-- Navbar User -->
            <div class="navbar-user">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#">
                                    <font size=1><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['Email']; ?></font>
                                </a>
                            </li>
                            <li>
                                <a href="listsetting.php">
                                    <font size=1><i class="fa fa-gear fa-fw"></i> Settings</font>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-user -->

            <!-- /.navbar-top-links -->
        </nav>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>

</html>
```