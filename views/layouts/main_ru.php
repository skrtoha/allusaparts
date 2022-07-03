<?php

/* @var $content string */
/* @var $this \yii\web\View */
/** @var $brand \app\models\AllusapartsMenu */
/** @var $menu AllusapartsMenu */

use app\assets\MyClassAsset;
use app\models\AllusapartsMenu;
use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;

//AppAsset::register($this);

/*....................*/
MyClassAsset::register($this);

$brandList = AllusapartsMenu::getMenu();

foreach ($brandList as $brand) {
    $li_brand .= '<li><a href="'.$brand->url.'">'.$brand->name.'</a></li>';
}
if (User::isAdmin()){
    $li_brand .= "<li><a href='/content/add-brand'>Добавить</a>";
}

$mainMenu = AllusapartsMenu::getMenu();
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
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(89339147, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/89339147" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
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
                <a href="#calc" class="calc-link go_to">Расценить запчасть</a>
                <div class="fright">
                    <div class="block-1">
                        <div class="adress-block">
                            <img src="/images/flag_ru.svg" alt="adress-img">
                            <div class="adress-info">
                                <p class="info"><span><i class="fa fa-map-marker"></i> Офис в России:</span> <a href="tel:+74994502544" class="phone-link">+7 499 450-25-44</a></p>
                                <p class="adress">Москва Киевское ш. БП "Румянцево"</p>
                            </div>
                        </div>
                        <div class="adress-block">
                            <img src="/images/flag_en.svg" alt="adress-img">
                            <div class="adress-info">
                                <p class="info"><span><i class="fa fa-map-marker"></i> Офис в США:</span> <a href="tel:17328935295" class="phone-link">1-732-8935295</a></p>
                                <p class="adress">3556 Kennedy rd South Plainfield NJ 07080</p>
                            </div>
                        </div>
                    </div>
                    <div class="block-1">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="/">Главная</a></li>
                                <?foreach($mainMenu as $id => $value){?>
                                    <li>
                                        <a href="<?=$value['url'] ?: ''?>"><?=$value['name']?></a>
                                        <?if (!empty($value['childs'])){?>
                                            <ul>
                                                <?foreach($value['childs'] as $v){?>
                                                    <li><a href="<?=$v['url']?>"><?=$v['name']?></a></li>
                                                <?}?>
                                            </ul>
                                        <?}?>
                                    </li>
                                <?}?>
                                <?if (User::isAdmin()){?>
                                    <a id="menu_edit" href="<?=Url::to(['/menu/index'])?>">Изменить</a>
                                <?}?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?//=$this->render('/common/_edit_content')?>

<?= $content ?>

<?=$this->render('/common/_url_content')?>

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
                            <p class="adress">Москва Киевское ш. БП "Румянцево"</p>
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
        <div class="modal-title">Запрос на расценку отправлен</div>
        <div class="modal-subtitle">Мы свяжемся с Вами в ближайшее время</div>
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
