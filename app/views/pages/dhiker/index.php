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
                            <div class="card redial-border-light redial-shadow">
                                <div class="card-body">
                                    <h6 class="header-title pr-3 redial-relative">
                                        <?= (@$_GET['type'] == MORNING_AZKAR ? 'اذكار الصباح' :  'اذكار المساء') ?>
                                    </h6>
                                    <table class="table table-striped table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>الرقم</th>
                                                <th>الاذكار</th>
                                                <th>عدد اتكرار</th>
                                                <th> </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $index = 0 ?>
                                            <?php foreach ($data['adhkar'] as $dhiker) : ?>
                                            <?php $index++ ?>
                                            <tr>
                                                <td><?= $index ?></td>
                                                <td><?= $dhiker->dhiker ?></td>
                                                <td><?= $dhiker->repetitions ?></td>
                                                <td>
                                                    <a href="<?= URLROOT . 'pages/adhkar/edit&dhiker_id=' . $dhiker->id ?>"
                                                        type="button" class="btn btn-primary">تعديل</a>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#model<?= $dhiker->id ?>">حذف</button>
                                                </td>

                                            </tr>
                                            <div class="modal fade" id="model<?= $dhiker->id ?>" tabindex="-1"
                                                role="dialog" aria-labelledby="smallmodel" aria-hidden="true">
                                                <div class="modal-dialog  modal-md" role="document">
                                                    <div class="modal-content redial-border-light">
                                                        <div class="modal-header redial-border-light">
                                                            <h5 class="modal-title pt-2" id="exampleModalLabel">تأكيد
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>هل تريد حذف: <?= '<b>' . $dhiker->dhiker . '</b>' ?>
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer redial-border-light">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">الغاء</button>
                                                            <a href="<?= URLROOT . 'pages/adhkar/del&dhiker_id=' . $dhiker->id ?>"
                                                                class="btn btn-danger">حذف</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
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