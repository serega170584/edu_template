<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Образовательные стандарты РФ");

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
                                <h1>Образовательные стандарты РФ</h1>
                                <h2>БАКАЛАВРИАТ</h2>
                                <ul>
                                    <li><a href="http://1c-bitrix.ru">030900.62 Юриспруденция
                                        </a></li>
                                    <li><a href="http://1c-bitrix.ru">080100.62 Экономика</a></li>
                                    <li><a href="http://1c-bitrix.ru">080200.62 Менеджмент</a></li>

                                </ul>
                                <h2>МАГИСТРАТУРА</h2>
                                <ul>
                                    <li><a href="http://1c-bitrix.ru">030900.68 Юриспруденция </a></li>
                                    <li><a href="http://1c-bitrix.ru">080100.68 Экономика</a></li>
                                    <li><a href="http://1c-bitrix.ru">080200.68 Менеджмент</a></li>
                                    <li><a href="http://1c-bitrix.ru">080110.68 Государственное и муниципальное
                                            управление</a></li>
                                </ul>
                                <h2>ГОС ВПО</h2>
                                <ul>
                                    <li><a href="http://1c-bitrix.ru">030500.62 Юриспруденция </a></li>
                                    <li><a href="http://1c-bitrix.ru">030501.65 Юриспруденция</a></li>
                                    <li><a href="http://1c-bitrix.ru">080100.62 Экономика </a></li>
                                    <li><a href="http://1c-bitrix.ru">080105.65 Финансы и кредит </a></li>
                                    <li><a href="http://1c-bitrix.ru">080109.65 Бухгалтерский учет, анализ и аудит </a></li>
                                    <li><a href="http://1c-bitrix.ru">080111.65 Маркетинг </a></li>
                                    <li><a href="http://1c-bitrix.ru">080504.65 Государственное и муниципальное управление </a></li>
                                    <li><a href="http://1c-bitrix.ru">080507.65 Менеджмент организации </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>