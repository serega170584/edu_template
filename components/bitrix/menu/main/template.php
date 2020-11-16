<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if (!$arResult)
    return;
var_dump($arResult);
?>
<ul class="navbar-nav mr-auto">
    <?php
    array_walk($arResult, function ($item) {
        printf('<li><a href="%s">%s</a></li>', $item['LINK'], $item['TEXT']);
    });
    ?>
</ul>
