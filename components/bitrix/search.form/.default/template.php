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
<form class="search_bar" action="<?= $arParams["PAGE"] ?>" method="get">
    <div class="container">
        <input type="search" class="search-input" name="q" placeholder="What are you looking for...">
        <button type="submit" class="submit">
            <i class="material-icons">search</i>
        </button>
    </div>
</form>