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
    $previousLevel = 0;
    var_dump($arResult);
    array_walk($arResult, function ($item) use (&$previousLevel) {
        if ($previousLevel && $previousLevel == $item['DEPTH_LEVEL']) {
            print '</li>';
        }
        if ($previousLevel > $item['DEPTH_LEVEL']) {
            print '</li></ul></li>';
        }
        $class = '';
        if ($item['SELECTED']) {
            $class = ' class="active"';
        }
        $liClass = '';
        if ($item['DEPTH_LEVEL'] == 1) {
            $liClass = '  class="drop-link"';
        }
        if ($previousLevel && $previousLevel < $item['DEPTH_LEVEL']) {
            print '<ul class="dropdown">';
        }
        printf('<li%s>', $liClass);
        printf('<a%s href="%s">%s</a>', $class, $item['LINK'], $item['TEXT']);
        $previousLevel = $item['DEPTH_LEVEL'];
    });
    print '</li>';
    if ($previousLevel == 2) {
        print '</ul></li>';
    }
    ?>
</ul>
