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
<div class="blog-box">
    <div class="blog-post single-post">
        <div class="post-content">
            <h1><? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
                    <span class="news-date-time"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
                <? endif; ?></h1>
            <? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
                <span class="post-meta date"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
            <? endif; ?>
        </div>
        <a href="<?= $arResult["DETAIL_PAGE_URL"] ?>"><? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
                <img
                        src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                        alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                />
            <? endif ?></a>
        <div class="post-content">
            <? if ($arResult["DETAIL_TEXT"] <> ''): ?>
                <? echo $arResult["DETAIL_TEXT"]; ?>
            <? else: ?>
                <? echo $arResult["PREVIEW_TEXT"]; ?>
            <? endif ?>
        </div>
    </div>
</div>