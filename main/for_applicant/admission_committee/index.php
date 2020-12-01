<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Приемная комиссия");

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
                                <h1>Приемная комиссия</h1>
                                <?php
                                $groupId = CGroup::GetList($by, $order, [
                                    'STRING_ID' => 'BRANCHES'
                                ])->Fetch()['ID'];
                                $db = CUser::GetList($by, $order, ['GROUPS_ID' => [$groupId]], [
                                    'SELECT' => [
                                        'UF_SITE', 'UF_TIME_ADDITION'
                                    ]
                                ]);
                                if ($db->SelectedRowsCount()) { ?>
                                    <?php
                                    while ($row = $db->NavNext(true, 'user')) {
                                        /**
                                         * @var $userNAME
                                         * @var $userPERSONAL_NOTES
                                         * @var $userUF_SITE
                                         * @var $userPERSONAL_MAILBOX
                                         * @var $userWORK_PHONE
                                         * @var $userUF_TIME_ADDITION
                                         */
                                        ?>
                                        <h3><?= $userNAME ?></h3>
                                        <p>
                                            <b>Адрес:</b> <?= $userPERSONAL_NOTES ?>
                                        </p>
                                        <p><b>Телефон:</b> <?= $userWORK_PHONE ?>
                                        </p>
                                        <p><b>E-mail:</b> <?= $userPERSONAL_MAILBOX ?>
                                        </p>
                                        <p><b>Сайт:</b> <?= $userUF_SITE ?>
                                        </p>
                                        <p><b>Режим работы:</b> <?= $userUF_TIME_ADDITION ?>
                                        </p>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>