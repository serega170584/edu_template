<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Преподаватели и сотрудники");

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
                                <h1>Преподаватели и сотрудники</h1>
                                <?php
                                $groupId = CGroup::GetList($by, $order, [
                                    'STRING_ID' => 'STAFF'
                                ])->Fetch()['ID'];
                                $db = CUser::GetList($by, $order, ['GROUPS_ID' => [$groupId]], [
                                    'SELECT' => [
                                        'UF_SITE', 'UF_DEGREE', 'UF_POSITION', 'UF_SUBJECT',
                                        'UF_RANK', 'UF_PROFESSION', 'UF_ASSESSMENT',
                                        'UF_GENERAL_EXPERIENCE', 'UF_PROFESSION_EXPERIENCE'
                                    ]
                                ]);
                                while ($row = $db->Fetch()) {
                                    ?>
                                    <div class="blog-post list-style">
                                        <img
                                                class="preview_picture"
                                                border="0"
                                                src="<?= \CFile::GetPath($row['PERSONAL_PHOTO']) ?>"
                                                width="318"
                                                height="227"
                                                style="float:left; width:318px; height:227px"
                                        />
                                        <div class="post-content">
                                            <h2><?= $row['LAST_NAME'] ?> <?= $row['NAME'] ?> <?= $row['SECOND_NAME'] ?></h2>
                                            <p>
                                                <?= $row['UF_POSITION'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <table class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <th scope="row">E-mail</th>
                                                <td><?= $row['PERSONAL_MAILBOX'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Сайт</th>
                                                <td><?= $row['UF_SITE'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Телефон</th>
                                                <td><?= $row['WORK_PHONE'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>