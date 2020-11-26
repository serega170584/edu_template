<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Образование");

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
                                    "MAX_LEVEL" => "2",
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
                                <h1>Образование</h1>
                                <h2>Информация о реализуемых уровнях образования</h2>
                                <p>Тег, обрамляющий сведения об реализуемых уровнях образования, должен содержать
                                    специальный атрибут itemprop=«EduLevel»</p>
                                <h2>Информация о формах обучения</h2>
                                <p>
                                    Тег, обрамляющий сведения о формах обучения, должен содержать специальный атрибут
                                    itemprop=«EduForm»
                                </p>
                                <h2>Информация о нормативных сроках обучения</h2>
                                <p>Тег, обрамляющий сведения о нормативных сроках обучения, должен содержать специальный
                                    атрибут itemprop= «LearningTerm»</p>
                                <h2>Информация о сроке действия государственной аккредитации образовательной программы
                                    (при наличии государственной аккредитации)</h2>
                                <p>Тег, обрамляющий сведения о сроке действия государственной аккредитации
                                    образовательной программы, должен содержать специальный атрибут itemprop=
                                    «DateEnd»</p>
                                <?php $APPLICATION->IncludeComponent("bitrix:news.list", "professions", array(
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "IBLOCK_TYPE" => 'edu',
                                        "IBLOCK_ID" => \CIBlock::GetList([
                                            'ID' => 'ASC'
                                        ], [
                                            'TYPE' => 'edu',
                                            'CODE' => 'PROFESSIONS',
                                        ])->Fetch()['ID'],
                                        "NEWS_COUNT" => "100",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER2" => "ASC",
                                        "CACHE_TYPE" => "A",
                                        "CACHE_TIME" => "3600",
                                        "DISPLAY_TOP_PAGER" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "FIELD_CODE" => [
                                            "PROPERTY_FORM_OF_EDUCATION",
                                            "PROPERTY_PERIOD",
                                            "PROPERTY_ACCREDITATION_PERIOD",
                                            "PROPERTY_LEVEL",
                                            "PROPERTY_CODE",
                                            "PROPERTY_DESCRIPTION",
                                            "PROPERTY_PLAN",
                                            "PROPERTY_ANNOTATIONS",
                                            "PROPERTY_SCHEDULE",
                                            "PROPERTY_METHODOLOGICAL_DOCUMENTS",
                                            "PROPERTY_PRACTICES",
                                            "PROPERTY_BUDGET_COUNT",
                                            "PROPERTY_PAYED_COUNT",
                                            "PROPERTY_PRICE",
                                            "PROPERTY_PREPARATORY_PROFILE",
                                            "PROPERTY_PRINCIPAL_SUBJECTS",
                                            "PROPERTY_LANGUAGES",
                                            "PROPERTY_RESEARCHES",
                                            "PROPERTY_RESULTS",
                                            "PROPERTY_REPLACED_RESULTS",
                                            "PROPERTY_FACULTY",
                                            "PROPERTY_PRELIMINARY_TESTS"
                                        ]
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