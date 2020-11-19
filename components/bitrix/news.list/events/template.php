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
<!-- popular-courses-section
                ================================================== -->
<section class="popular-courses-section">
    <div class="container">
        <div class="title-section">
            <div class="left-part">
                <h1>События</h1>
            </div>
            <div class="right-part">
                <a class="button-one" href="#">Все события</a>
            </div>
        </div>
        <div class="popular-courses-box">
            <div class="row">
                <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
                    <?= $arResult["NAV_STRING"] ?><br/>
                <? endif; ?>
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                             alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                             title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">
                                    </a>
                                <? endif; ?>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
                <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                    <br/><?= $arResult["NAV_STRING"] ?>
                <? endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End popular-courses section -->
