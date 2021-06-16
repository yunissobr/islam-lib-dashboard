<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مكتبة المسلم ~ تسجيل الدخول</title>

    <!-- Favicon -->
    <!-- <link rel="icon" href="dist/images/favicon.ico" /> -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= URLROOT ?>img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URLROOT ?>img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= URLROOT ?>img/favicon-16x16.png">



    <!--Plugin CSS-->
    <link href="<?= URLROOT ?>dist/css/plugins.min.css" rel="stylesheet">

    <!--main Css-->
    <link href="<?= URLROOT ?>dist/css/main.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">

    <style>
    a,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    div {
        font-family: 'Cairo', sans-serif;
    }
    </style>
</head>

<body class="rtl">

    <!-- main-content-->
    <div class="wrapper">
        <div class="w-100">
            <div class="row d-flex justify-content-center  pt-5 mt-5">
                <div class="col-12 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-0 redial-font-weight-400">تسجيل الدخول</h4>
                        </div>
                        <div class="redial-divider"></div>
                        <div class="card-body py-4">
                            <?= isset($data['show_alert']) ? '<div class="alert alert-danger" role="alert"> ' . $data['show_alert'] . '</div>'  : '' ?>

                            <form method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="البريد الإلكتروني" name="email"
                                        required value="<?= isset($data['email']) ? $data['email'] : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="كلمه السر" name="password"
                                        required />
                                </div>
                                <button type="submit" name="login"
                                    class="btn btn-primary btn-md redial-rounded-circle-50 btn-block">تسجيل
                                    الدخول</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End main-content-->

    <!-- jQuery -->
    <script src="<?= URLROOT ?>dist/js/plugins.min.js"></script>
    <script src="<?= URLROOT ?>dist/js/common.js"></script>
</body>

</html>