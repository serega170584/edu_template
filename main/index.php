<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Title");
?>
<? $APPLICATION->IncludeComponent("bitrix:news.list", "list", array(
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "IBLOCK_TYPE" => 'edu',
        "IBLOCK_ID" => \CIBlock::GetList([
            'ID' => 'ASC'
        ], [
            'TYPE' => 'edu',
            'CODE' => 'SLIDER',
        ])->Fetch()['ID'],
        "NEWS_COUNT" => "4",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "DISPLAY_TOP_PAGER" => "",
        "DISPLAY_BOTTOM_PAGER" => "",
    )
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>