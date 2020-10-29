<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$str[]= FormatDate('d F Y', strtotime($arResult['ACTIVE_FROM'])).' г.';
$str[]= $arResult['NAME'];
if ($arResult['PROPERTIES']['POSITION']['VALUE']) $str[]=$arResult['PROPERTIES']['POSITION']['VALUE'];
if ($arResult['PROPERTIES']['COMPANY']['VALUE']) $str[]=$arResult['PROPERTIES']['COMPANY']['VALUE'];

$str=implode(', ', $str);
$arResult['STR'] =$str;
?>
