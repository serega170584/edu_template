<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Подготовительные курсы");

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
                                <h1>Подготовительные курсы</h1>
                                <p>
                                    ГУ НИУ проводит подготовительные курсы для сдачи вступительных испытаний в форме ЕГЭ
                                    по всем предметам, входящим в перечень вступительных испытаний:
                                <ul>
                                    <li>математика;</li>
                                    <li>русский язык;</li>
                                    <li> физика;</li>
                                    <li>обществознание;</li>
                                    <li>химия;</li>
                                    <li>биология;</li>
                                    <li>история;</li>
                                    <li>английский язык;</li>
                                    <li>литература;</li>
                                    <li>рисунок.</li>
                                </ul>
                                </p>
                                <p>
                                    Подготовительные курсы университета гарантируют высокое качество подготовки. Оценка
                                    качества - высокие результаты слушателей курсов на ЕГЭ. Достигается это качество
                                    мастерством и опытом преподавателей курсов, мы стремимся привлекать лучших из
                                    лучших. Конечно, высокое качество подготовки требует и старания самого выпускника.
                                    Учась на подготовительных курсах ГУ НИУ, абитуриент еще до окончания школы может
                                    погрузиться в жизнь крупнейшего вуза города, почувствовать его особенную ауру,
                                    увидеть жизнь студентов и примерить ее к себе.
                                </p>
                                <h2>СТОИМОСТЬ ОБУЧЕНИЯ ПО ОДНОМУ ПРЕДМЕТУ СОСТАВЛЯЕТ:
                                </h2>
                                <h3>Группы до 20 человек:
                                </h3>
                                <table class="table table-striped">
                                    <thead>
                                    <th scope="col">Начало занятий</th>
                                    <th scope="col">Продолжительность</th>
                                    <th scope="col"> Стоимость (руб.)</th>
                                    <th scope="col">Кол-во часов в неделю</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>с 1 октября</td>
                                        <td>8 месяцев</td>
                                        <td>14 000</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>с 1 октября</td>
                                        <td>8 месяцев</td>
                                        <td>14 000</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>с 1 октября</td>
                                        <td>8 месяцев</td>
                                        <td>14 000</td>
                                        <td>4</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>Перечень документов, необходимых для поступления на курсы</h2>
                                <ul>
                                    <li>Паспорт родителя и паспорт (свидетельство о рождении) учащегося
                                    </li>
                                    <li>2 фото 3х4 матовые</li>
                                    <li>Справка из школы</li>
                                    <li>Оплата при оформлении.</li>
                                    <li>Справки по телефону: +7 (495) 229-14-41</li>
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