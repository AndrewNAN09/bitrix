<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if(isset($arResult['DETAIL_PICTURE']['SRC']))
{
    $src = $arResult['DETAIL_PICTURE']['SRC'];
}
else
    {
    $src = SITE_TEMPLATE_PATH .'/img/rew/no_photo.jpg';
}
?>
<div class="review-block">
    <div class="review-text">
        <? if(!empty($arResult['DETAIL_TEXT'])):?>
            <div class="review-text-cont">
                <?=$arResult['DETAIL_TEXT']?>
            </div>
        <? endif; ?>
        <div class="review-autor">
            <?=$arResult['STR']?>
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap"><img src="<?=$src?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>" title="<?=$arResult['DETAIL_PICTURE']['TITLE']?>"></div>
</div>
<? if (is_array($arResult['PROPERTIES']['DOCUMENTS']['VALUE'])):?>
<div class="exam-review-doc">
    <p><?=GetMessage("DOC")?></p>
    <? foreach ( $arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE'] as $fil):?>
    <div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png" ><a href="<?=$fil['SRC']?>" title="<?=$fil['ORIGINAL_NAME']?>" download><?=$fil['ORIGINAL_NAME']?></a></div>
 <?endforeach;?>
 </div>
<?php endif;?>
<hr>
<a href="<?=$arResult[LIST_PAGE_URL]?>" tatle="<?=$arResult['IBLOCK']['NAME']?>" class="review-block_back_link"> &larr; <?=GetMessage("REW")?></a>