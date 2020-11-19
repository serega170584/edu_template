<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Title");
?>
<? $APPLICATION->IncludeComponent("bitrix:news.list", "list", array(
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "IBLOCK_TYPE" => 'edu',
        "IBLOCK_ID" => \CIBlock::GetList([
            'ID' => 'ASC'
        ], [
            'TYPE' => 'edu',
            'CODE' => 'SLIDER',
        ])->Fetch()['ID'],
        "NEWS_COUNT" => "4",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "DISPLAY_TOP_PAGER" => "",
        "DISPLAY_BOTTOM_PAGER" => "",
    )
); ?>
    <!-- feature-section
                ================================================== -->
    <section class="feature-section">
        <div class="container">
            <div class="feature-box">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-post">
                            <div class="icon-holder">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="feature-content">
                                <h2>
                                    Online Learn Courses Management
                                </h2>
                                <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-post">
                            <div class="icon-holder color2">
                                <i class="fa fa-id-card-o"></i>
                            </div>
                            <div class="feature-content">
                                <h2>
                                    Learn from the masters of the field online
                                </h2>
                                <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-post">
                            <div class="icon-holder color3">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <div class="feature-content">
                                <h2>
                                    An Introduction-Skills For Learners
                                </h2>
                                <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature section -->
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>