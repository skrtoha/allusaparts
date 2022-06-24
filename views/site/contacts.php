<?php

//$this->layout = '@app/views/layouts/base-uikit-layout';
$this->context->addUrl = '/contacts';
$this->title = 'Contacts';
$this->registerMetaTag(
    ['name' => 'description', 'content' => 'Contacts.']
);
$this->registerLinkTag(['rel' => 'canonical', 'href' => 'https://allusaparts.com/en/contacts']);

?>

