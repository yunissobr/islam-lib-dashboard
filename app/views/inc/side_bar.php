<nav id="sidebar" class="card redial-border-light px-2">
    <div class="sidebar-scrollarea">
        <ul class="metismenu list-unstyled mb-0 px-0" id="menu">
            <li><a href="index.html"><i class="fa fa-dashboard pl-1"></i> الرئيسية</a></li>
            <li>
                <!-- class="active" -->
                <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i
                        class="icofont icofont-shopping-cart pl-1"></i> التسبيحات</a>
                <ul class="collapse list-unstyled">
                    <li><a href="<?= URLROOT . 'pages/tasbeeh/add' ?>">اضف تسبيح</a></li>
                    <li><a href="<?= URLROOT . 'pages/tasbeeh/' ?>">التسبيحات</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i
                        class="icofont icofont-email pl-1"></i> مقالات</a>
                <ul class="collapse list-unstyled">
                    <li><a href="<?= URLROOT . 'pages/articles/add' ?>">اضف مقال</a></li>
                    <li><a href="<?= URLROOT . 'pages/articles/&type=' . JOMOAA ?>">خطب الجمعة</a></li>
                    <li><a href="<?= URLROOT . 'pages/articles/&type=' . TAFSSIR ?>">تفسير الاحلام</a></li>
                    <li><a href="<?= URLROOT . 'pages/articles/&type=' . ROQIA ?>">الرقية الشرعية</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i
                        class="icofont icofont-pie pl-1"></i> اذكار الصباح والمساء</a>
                <ul class="collapse list-unstyled">
                    <li><a href="<?= URLROOT . 'pages/adhkar/add' ?>">اضف ذكر جديد</a></li>
                    <li><a href="<?= URLROOT . 'pages/adhkar/&type=' . MORNING_AZKAR ?>">اذكار الصباح</a></li>
                    <li><a href="<?= URLROOT . 'pages/adhkar/&type=' . AFTERNON_AZKAR ?>">اذكار المساء</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i
                        class="icofont icofont-file pl-1"></i> تعليم الصلاة </a>
                <ul class="collapse list-unstyled">
                    <li><a href="<?= URLROOT . 'pages/assets/add' ?>">اضف جديد</a></li>
                    <li><a href="<?= URLROOT . 'pages/assets/&type=' . VIDEOS ?>">فيديوهات</a></li>
                    <li><a href="<?= URLROOT . 'pages/assets/&type=' . IMAGES ?>">صور</a></li>
                    <li><a href="<?= URLROOT . 'pages/assets/&type=' . SOUNDS ?>">اصوات</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>