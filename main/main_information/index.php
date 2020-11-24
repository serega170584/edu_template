<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Сведения об общеобразовательной организации");

$by = 'ID';
$order = 'ASC';
?>
    <!-- page-banner-section
                ================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Сведения об общеобразовательной организации</h1>
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
                        <h1>Сведения об общеобразовательной организации</h1>
                        <h2>Дата создания</h2>
                        <p>Национальный исследовательский университет «Современный Государственный Университет» создан
                            на основании решения Общего собрания учредителей от 17.07.1992 г. и зарегистрировано
                            Постановлением главы Балашихинского района Московской области № 918/1-3 от 15.10.1993
                            г. </p>
                        <?php
                        $groupId = CGroup::GetList($by, $order, [
                            'STRING_ID' => 'FOUNDERS'
                        ])->Fetch()['ID'];
                        $db = CUser::GetList($by, $order, ['GROUPS_ID' => [$groupId]]);
                        if ($db->SelectedRowsCount()) {
                            ?>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Учредители</th>
                                    <th scope="col">Место нахождения</th>
                                    <th scope="col">Адрес сайта</th>
                                    <th scope="col">Адрес электронной почты</th>
                                    <th scope="col">Справочный телефон</th>
                                    <th scope="col">График работы</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = $db->NavNext(true, 'user')) {
                                    /**
                                     * @var $userLAST_NAME
                                     * @var $userNAME
                                     * @var $userSECOND_NAME
                                     * @var $userPERSONAL_NOTES
                                     * @var $userUF_SITE
                                     * @var $userPERSONAL_MAILBOX
                                     * @var $userWORK_PHONE
                                     * @var $userUF_TIME_ADDITION
                                     */
                                    ?>
                                    <th scope="row"><?= $userLAST_NAME ?> <?= $userNAME ?> <?= $userSECOND_NAME ?></th>
                                    <td><?= $userPERSONAL_NOTES ?></td>
                                    <td><?= $userUF_SITE ?></td>
                                    <td><?= $userPERSONAL_MAILBOX ?></td>
                                    <td><?= $userWORK_PHONE ?></td>
                                    <td><?= $userUF_TIME_ADDITION ?></td>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                        }
                        ?>
                        <h2>Учредители образовательной организации</h2>
                        <p>
                            Учредителем вуза является Российская Федерация. Функции и полномочия учредителя вуза
                            осуществляет Министерство образования и науки РФ
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>