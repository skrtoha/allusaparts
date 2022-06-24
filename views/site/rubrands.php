<?php
//$this->layout = '@app/views/layouts/main_ru';

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $brandInfo array */
/* @var $brand string */

#region Метатеги
$this->context->addUrl = '/brands/' . $brand;
$this->title = $brandInfo['title'];
$this->registerMetaTag(
    ['name' => 'description', 'content' => $brandInfo['description']]
);
$this->registerLinkTag(['rel' => 'canonical', 'href' => 'https://allusaparts.com/brands/' . $brand]);
#endregion

#region Страница
$sanitize_brand_name = strtolower(preg_replace('/[^a-zA-Z0-9]/u', '_', $brand));
$imgPath = $_SERVER['DOCUMENT_ROOT'].'/web/images/brands/'.$sanitize_brand_name.'.jpg';
$imgSrc = '/images/brands/'.$sanitize_brand_name.'.jpg';
?>
<section class="content">
    <div class="container">
        <h1 class="row-title"><?=$brandInfo['h1']?></h1>
        <div class="row color-gray">
            <?if (file_exists($imgPath)){?>
                <img src="<?=$imgSrc?>" alt="<?=$brand?>" class="brand-image" align="left" style="padding: 15px;">
            <?}?>
            <?=$brandInfo['text']?>
        </div>
    </div>
</section>

<?if($brand !='hitachi') {
#region Video
    $video_pages = '';
    if (isset($brandInfo['links'])) {
        $video_pages .= '<div style="text-align: center;">';
        $width_video = "470";
        $height_video = "264";
        $grid_video = "5";
        if (count($brandInfo['links']) == 1) {
            $width_video = "970";
            $height_video = "546";
            $grid_video = "10";
        }
        foreach ($brandInfo['links'] as $item) {
            $video_pages .= '<div class="grid_' . $grid_video . ' box-1"><iframe width="' . $width_video . '" height="' . $height_video . '" src="' . $item . '" title="' . $brand . ' YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
        }
        $video_pages .= '</div>';
    }
    if (strlen($video_pages) > 0) {?>
        <section class="brands">
            <div class="container">        
                <div class="row">
                    <?=$video_pages?>
                </div>
            </div>
        </section>
    <?}
#endregion

#region Imgs
    $img_pages = '';
    $directory = "./images/page/$brand";    // Папка с изображениями
    $allowed_types = array("jpg", "jpeg", "png", "gif");  //разрешеные типы изображений
    $file_parts = array();
    $ext = "";
    $title = "";
    $i = 0;
//пробуем открыть папку
    $dir_handle = @opendir($directory);
    while ($file = readdir($dir_handle))    //поиск по файлам
    {
        if ($file == "." || $file == "..") continue;  //пропустить ссылки на другие папки
        $file_parts = explode(".", $file);          //разделить имя файла и поместить его в массив
        $ext = strtolower(array_pop($file_parts));   //последний элеменет - это расширение


        if (in_array($ext, $allowed_types)) {
            $linkImg = $directory . '/' . $file;
            $linkImg = substr($linkImg, 1, strlen($linkImg) + 1);
            $img_pages .= '<div class="grid_5 box-1"><img src="' . $linkImg . '" style="max-width:470px;max-height: 260px;" alt="' . $brand . '" title="' . $brand . '" class="brand-image"></div>';
            $i++;
        }

    }
    closedir($dir_handle);  //закрыть папку
    if (strlen($img_pages) > 0) {
        echo '
        <section class="brands">
            <div class="container">        
                <div class="row">
                    <div style="text-align: center;">
                    ' . $img_pages . '
                    </div>
                </div>
            </div>
        </section>';
    }
#endregion
}
?>

<?=$this->render('_calculate_parts')?>