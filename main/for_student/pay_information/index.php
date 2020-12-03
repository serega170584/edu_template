<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Оплата обучения");

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
                                <h1>Оплата обучения</h1>
                                <table class="table table-striped">
                                    <thead>
                                    <th scope="col">Филилал</th>
                                    <th scope="col">Время работы</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">УК "Авиамоторный"</th>
                                        <td>
                                            Вторник-пятница: с 10 00 до 19 00
                                            Суббота: с 10 00 до 17 00
                                            Обед: с 13 00 до 14 00
                                            Воскресенье, понедельник - выходной
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">УК "Академический"</th>
                                        <td>
                                            Телефон: +7 (495) 229-14-41
                                            Вторник-пятница: с 10 00 до 19 00 (обед с 13.00-14.00 ч.)
                                            Понедельник, суббота, воскресенье — выходной
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">УК "Варшавский"</th>
                                        <td>
                                            Часы работы: вторник-пятница с 10.00-19.00 обед с 13.00-14.00, суббота с
                                            10.00-17.00.
                                            Воскресенье, понедельник - выходной.
                                            Телефон: +7 (495) 229-14-41
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>