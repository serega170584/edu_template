<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
    return "";

$strReturn = '<ul class="page-depth">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $strReturn .= sprintf('<li><a href="%s">%s</a></li>', $arResult[$index]["LINK"], $title);
}
$strReturn .= '</ul>';

return $strReturn;
