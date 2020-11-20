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
                </div>

            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>