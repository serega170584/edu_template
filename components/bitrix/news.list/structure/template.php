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
global $arrFilter;
?>
<h1>Структура</h1>
<div class="blog-box">
    <?php
    if ($arResult["ITEMS"]) {
        ?>
        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?><br/>
        <? endif; ?>
        <ul>
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li>
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
                    <?php
                    $GLOBALS['PROPERTY_FACULTY'] = [
                        'PROPERTY_FACULTY' => $arItem["ID"]
                    ];
                    ?>
                    <? $APPLICATION->IncludeComponent("bitrix:news.list", "departments", array(
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "IBLOCK_TYPE" => 'edu',
                            "IBLOCK_ID" => \CIBlock::GetList([
                                'ID' => 'ASC'
                            ], [
                                'TYPE' => 'edu',
                                'CODE' => 'DEPARTMENTS',
                            ])->Fetch()['ID'],
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "DESC",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER2" => "ASC",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "3600",
                            "DISPLAY_TOP_PAGER" => "",
                            "DISPLAY_BOTTOM_PAGER" => "",
                            "FILTER_NAME" => 'PROPERTY_FACULTY',
                            "DETAIL_URL" => '/local/templates/edu_template/main/about/departments/'
                        )
                    ); ?>

                </li>
            <? endforeach; ?>
        </ul>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <? endif; ?>

        <?php
    }
    ?>
</div>
