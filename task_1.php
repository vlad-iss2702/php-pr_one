<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <?php
        $myArrayOne = array(
            [
                'title' => 'Privacy',
                'desc' => 'Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns. We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this). We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations. We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.',
                'subtitle' => 'Cookies and other similar technologies',
                'subdesc' => 'We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.'
            ],
            [
                'title' => 'Privacy2',
                'desc' => 'Your privacy 222 is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns. We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this). We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations. We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.',
                'subtitle' => 'Cookies 222 and other similar technologies 2',
                'subdesc' => 'We collect 222 certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.'
            ],
            [
                'title' => 'Privacy3',
                'desc' => 'Your privacy 333 is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns. We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this). We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations. We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.',
                'subtitle' => 'Cookies 333 and other similar technologies 3',
                'subdesc' => 'We collect 333 certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.'
            ]
        );
    ?>
    <div style="display: none">
        <?
            echo '<pre>';
            echo print_r($myArrayOne);
            echo '</pre>';
        ?>
    </div>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?foreach($myArrayOne as $item):?>
                                <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                                    <h2><?= $item['title']; ?></h2>
                                    <p class="mb-g">
                                        <?= $item['desc']; ?>
                                    </p>
                                    <h3><?= $item['subtitle']; ?></h3>
                                    <p>
                                        <?= $item['subdesc']; ?>
                                    </p>
                                </div>
                            <?endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <? /*
            Для честности скажу что отличия от верстки я заметил, то есть первый заголовок и текст отличаются от второго, первый абзац от второго
            я сначала решил сделать два варианта, но потом после выполнение зашел в решение и ты там объяснял что это недочет самой верстки, поэтому
            я решил не менять а оставить всё так же. Оаставляю решение в исходном варианте.





        */?>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
