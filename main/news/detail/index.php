<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule('iblock');
$APPLICATION->SetTitle("Новости");
?>
    <!-- page-banner-section
                ================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Новости</h1>
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
                            <h2>Categories</h2>
                            <ul class="category-list">
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Campus Life</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Government</a></li>
                                <li><a href="#">Schools</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="single-event-box">

                        <img src="upload/events/events7.jpg" alt="">

                        <div class="event-meta-info">
                            <div class="box-content start-time">
                                <div class="inner">
                                    <div class="text">
                                        <span class="label">Start Time</span>
                                        <p>6:00 am</p>
                                        <p>Monday, October 22, 2018</p>
                                    </div>
                                    <div class="icon">
                                        <i class="material-icons">access_time</i>
                                    </div>
                                </div>
                            </div>
                            <div class="box-content end-time">
                                <div class="inner">
                                    <div class="text">
                                        <span class="label">End Time</span>
                                        <p>12:00 pm</p>
                                        <p>Friday, December 28, 2018</p>
                                    </div>
                                    <div class="icon">
                                        <i class="material-icons">access_time</i>
                                    </div>
                                </div>
                            </div>
                            <div class="box-content address">
                                <div class="inner">
                                    <div class="text">
                                        <span class="label">Address</span>
                                        <p>New York , US of America</p>
                                    </div>
                                    <div class="icon">
                                        <i class="material-icons">location_on</i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event-content">
                            <h1>Event Description</h1>
                            <p>Improve your productivity, get things done, and find more time for what’s most important with Time Management Tips. This weekly series provides actionable time management techniques. Help people better manage their time and ultimately become more productive. Time management expert Dave Crenshaw provides a new tip every Monday, touching on a wide variety of topics. Tune in to learn about everything from managing emails and calendars to setting priorities.</p>
                            <div class="event-columns-list">
                                <h1>Learning Objectives</h1>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li>Nam semper diam quis tellus luctus,</li>
                                            <li>Integer vehicula diam ac aliquet porta.</li>
                                            <li>Ut suscipit lectus in turpis finibus eu</li>
                                            <li>Nulla ut ex dignissim, feugiat nulla</li>
                                            <li>Sed convallis tortor at porta fringilla</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li>Nam semper diam quis tellus luctus,</li>
                                            <li>Integer vehicula diam ac aliquet porta.</li>
                                            <li>Ut suscipit lectus in turpis finibus eu</li>
                                            <li>Nulla ut ex dignissim, feugiat nulla</li>
                                            <li>Sed convallis tortor at porta fringilla</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="map"></div>
                            <ul class="share-list">
                                <li><span>Share:</span></li>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>