<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
die('asd');
if ($arResult["ITEMS"]) {
    ?>
    <ul>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
        var_dump($arItem);
        die('asd');
            ?>
            <li><a href="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" target="_blank"><?= $arItem["NAME"] ?></a></li>
        <? endforeach; ?>
    </ul>
    <?php
}
?>
