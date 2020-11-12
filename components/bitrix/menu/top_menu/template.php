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
if (empty($arResult["ALL_ITEMS"]))
    return;
?>
<ul class="top-menu">
    <li><a href="#">О ВУЗе</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="blog.html">News</a></li>
</ul>
