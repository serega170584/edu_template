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
    <th scope="col">Шифр и наименование направления (специальности)</th>
    <th scope="col"> Стоимость обучения за один год, тыс. руб.</th>
    <th scope="col">Срок обучения, лет</th>
    </thead>
    <tbody>
<?php
if ($arResult["ITEMS"]) {
    ?>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <tr>
            <th scope="row"><?= ++$counter; ?>></th>
            <td><?= $arItem['PROPERTY_CODE_VALUE'] ?> <?= $arItem['NAME'] ?></td>
            <td><?= $arItem['PROPERTY_PRICE_CODE'] ?></td>
            <td><?= $arItem['PROPERTY_PERIOD_VALUE'] ?></td>
        </tr>
    <? endforeach; ?>
    </tbody>
    </table>
    <?php
}
?>