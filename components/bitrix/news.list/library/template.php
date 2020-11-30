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
<h1>Библиотека</h1>
<div class="blog-box">
    <?php
    if ($arResult["ITEMS"]) {
        ?>
        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?><br/>
        <? endif; ?>
        <table class="table table-striped">
            <thead>
            <th scope="col">Режим работы</th>
            <th scope="col">Телефон</th>
            </thead>
            <tbody>
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <tr>
                    <td scope="row" colspan="2"><?= $arItem["NAME"] ?></td>
                </tr>
            <tr>
                <td scope="row"><?= $arItem["DETAIL_TEXT"]; ?></td>
                <td scope="row"><?= $arItem["PREVIEW_TEXT"]; ?></td>
            </tr>
            <? endforeach; ?>
        </table>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <? endif; ?>
        <?php
    }
    ?>
</div>
