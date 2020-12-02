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
$counter = 0;
?>
    <table class="table table-striped">
    <thead>
    <th scope="col">№ п/п</th>
    <th scope="col">Наименование</th>
    <th scope="col"> Адрес</th>
    <th scope="col">Телефон</th>
    </thead>
    <tbody>
<?php
if ($arResult["ITEMS"]) {
    ?>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <tr>
            <th scope="row"><?= ++$counter; ?></th>
            <td><?= $arItem['NAME'] ?></td>
            <td><?= $arItem['PROPERTY_ADDRESS_VALUE'] ?></td>
            <td><?= $arItem['PREVIEW_TEXT'] ?></td>
        </tr>
    <? endforeach; ?>
    </tbody>
    </table>
    <?php
}
?>