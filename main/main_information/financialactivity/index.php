<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Финансово-хозяйственная деятельность");

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
                                <h1>Финансово-хозяйственная деятельность</h1>
                                <h2>Информация об объёме образовательной деятельности, финансовое обеспечение которой
                                    осуществляется за счёт бюджетных ассигнований федерального бюджета, бюджетов
                                    субъектов
                                    Российской Федерации, местных бюджетов, по договорам об образовании за счёт средств
                                    физических и (или) юридических лиц
                                </h2>
                                <p>Тег, обрамляющий группу сведений об объёме образовательной деятельности, финансовое
                                    обеспечение которой осуществляется за счёт бюджетных ассигнований федерального
                                    бюджета,
                                    бюджетов субъектов Российской Федерации, местных бюджетов, по договорам об
                                    образовании
                                    за счёт средств физических и (или) юридических лиц, должен содержать специальный
                                    атрибут
                                    Itemscope itemtype="http://obrnadzor.gov.ru/microformats/Volume"
                                </p>
                                <h2>Информация о поступлении и расходовании финансовых и материальных средств
                                </h2>
                                <p>Тег, обрамляющий группу сведений о поступлении и расходовании финансовых и
                                    материальных
                                    средств, должен содержать специальный атрибут Itemscope
                                    itemtype="http://obrnadzor.gov.ru/microformats/FinRec"
                                </p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>