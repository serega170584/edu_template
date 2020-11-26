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
if ($arResult["ITEMS"]) {
    ?>
    <table class="table table-striped">
        <thead>
        <th scope="col">Программа</th>
        <th scope="col">Обучение</th>
        <th scope="col">Вступительные испытания</th>
        <th scope="col">Количество мест</th>
        </thead>
        <tbody>
        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?><br/>
        <? endif; ?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <tr>
                <th scope="row">
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem['NAME'] ?></a>
                    <?= $arItem['FIELDS']['PROPERTY_FACULTY_VALUE'] ?>
                </th>
                <td><?= $arItem['FIELDS']['PROPERTY_PERIOD_VALUE'] ?></td>
                <td><?= $arItem['FIELDS']['PROPERTY_PRELIMINARY_TESTS_VALUE'] ?></td>
                <td><?= $arItem['FIELDS']['PROPERTY_BUDGET_COUNT_VALUE'] ?>
                    бюджетных/ <?= $arItem['FIELDS']['PROPERTY_PAYED_COUNT_VALUE'] ?> платных
                </td>
            </tr>
        <? endforeach; ?>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <? endif; ?>
        </tbody>
    </table>
    <?php
}
?>