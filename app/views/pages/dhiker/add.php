<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--Plugin CSS-->
    <link href="<?= URLROOT ?>dist/css/plugins.min.css" rel="stylesheet">

    <!--main Css-->
    <link href="<?= URLROOT ?>dist/css/main.min.css" rel="stylesheet">

    <?php require_once APPROOT . '/views/inc/head.php' ?>
</head>

<body class="rtl">
    <!-- header-->
    <?php require_once APPROOT . '/views/inc/header.php' ?>
    <!-- End header-->

    <!-- Main-content Top bar-->
    <div class="redial-relative mt-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2 align-self-center my-3 my-lg-0">
                    <h6 class="text-uppercase redial-font-weight-700 redial-light mb-0 pl-2">لوحة التحكم</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main-content Top bar-->

    <!-- Main-content-->
    <div class="wrapper">
        <?php require_once APPROOT  . '/views/inc/side_bar.php' ?>
        <div id="content">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card redial-border-light redial-shadow mb-4">
                                <div class="card-body">
                                    <h6 class="header-title pr-3 redial-relative">اضف ذكر جديد</h6>
                                    <form method="post">
                                        <div class="form-group">
                                            <label class="redial-font-weight-600">الذكر</label>
                                            <input type="text" required class="form-control" name="dhiker"
                                                placeholder="الذكر" />
                                        </div>
                                        <div class="form-group">
                                            <label class="redial-font-weight-600">عدد التكرار</label>
                                            <input type="number" required class="form-control" name="repetitions"
                                                value="3" placeholder="عدد التكرار" />
                                        </div>
                                        <div class="form-group">
                                            <label class="redial-font-weight-600">نوع الأذكار</label>
                                            <select class="form-control" name="type">
                                                <option value=<?= MORNING_AZKAR ?>>اذكار الصباح</option>
                                                <option value=<?= AFTERNON_AZKAR ?>>اذكار المساء</option>
                                            </select>
                                        </div>

                                        <div class="redial-divider my-4"></div>
                                        <button type="submit" class="btn btn-primary btn-xs"
                                            name="add_dhiker">اضف</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End main-content-->

    <!-- Top To Bottom-->
    <a href="#" class="scrollup text-center redial-bg-primary redial-rounded-circle-50">
        <h4 class="text-white mb-0"><i class="icofont icofont-long-arrow-up"></i></h4>
    </a>
    <!-- End Top To Bottom-->


    <!-- jQuery -->
    <script src="<?= URLROOT ?>dist/js/plugins.min.js"></script>
    <script src="<?= URLROOT ?>dist/js/common.js"></script>
</body>

</html>