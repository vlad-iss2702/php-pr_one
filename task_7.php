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
    <?
         $breadcrumbList = [
            [
                "link" => "/",
                "title" => "Главная",
            ],
            [
                "link" => "#",
                "title" => "PHP"
            ],
            [
                "link" => "",
                "title" => "Функции"
            ],
            
        ];
        /*------Честно говоря здесь возникли небольшие сложности я сам не смог сразу понять как можно вывести последний элемент
        но как только ты сказал про условия для ссылок я сразу закрыл твою подсказку и решил сделать так------*/

         /*echo "<pre>";
         echo print_r($breadcrumbList);
         echo "</pre>";*/
    ?>
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
                            <ol class="breadcrumb page-breadcrumb">
                                <?foreach($breadcrumbList as $item):?>
                                    <? if($item['link'] != ""): ?>
                                        <li class="breadcrumb-item">
                                            <a href="<?= $item['link']; ?>">
                                                <?= $item['title']; ?>
                                            </a>
                                        </li>
                                    <? else: ?>
                                        <li class="breadcrumb-item active">
                                            <?= $item['title']; ?>                                          
                                        </li> 
                                    <? endif;?>
                                <?endforeach;?> 
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

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
