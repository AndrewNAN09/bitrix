<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
$date= FormatDate('d F Y', strtotime($arItem['ACTIVE_FROM']));
$str = $arResult['NAME']. ' , ' . $date;
if($arResult['PROPERTIES']['POSITION']['VALUE']) $str.= 'г. , '.$arResult['PROPERTIES']['POSITION']['VALUE'];
if($arResult['PROPERTIES']['COMPANY']['VALUE']) $str .= ' , '.$arResult['PROPERTIES']['COMPANY']['VALUE'];

if(isset($arResult['DETAIL_PICTURE']['SRC'])){
    $src = $arResult['DETAIL_PICTURE']['SRC'];
}else{
    $src = SITE_TEMPLATE_PATH .'/img/rew/no_photo.jpg';
}
?>

<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?=$arResult['~DETAIL_TEXT']?>
        </div>
        <div class="review-autor">
            <?=$str?>
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap"><img src="<?=$src?>" alt="img"></div>
</div>
<? if (is_array($arResult['PROPERTIES']['DOCUMENTS']['VALUE'])):?>
<div class="exam-review-doc">
    <p>Документы:</p>
    <? foreach ( $arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE'] as $fil):
    /*    debug($fil);*/?>
    <div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png" ><a href="<?=$fil['SRC']?>" download><?=$fil['ORIGINAL_NAME']?></a></div>
 <?endforeach;?>
 </div>
<?php endif;?>
<hr>
<a href="<?=$arResult[LIST_PAGE_URL]?>" class="review-block_back_link"> &larr; К списку отзывов</a>