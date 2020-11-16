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
?>
<ul class="navbar-nav mr-auto">
    <?php
    var_dump($arResult);
    array_walk($arResult, function ($item) {
        $class = '';
        if ($item['SELECTED']) {
            $class = ' class="active"';
        }
        print '<li class="drop-link">';
        printf('<a%s href="%s">%s</a>', $class, $item['LINK'], $item['TEXT']);
        print '</li>';
    });
    ?>
</ul>
