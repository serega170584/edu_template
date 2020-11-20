<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Новости");
?>
    <!-- page-banner-section
                ================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Новости</h1>
            <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "s1"
                )
            ); ?>
        </div>
    </section>
    <!-- End page-banner-section -->

    <!-- blog-section
                ================================================== -->
    <section class="blog-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="category-widget widget">
                            <h2>Categories</h2>
                            <ul class="category-list">
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Campus Life</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Government</a></li>
                                <li><a href="#">Schools</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <?php
                    var_dump(\CIBlock::GetList([
                        'ID' => 'ASC'
                    ], [
                        'TYPE' => 'edu',
                        'CODE' => 'NEWS',
                    ])->Fetch()['ID']);
                    die('asd');
                    ?>
                    <?php $APPLICATION->IncludeComponent("bitrix:news.detail", "", array(
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "IBLOCK_TYPE" => "edu",
                            "IBLOCK_ID" => \CIBlock::GetList([
                                'ID' => 'ASC'
                            ], [
                                'TYPE' => 'edu',
                                'CODE' => 'NEWS',
                            ])->Fetch()['ID'],
                            "ELEMENT_ID" => 1214,
                            "ELEMENT_CODE" => "",
                            "FIELD_CODE" => array("ID"),
                            "PROPERTY_CODE" => array("DESCRIPTION"),
                            "SET_TITLE" => "Y",
                            "SET_CANONICAL_URL" => "Y",
                            "SET_BROWSER_TITLE" => "Y",
                            "BROWSER_TITLE" => "-",
                            "SET_META_KEYWORDS" => "Y",
                            "META_KEYWORDS" => "-",
                            "SET_META_DESCRIPTION" => "Y",
                            "META_DESCRIPTION" => "-",
                            "SET_STATUS_404" => "Y",
                            "SET_LAST_MODIFIED" => "Y",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "ADD_ELEMENT_CHAIN" => "N",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "3600",
                            "CACHE_GROUPS" => "Y",
                        )
                    ); ?>
                </div>

            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>