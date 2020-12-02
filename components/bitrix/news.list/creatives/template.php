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
<?php
if ($arResult["ITEMS"]) {
    ?>
    <table class="table table-striped">
        <thead>
        <th scope="col">№ п/п</th>
        <th scope="col">Коллективы</th>
        <th scope="col"> Руководители коллектива</th>
        <th scope="col">Расписание</th>
        <th scope="col">Время</th>
        <th scope="col">Место</th>
        </thead>
        <tbody>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <tr>
                <th scope="row"><?= ++$counter; ?></th>
                <td><?= $arItem['NAME'] ?></td>
                <td><?= $arItem['PROPERTY_CREATIVE_LEADERSHIP_VALUE'] ?></td>
                <td><?= $arItem['PROPERTY_TIMETABLE_VALUE'] ?></td>
                <td><?= $arItem['PROPERTY_TIME_VALUE'] ?></td>
                <td><?= $arItem['PROPERTY_PLACE_VALUE'] ?></td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
    <?php
}
?>