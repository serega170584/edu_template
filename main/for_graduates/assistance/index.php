<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Центр содействия занятости");

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
                                <h1>Центр содействия занятости</h1>
                                <p>
                                    <b>Директор центра</b> - Глушкова Светлана Валерьевна
                                </p>
                                <p>Цель – организация и осуществление деятельности, направленной на содействие
                                    трудоустройству выпускников на современном рынке труда в соответствии с получаемой
                                    специальностью, направлением подготовки.</p>

                                <h2>Задачи центра</h2>

                                <ul>
                                    <li>содействие занятости студентов и трудоустройства выпускников на современном
                                        рынке
                                        труда;
                                    </li>

                                    <li>формирование и реализация системы партнерства университета в вопросе содействия
                                        трудоустройству выпускников с государственными и муниципальными органами власти,
                                        службами занятости населения, с предприятиями, организациями, учреждениями
                                        города
                                        Кирова и Кировской области.
                                    </li>
                                </ul>

                                <h2>Сотрудничество</h2>

                                <p>Центр сотрудничает с Управлением государственной службы занятости населения Кировской
                                    области, Департаментом образования Кировской области, Центром занятости населения г.
                                    Кирова, Управлением по делам молодежи Кировской области, Федерацией профсоюзов
                                    Кировской
                                    области, образовательными учреждениями Кировской области, Областным штабом
                                    студенческих
                                    отрядов.</p>

                                <h2>Основные направления деятельности Центра</h2>

                                <ul>
                                    <li>сотрудничество с ведущими работодателями г. Кирова и Кировской области по
                                        вопросам
                                        содействия трудоустройству выпускников;
                                    </li>
                                    <li>организация и проведение мероприятий по вопросам адаптации студентов и
                                        выпускников
                                        на
                                        рынке труда, нормативно-правового сопровождения деятельности молодого
                                        специалиста,
                                        эффективного взаимодействия с работодателем: «День карьеры», деловая игра «Я ищу
                                        свою
                                        работу», Ярмарки вакансий, обучающие семинары «Путь к успеху», презентации фирм,
                                        компаний, встречи с работодателями;
                                    </li>

                                    <li>работа Координационного совета по содействию трудоустройству выпускников;</li>

                                    <li>участие в деятельности Ассоциации выпускников;</li>

                                    <li>координация работы по организации сезонной и временной занятости студентов.
                                    </li>
                                </ul>


                                <p>109544, Россия, г. Москва, бульвар Энтузиастов, дом 2</p>

                                <p>Тел.: +7 (495) 229-14-41</p>

                                <p>Е-mail: info@1c-bitrix.ru</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>