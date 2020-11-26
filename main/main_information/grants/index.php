<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Стипендии и иные виды материальной поддержки");

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
                                <h1>Стипендии и иные виды материальной поддержки</h1>
                                <h2>Информация о наличии и условиях предоставления стипендий, в том числе локальные
                                    нормативные акты
                                </h2>
                                <p>Тег, обрамляющий группу сведений о наличии и условиях предоставления стипендий,
                                    должен содержать специальный атрибут Itemscope
                                    itemtype=«http://obrnadzor.gov.ru/microformats/Grant»</p>
                                <h2>Информация о наличии общежития, интерната
                                </h2>
                                <p>Тег, обрамляющий сведения о наличии общежития, интерната, должен содержать
                                    специальный атрибут itemprop=«HostelInfo»
                                </p>
                                <h2>Информация о количестве жилых помещений в общежитии, интернате для иногородних
                                    обучающихся
                                </h2>
                                <p>Тег, обрамляющий сведения о количестве мест в общежитии, интернате для иногородних
                                    обучающихся, должен содержать специальный атрибут itemprop=«HostelNum»
                                </p>
                                <h2>Копия локального нормативного акта, регламентирующего размер платы за пользование
                                    жилым помещением и коммунальные услуги в общежитии
                                </h2>
                                <p>Тег, обрамляющий ссылку на файл локального нормативного акта, регламентирующего
                                    размер платы за пользование жилым помещением и коммунальные услуги в общежитии,
                                    должен
                                    содержать специальный атрибут itemprop=«LocalActObSt»
                                </p>
                                <h2>Информация об иных видах материальной поддержки обучающихся
                                </h2>
                                <p>Тег, обрамляющий сведения об иных видах материальной обучающихся, должен
                                    специальный itemprop=«Support»
                                </p>
                                <h2>Информация о трудоустройстве выпускников
                                </h2>
                                <p>Тег, обрамляющий сведения о трудоустройстве выпускников, должен содержать специальный атрибут itemprop= «GraduateJob»
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