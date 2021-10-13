<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['submit'])) {
        $msg = "Information Updated Successfully";
    }

    ?>

    <!doctype html>
    <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">

        <title>Edit Admin</title>

        <!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Sandstone Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap Datatables -->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <!-- Bootstrap social button library -->
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <!-- Bootstrap file input -->
        <link rel="stylesheet" href="css/fileinput.min.css">
        <!-- Awesome Bootstrap checkbox -->
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <!-- Admin Stye -->
        <link rel="stylesheet" href="css/style.css">

        <script type="text/javascript" src="../vendor/countries.js"></script>
        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #dd3d36;
                color: #fff;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            .succWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #5cb85c;
                color: #fff;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }
        </style>
    </head>

    <body>
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-title">kalibratie App</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Position / Device</div>
                                    <?php if ($error) { ?>
                                        <div class="errorWrap"><strong>ERROR</strong>
                                        :<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?>
                                        <div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
                                        </div><?php } ?>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Plant</label>
                                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="Jansen Processen" value="">
                                                </form>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Description</label>
                                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="Temperatuurmeter hete loog" value="">
                                                </form>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Work order Number</label>
                                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="50008784" value="">
                                                </form>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Location</label>
                                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="1e verdieping links achterin" value="">
                                                </form>
                                            </div>


                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Device ID (TAG)</label>
                                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="5235-5634-TT" value="">
                                                </form>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Serial Number</label>
                                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="FA06C119000" value="">
                                                </form>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Manufacturer</label>
                                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="Endress + Hauser" value="">
                                                </form>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                            </div>

                                        </div>
                                    </div>
                                </div>

<!--                                -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">Function</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Name</label>
                                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                        <option selected>Select name</option>
                                                        <option value="Instrument">Instrument</option>
                                                        <option value="Loop">Loop</option>
                                                        <option value="Complete-Loop">Complete Loop</option>
                                                    </select>
                                                </form>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Range</label>
                                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="Temperatuurmeter hete loog" value="">
                                                </form>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <form class="form-floating">
                                                    <label for="floatingInputValue">Manufacturer</label>
                                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="50008784" value="">
                                                </form>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                $('.succWrap').slideUp("slow");
            }, 3000);
        });
    </script>
    </body>
    </html>
<?php } ?>