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
<!-- home-section
			================================================== -->
<section id="home-section">
    <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper" data-alias="concept1"
         style="background-color:#000000;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
        <div id="rev_slider_202_1" class="rev_slider" data-version="5.1.1RC">
            <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
                <?= $arResult["NAV_STRING"] ?><br/>
            <? endif; ?>
            <?php
            $index = 1;
            if ($arResult["ITEMS"]) {
                ?>
                <ul>
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <!-- SLIDE  -->
                        <li data-index="rs-<?= $index ?>" data-transition="fade" data-slotamount="default"
                            data-easein="default"
                            data-easeout="default" data-masterspeed="default"
                            data-rotate="0" data-saveperformance="off"
                            data-title="unique" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                 alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                                 id="slide-<?= $index ?>-layer-1"
                                 data-x="['left','left','left','left']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['130','130','130','130']"
                                 data-width="['530','530','430','420']"
                                 data-height="330"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                                 data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="500"
                                 data-responsive_offset="on"
                                 style="z-index: 5;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);">
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Woo-TitleLarge tp-resizeme"
                                 id="slide-<?= $index ?>-layer-2"
                                 data-x="['left','left','left','left']"
                                 data-hoffset="['40','40','40','35']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['170','170','170','170']"
                                 data-width="450"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                                 data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="700"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 6; min-width: 370px; max-width: 450px; white-space: normal;text-align:left;">
                                <? echo $arItem["NAME"] ?>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-line-shape tp-resizeme"
                                 id="slide-<?= $index ?>-layer-3"
                                 data-x="['left','left','left','left']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['165','165','165','165']"
                                 data-width="['3','3','3','3']"
                                 data-height="100"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                                 data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="700"
                                 data-responsive_offset="on"
                                 style="z-index: 6;">
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption Woo-Rating tp-resizeme"
                                 id="slide-<?= $index ?>-layer-4"
                                 data-x="['left','left','left','left']"
                                 data-hoffset="['40','40','40','35']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['286','286','286','286']"
                                 data-width="450"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                                 data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="800"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 8; min-width: 370px; max-width: 450px; white-space: normal; text-align:left;">
                                <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                                    <? echo $arItem["PREVIEW_TEXT"]; ?>
                                <? endif; ?>
                            </div>
                        </li>
                        <?php
                        ++$index;
                        ?>
                    <? endforeach; ?>
                </ul>
                <?php
            }
            ?>
            <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                <br/><?= $arResult["NAV_STRING"] ?>
            <? endif; ?>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</section>
<!-- End home section -->