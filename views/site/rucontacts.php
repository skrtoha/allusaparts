<?php

//$this->layout = '@app/views/layouts/base-uikit-layout';
$this->context->addUrl = '/contacts';
$this->title = 'Контакты';
$this->registerMetaTag(
    ['name' => 'description', 'content' => 'Контакты.']
);
$this->registerLinkTag(['rel' => 'canonical', 'href' => 'https://allusaparts.com/contacts']);

?>
<section class="footer content">
    <div class="container">
        <div class="row">
            <div class="grid_12 clearfix">
                <div class="fleft">
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
            </div>
        </div>
    </div>
</section>
