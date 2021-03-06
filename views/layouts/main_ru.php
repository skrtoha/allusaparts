<?php

use app\models\UrlContent;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\assets\MyClassAsset;

//AppAsset::register($this);

/*....................*/
MyClassAsset::register($this);

$brands = $this->context->ru_brands;
foreach ($brands as $brand) {
    $li_brand .= '<li><a href="/brands/'.strtolower($brand).'">'.$brand.'</a></li>';
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="48b18dadd3dc1edc" />
    <link rel="alternate" hreflang="x-default" href="https://allusaparts.com<?= $this->context->addUrl ?>" />
    <link rel="alternate" hreflang="en-US" href="https://allusaparts.com/en<?= $this->context->addUrl ?>" />
    <link rel="alternate" hreflang="ru-RU" href="https://allusaparts.com<?= $this->context->addUrl ?>" />

    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/camera.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/superfish.css">


    <?php $this->registerCsrfMetaTags() ?>

    <?php $this->head() ?>

</head>
<body class="page-1">
<?php $this->beginBody() ?>
<!--==============================header=================================-->
<header>
    <div class="container">
        <div class="row">
            <div class="grid_12 clearfix">
                <div class="fleft">
                    <a href="/"><img src="/images/logo.png" alt="Steel and Fabrication Industry"></a>
                    <div class="lang-block">
                        <span class="lang-link">RUS <i class="fa fa-chevron-down"></i></span>
                        <ul>
                            <li><a href="/en/" class="lang-link">ENG</a></li>
                        </ul>
                    </div>
                </div>
                <a href="#calc" class="calc-link go_to">?????????????????? ????????????????</a>
                <div class="fright">
                    <div class="block-1">
                        <div class="adress-block">
                            <img src="/images/flag_ru.svg" alt="adress-img">
                            <div class="adress-info">
                                <p class="info"><span><i class="fa fa-map-marker"></i> ???????? ?? ????????????:</span> <a href="tel:+74994502544" class="phone-link">+7 499 450-25-44</a></p>
                                <p class="adress">???????????? ???????????????? ??. ???? "??????????????????"</p>
                            </div>
                        </div>
                        <div class="adress-block">
                            <img src="/images/flag_en.svg" alt="adress-img">
                            <div class="adress-info">
                                <p class="info"><span><i class="fa fa-map-marker"></i> ???????? ?? ??????:</span> <a href="tel:17328935295" class="phone-link">1-732-8935295</a></p>
                                <p class="adress">3556 Kennedy rd South Plainfield NJ 07080</p>
                            </div>
                        </div>
                    </div>
                    <div class="block-1">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="/">??????????????</a></li>
                                <!--<li class=""><a href="#">Direction</a>
                                    <ul>
                                        <li><a href="/direction/">1</a></li>
                                        <li><a href="/direction/">2</a></li>
                                        <li><a href="/direction/">3</a></li>
                                    </ul>
                                </li>-->
                                <li class=""><a href="#">????????????</a>
                                    <ul>
                                        <?= $li_brand ?>
                                    </ul>
                                </li>
                                <li><a href="/contacts">????????????????</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!--=======content================================-->

<?= $content ?>

<?
$url = str_replace(['&edit=1', '?edit=1'], '', $_SERVER['REQUEST_URI']);
$urlcontentObject = UrlContent::findOne(['url' => $url]);
if (!$urlcontentObject){
    $urlcontentObject = new UrlContent();
    $urlcontentObject->url = $url;
}
$isAvailableEdit = Yii::$app->user->id == 45795 &&
    isset($_GET['edit']) &&
    $_GET['edit'] == 1;
if ($isAvailableEdit){?>
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            language: "ru",
            selector: '.textarea_content',
            height: 300,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>
    <div class="content">
        <section class="container">
            <div class="row">
                <div class="text-form">
                    <?php $form = ActiveForm::begin(['action' => '/site/urlcontent']); ?>
                    <?=$form->field($urlcontentObject, 'url')->hiddenInput();?>
                    <?=$form->field($urlcontentObject, 'before_content')->textarea(['class' => 'textarea_content'])?>
                    <?=$form->field($urlcontentObject, 'content')->textarea(['class' => 'textarea_content'])?>
                    <?=$form->field($urlcontentObject, 'after_content')->textarea(['class' => 'textarea_content'])?>
                    <div class="form-group">
                        <?= Html::submitButton('??????????????????', ['class' => 'btn btn-success']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                    <a href="<?=$_SERVER['HTTP_REFERER']?>">????????????????</a>
                </div>
            </div>
        </section>
    </div>
<?}
else{
    if ($urlcontentObject->content || $urlcontentObject->before_content || $urlcontentObject->after_content){?>
        <div class="content">
            <section class="container">
                <div class="row">
                    <div id="url_content_wrap">
                        <?if ($urlcontentObject->before_content){?>
                            <?=$urlcontentObject->before_content?>
                        <?}?>
                        <?if ($urlcontentObject->content){?>
                            <div id="url_content">
                                <?=$urlcontentObject->content?>
                            </div>
                            <a href="#" id="showUrlContent">????????????????</a>
                        <?}?>
                        <?if ($urlcontentObject->after_content){?>
                            <?=$urlcontentObject->after_content?>
                        <?}?>

                    </div>
                </div>
            </section>
        </div>
    <?}?>
    <?if (Yii::$app->user->id == 45795){
        $href = $_SERVER['REQUEST_URI'];
        if (preg_match('/\?/', $href)) $href .= '&edit=1';
        else $href .= '?edit=1';
        ?>
        <a id="editTags" href="<?=$href?>">Edit tags</a>
    <?}?>
    <script>
        $('#showUrlContent').on('click', function(e){
            e.preventDefault();
            const $th = $(this);
            $th.prev().toggleClass('active_1');
        })
    </script>
<?}?>

<!--=======footer=================================-->

<footer>
    <div class="container">
        <div class="row">
            <div class="grid_12 clearfix">
                <div class="fleft">
                    <a href="#" class="logo"><img src="/images/logo-1.png" alt=""></a>
                    <div class="adress-block">
                        <div class="adress-info">
                            <p class="info"><a href="tel:+74994502544" class="phone-link">+7 499 450-25-44</a></p>
                            <p class="adress">???????????? ???????????????? ??. ???? "??????????????????"</p>
                        </div>
                    </div>
                    <div class="adress-block">
                        <div class="adress-info">
                            <p class="info"><a href="tel:17328935295" class="phone-link">1-732-8935295</a></p>
                            <p class="adress">3556 Kennedy rd South Plainfield NJ 07080</p>
                        </div>
                    </div>
                </div>
                <div class="fright">
                    <div class="copyright">
                        All American Auto Parts, inc &nbsp; &copy; <span id="copyright-year"></span>.
                    </div>
                    <!--{%FOOTER_LINK} -->
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="thanks_modal" class="zoom-anim-dialog mfp-hide modal-form-style thanks_modal">
    <div class="modal-body">
        <div class="modal-title">???????????? ???? ???????????????? ??????????????????</div>
        <div class="modal-subtitle">???? ???????????????? ?? ???????? ?? ?????????????????? ??????????</div>
    </div>
</div>
<!-- scripts -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(61291087, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/61291087" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<script src="/js/jquery.js"></script>
<script src="/js/jquery-migrate-1.2.1.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/script.js"></script>
<script src="/js/jquery.equalheights.js"></script>
<script src="/js/superfish.js"></script>
<script src="/js/jquery.mobilemenu.js"></script>
<script src="/js/camera.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">
<script src="/js/addscripts.js"></script>

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="/js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script src="/js/jquery.ui.totop.js"></script>

<script>
    $(window).load(function () {
        jQuery('#camera_wrap_1').camera({
            height: '43.1%',
            playPause: false,
            time: 8000,
            transPeriod: 1000,
            fx: 'simpleFade',
            loader: 'none',
            minHeight: '150px',
            navigation: false,
            pagination: true,
        });
    });
</script>
<!--[if lt IE 8]>
<div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
             height="42" width="820"
             alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
