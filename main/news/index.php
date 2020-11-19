<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>
    <!-- page-banner-section
                ================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Новости</h1>
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "s1"
                )
            );?>
            <ul class="page-depth">
                <li><a href="index.html">Главная</a></li>
                <li><a href="blog.html">Новости</a></li>
            </ul>
        </div>
    </section>
    <!-- End page-banner-section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>