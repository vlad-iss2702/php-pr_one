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
        /*Здесь выведу массив который сам для себя усложнил(это я для практики)*/
        $imgPatchSmall = "img/demo/gallery/thumb/";
        $imgPatchBig = "img/demo/gallery/";
        $arrayImgOne = array(
            [
                'img_small_patch' => $imgPatchBig,
                'img_big_patch' => $imgPatchSmall,
                'img_small_name' => '21.jpg',
                'img_big_name' => '21.jpg',
                'img_title' => 'image 1'                
            ],
            [
                'img_small_patch' => $imgPatchBig,
                'img_big_patch' => $imgPatchSmall,
                'img_small_name' => '22.jpg',
                'img_big_name' => '22.jpg',
                'img_title' => 'image 2'                
            ],
            [
                'img_small_patch' => $imgPatchBig,
                'img_big_patch' => $imgPatchSmall,
                'img_small_name' => '23.jpg',
                'img_big_name' => '23.jpg',
                'img_title' => 'image 3'                
            ],
            [
                'img_small_patch' => $imgPatchBig,
                'img_big_patch' => $imgPatchSmall,
                'img_small_name' => '24.jpg',
                'img_big_name' => '24.jpg',
                'img_title' => 'image 4'                
            ],
            [
                'img_small_patch' => $imgPatchBig,
                'img_big_patch' => $imgPatchSmall,
                'img_small_name' => '25.jpg',
                'img_big_name' => '25.jpg',
                'img_title' => 'image 5'                
            ],
            [
                'img_small_patch' => $imgPatchBig,
                'img_big_patch' => $imgPatchSmall,
                'img_small_name' => '26.jpg',
                'img_big_name' => '26.jpg',
                'img_title' => 'image 6'                
            ]           
        );

        /*Здесь выведу упрощённый массив*/

        $arrayImgTwo = array(
            [
                'img_thumb_src' => 'img/demo/gallery/thumb/21.jpg',
                'img_src' => 'img/demo/gallery/21.jpg',
                'img_title' => 'image 1',                
            ],
            [
                'img_thumb_src' => 'img/demo/gallery/thumb/22.jpg',
                'img_src' => 'img/demo/gallery/22.jpg',
                'img_title' => 'image 2',                
            ],
            [
                'img_thumb_src' => 'img/demo/gallery/thumb/23.jpg',
                'img_src' => 'img/demo/gallery/23.jpg',
                'img_title' => 'image 3',                
            ],
            [
                'img_thumb_src' => 'img/demo/gallery/thumb/24.jpg',
                'img_src' => 'img/demo/gallery/24.jpg',
                'img_title' => 'image 4',                
            ],
            [
                'img_thumb_src' => 'img/demo/gallery/thumb/25.jpg',
                'img_src' => 'img/demo/gallery/25.jpg',
                'img_title' => 'image 5',                
            ],
            [
                'img_thumb_src' => 'img/demo/gallery/thumb/26.jpg',
                'img_src' => 'img/demo/gallery/26.jpg',
                'img_title' => 'image 6',                
            ],          
        );
    ?>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Сформируйте массив данных и выведите полностью альбом (выполнил с более расширенным массивом).</p>
                            </div>
                            <div id="js-lightgallery">
                                <?foreach($arrayImgOne as $item):?>
                                    <a class="" href="<?= $item['img_small_patch']; ?><?= $item['img_small_name']; ?>">
                                        <img class="img-responsive" src="<?= $item['img_big_patch']; ?><?= $item['img_big_name']; ?>" alt="<?= $item['img_title']; ?>">
                                    </a> 
                                <?endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Сформируйте массив данных и выведите полностью альбом (выполнил с более обычным массивом).</p>
                            </div>
                            <div id="js-lightgallery2">
                                <?foreach($arrayImgTwo as $item):?>
                                    <a class="" href="<?= $item['img_thumb_src']; ?>">
                                        <img class="img-responsive" src="<?= $item['img_src']; ?>" alt="<?= $item['img_title']; ?>">
                                    </a> 
                                <?endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script src="js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
            //accordion filter
            initApp.listFilter($('#js_list_accordion'), $('#js_list_accordion_filter'));
            // nested list filter
            initApp.listFilter($('#js_nested_list'), $('#js_nested_list_filter'));
            //init navigation 
            initApp.buildNavigation($('#js_nested_list'));

            $(document).ready(function()
            {


                var $initScope = $('#js-lightgallery, #js-lightgallery2');
                if ($initScope.length)
                {
                    $initScope.justifiedGallery(
                    {
                        border: -1,
                        rowHeight: 150,
                        margins: 8,
                        waitThumbnailsLoad: true,
                        randomize: false,
                    }).on('jg.complete', function()
                    {
                        $initScope.lightGallery(
                        {
                            thumbnail: true,
                            animateThumb: true,
                            showThumbByDefault: true,
                        });
                    });
                };
                $initScope.on('onAfterOpen.lg', function(event)
                {
                    $('body').addClass("overflow-hidden");
                });
                $initScope.on('onCloseAfter.lg', function(event)
                {
                    $('body').removeClass("overflow-hidden");
                });
            });

        </script>
    </body>
</html>
