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
                    <?= CIBlockElement::GetByID($arItem['PROPERTIES']['FACULTY']['VALUE'])->Fetch()['NAME'] ?>
                </th>
                <td><?= $arItem['PROPERTIES']['PERIOD']['VALUE'] ?></td>
                <td><?php array_map(function ($id) {
                        printf('%s ', CIBlockElement::GetByID($id)->Fetch()['NAME']);
                    }, $arItem['PROPERTIES']['PRELIMINARY_TESTS']['VALUE']) ?></td>
                <td><?= $arItem['PROPERTIES']['BUDGET_COUNT']['VALUE'] ?>
                    бюджетных/ <?= $arItem['PROPERTIES']['PAYED_COUNT']['VALUE'] ?> платных
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