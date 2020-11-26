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
?>
<h1><?= $arResult["NAME"] ?></h1>
<p><?= $arResult["DETAIL_TEXT"] ?></p>
<table class="table table-striped">
    <thead>
    <th scope="col">Срок обучения: <?= $arResult['PROPERTIES']['PERIOD']['VALUE'] ?></th>
    <th scope="col">Форма обучения: <?= $arResult['PROPERTIES']['FORM_OF_EDUCATION']['VALUE'] ?></th>
    <th scope="col">Количество мест: <?= $arResult['PROPERTIES']['BUDGET_COUNT']['VALUE'] ?>
        бюджетных, <?= $arResult['PROPERTIES']['PAYED_COUNT']['VALUE'] ?> платных
    </th>
    <th scope="col">Стоимость платных мест: <?= $arResult['PROPERTIES']['PRICE']['VALUE'] ?> </th>
    </thead>
    <tbody>
    <tr>
        <th scope="row">
            Профили подготовки: <?= $arResult['PROPERTIES']['PREPARATORY_PROFILE']['VALUE'] ?>
        </th>
        <td>Ключевые дисциплины: <?= $arResult['PROPERTIES']['PRINCIPAL_SUBJECTS']['VALUE'] ?></td>
        <td>Вступительные испытания: <?php array_map(function ($id) {
                printf('%s ', CIBlockElement::GetByID($id)->Fetch()['NAME']);
            }, $arResult['PROPERTIES']['PRELIMINARY_TESTS']['VALUE']) ?></td>
        <td>
        </td>
    </tr>
    <tr>
        <th scope="row" colspan="4">
            <?php
            $properties = [
                "PLAN",
                "ANNOTATIONS",
                "SCHEDULE",
                "METHODOLOGICAL_DOCUMENTS",
                "PRACTICES",
                "RESEARCHES",
                "RESULTS",
                "REPLACED_RESULTS"
            ];
            array_map(function ($code) use ($arResult) {
                $path = CFile::GetPath($arResult["PROPERTIES"][$code]["VALUE"]);
                printf('<a href="%s" target="_blank">%s</a><br>', $path, basename($path));
            }, $properties);
            ?>
        </th>
    </tr>
    </tbody>
</table>