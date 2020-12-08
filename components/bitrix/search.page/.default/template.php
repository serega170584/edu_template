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
?>
<div class="blog-box">
    <?php
    foreach ($arResult['SEARCH'] as $arItem):
        ?>
        <div class="blog-post list-style">
            <div class="post-content">
                <h2><a href="<?= $arItem["URL"] ?>"><?= $arItem["TITLE"] ?></a></h2>
            </div>
        </div>
    <?php
    endforeach;
    ?>
</div>
