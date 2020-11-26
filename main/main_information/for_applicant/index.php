<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Абитуриенту");

$by = 'ID';
$order = 'ASC';
?>
    <!-- page-banner-section
                ================================================== -->
    <section class="page-banner-section">
        <div class="container">
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
                            <?php $APPLICATION->IncludeComponent("bitrix:menu", "left", array(
                                    "ROOT_MENU_TYPE" => "left",
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "Y",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => ""
                                )
                            ); ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="blog-box">
                        <div class="blog-post">
                            <div class="post-content">
                                <?php $APPLICATION->IncludeComponent("bitrix:news", "programs", array(
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "IBLOCK_TYPE" => 'edu',
                                        "IBLOCK_ID" => \CIBlock::GetList([
                                            'ID' => 'ASC'
                                        ], [
                                            'TYPE' => 'edu',
                                            'CODE' => 'PROFESSIONS',
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
                                        "VARIABLE_ALIASES" => [
                                            "ELEMENT_ID" => "ID"
                                        ],
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "LIST_PROPERTY_CODE" => [
                                            "FACULTY",
                                            "PERIOD",
                                            "PRELIMINARY_TESTS",
                                            "BUDGET_COUNT",
                                            "PAYED_COUNT",
                                            "CODE",
                                            "FORM_OF_EDUCATION",
                                            "PRICE",
                                            "PREPARATORY_PROFILE",
                                            "PRINCIPAL_SUBJECTS",
                                            "PLAN",
                                            "ANNOTATIONS",
                                            "SCHEDULE",
                                            "METHODOLOGICAL_DOCUMENTS",
                                            "PRACTICES",
                                            "RESEARCHES",
                                            "RESULTS",
                                            "REPLACED_RESULTS"
                                        ],
                                    )
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>