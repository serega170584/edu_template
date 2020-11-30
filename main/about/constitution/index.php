<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Устав");

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
                                <h1>Устав</h1>
                                <a href="../../images/b1af161025e9ae449904af0a72155ba5.pdf" target="_blank">Устав
                                    образовательной организации</a>
                                <p>Действительно, основные требования к уставам образовательной организации закреплены в
                                    ст. 25 Федерального закона № 273-ФЗ. Это указание в уставе на тип образовательной
                                    организации; на учредителя или учредителей образовательной организации; перечисление
                                    видов реализуемых образовательных программ с указанием уровня образования и (или)
                                    направленности; установление структуры, порядка формирования, срока полномочий и
                                    компетенции органов управления образовательной организацией, порядка принятия ими
                                    решений и выступления от имени образовательной организации. Последнее положение
                                    также конкретизировано в ч. 5 ст. 26.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>