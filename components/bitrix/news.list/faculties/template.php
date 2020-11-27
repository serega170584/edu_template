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
<h1>Факультеты</h1>
<h2>Общая информация</h2>
<p>В 1964 г. Московский государственный педагогический институт иностранных языков стал первым Московским
    государственным педагогическим институтом иностранных языков. Ему также было присвоено имя видного политического
    деятеля Франции – Мориса Тореза. В то время в составе Института было пять факультетов: факультеты английского,
    немецкого, французского языка, переводческий факультет и факультет заочного обучения, выпускники которых, будь
    то преподаватели иностранных языков или переводчики, отличались прекрасным владением двух иностранных языков. В
    1964 г. Московский государственный педагогический институт иностранных языков.</p>
<p>
    отовку в области современной экономической теории, изучают обширный спектр дисциплин математического цикла,
    современные технологии обработки информации, статистику, эконометрику. Фундаментальная подготовка,
    бизнес-планирование, бухгалтерский учет, международные стандарты аудита и финансовой отчётности,
    налогообложение, финансовый менеджмент, банковское и страховое дело и др.
</p>
<div class="blog-box">
    <?php
    if ($arResult["ITEMS"]) {
        ?>
        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?><br/>
        <? endif; ?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <h2><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a></h2>
            <p><? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                    <? echo $arItem["PREVIEW_TEXT"]; ?>
                <? endif; ?></p>
            <a class="button-one" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Подробнее</a>
        <? endforeach; ?>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <? endif; ?>
        <?php
    }
    ?>
</div>
