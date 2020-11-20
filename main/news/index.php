<?
/**
 * @var \CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
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
                    <?php $APPLICATION->IncludeComponent("bitrix:news", "", array(
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "SEF_MODE" => "Y",
                            "AJAX_MODE" => "Y",
                            "IBLOCK_TYPE" => "edu",
                            "IBLOCK_ID" => \CIBlock::GetList([
                                'ID' => 'ASC'
                            ], [
                                'TYPE' => 'edu',
                                'CODE' => 'NEWS',
                            ])->Fetch()['ID'],
                            "NEWS_COUNT" => "20",
                            "USE_SEARCH" => "Y",
                            "USE_RSS" => "Y",
                            "USE_RATING" => "Y",
                            "USE_CATEGORIES" => "Y",
                            "USE_REVIEW" => "Y",
                            "USE_FILTER" => "Y",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "DESC",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER2" => "ASC",
                            "CHECK_DATES" => "Y",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "LIST_FIELD_CODE" => array(),
                            "LIST_PROPERTY_CODE" => array(),
                            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "META_KEYWORDS" => "-",
                            "META_DESCRIPTION" => "-",
                            "BROWSER_TITLE" => "-",
                            "DETAIL_SET_CANONICAL_URL" => "Y",
                            "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "DETAIL_FIELD_CODE" => array(),
                            "DETAIL_PROPERTY_CODE" => array(),
                            "DETAIL_DISPLAY_TOP_PAGER" => "Y",
                            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                            "DETAIL_PAGER_TITLE" => "Страница",
                            "DETAIL_PAGER_TEMPLATE" => "",
                            "DETAIL_PAGER_SHOW_ALL" => "Y",
                            "STRICT_SECTION_CHECK" => "Y",
                            "SET_TITLE" => "Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "ADD_ELEMENT_CHAIN" => "N",
                            "SET_LAST_MODIFIED" => "Y",
                            "PAGER_BASE_LINK_ENABLE" => "Y",
                            "SET_STATUS_404" => "Y",
                            "SHOW_404" => "Y",
                            "MESSAGE_404" => "",
                            "PAGER_BASE_LINK" => "",
                            "PAGER_PARAMS_NAME" => "arrPager",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "USE_PERMISSIONS" => "Y",
                            "GROUP_PERMISSIONS" => array("1"),
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "3600",
                            "CACHE_FILTER" => "Y",
                            "CACHE_GROUPS" => "Y",
                            "DISPLAY_TOP_PAGER" => "Y",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "PAGER_TITLE" => "Новости",
                            "PAGER_SHOW_ALWAYS" => "Y",
                            "PAGER_TEMPLATE" => "",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "Y",
                            "FILTER_NAME" => "",
                            "FILTER_FIELD_CODE" => array(),
                            "FILTER_PROPERTY_CODE" => array(),
                            "NUM_NEWS" => "20",
                            "NUM_DAYS" => "30",
                            "YANDEX" => "Y",
                            "MAX_VOTE" => "5",
                            "VOTE_NAMES" => array("0", "1", "2", "3", "4"),
                            "CATEGORY_IBLOCK" => array(),
                            "CATEGORY_CODE" => "CATEGORY",
                            "CATEGORY_ITEMS_COUNT" => "5",
                            "MESSAGES_PER_PAGE" => "10",
                            "USE_CAPTCHA" => "Y",
                            "REVIEW_AJAX_POST" => "Y",
                            "PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
                            "FORUM_ID" => "1",
                            "URL_TEMPLATES_READ" => "",
                            "SHOW_LINK_TO_FORUM" => "Y",
                            "POST_FIRST_MESSAGE" => "Y",
                            "SEF_FOLDER" => "/",
                            "SEF_URL_TEMPLATES" => array(
                                "detail" => "#ELEMENT_ID#/",
                                "news" => "search/",
                                "section" => "rss/",
                            ),
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "VARIABLE_ALIASES" => array(
                                "detail" => array(),
                                "news" => array(),
                                "section" => array(),
                            ),
                            "USE_SHARE" => "Y",
                            "SHARE_HIDE" => "Y",
                            "SHARE_TEMPLATE" => "",
                            "SHARE_HANDLERS" => array("delicious", "facebook", "lj", "twitter"),
                            "SHARE_SHORTEN_URL_LOGIN" => "",
                            "SHARE_SHORTEN_URL_KEY" => "",
                        )
                    ); ?>
                    <div class="blog-box">
                        <div class="blog-post list-style">
                            <a href="single-post.html"><img src="upload/blog/blog-image-1.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Academics</a>
                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>
                                <p>CSS. It’s a web designer’s playpen. With so many colors, type settings, layout
                                    options, and responsive…</p>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                                <div class="post-meta user">
                                    <i class="material-icons">perm_identity</i> Posted by <a href="#">codebean</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post list-style">
                            <a href="single-post.html"><img src="upload/blog/blog-image-2.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Government</a>
                                <h2><a href="single-post.html">Tips to Developing a Quality Discussion</a></h2>
                                <p>CSS. It’s a web designer’s playpen. With so many colors, type settings, layout
                                    options, and responsive…</p>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                                <div class="post-meta user">
                                    <i class="material-icons">perm_identity</i> Posted by <a href="#">codebean</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post list-style">
                            <a href="single-post.html"><img src="upload/blog/blog-image-3.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Design</a>
                                <h2><a href="single-post.html">Reflections for the Season of Advent</a></h2>
                                <p>CSS. It’s a web designer’s playpen. With so many colors, type settings, layout
                                    options, and responsive…</p>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                                <div class="post-meta user">
                                    <i class="material-icons">perm_identity</i> Posted by <a href="#">codebean</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post list-style">
                            <a href="single-post.html"><img src="upload/blog/blog-image-4.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Business</a>
                                <h2><a href="single-post.html">It’s Wonderful to see the Friendships that Develop</a>
                                </h2>
                                <p>CSS. It’s a web designer’s playpen. With so many colors, type settings, layout
                                    options, and responsive…</p>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                                <div class="post-meta user">
                                    <i class="material-icons">perm_identity</i> Posted by <a href="#">codebean</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post list-style">
                            <a href="single-post.html"><img src="upload/blog/blog-image-5.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Academics</a>
                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>
                                <p>CSS. It’s a web designer’s playpen. With so many colors, type settings, layout
                                    options, and responsive…</p>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                                <div class="post-meta user">
                                    <i class="material-icons">perm_identity</i> Posted by <a href="#">codebean</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post list-style">
                            <a href="single-post.html"><img src="upload/blog/blog-image-6.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Government</a>
                                <h2><a href="single-post.html">Tips to Developing a Quality Discussion</a></h2>
                                <p>CSS. It’s a web designer’s playpen. With so many colors, type settings, layout
                                    options, and responsive…</p>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                                <div class="post-meta user">
                                    <i class="material-icons">perm_identity</i> Posted by <a href="#">codebean</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post list-style">
                            <a href="single-post.html"><img src="upload/blog/blog-image-7.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Design</a>
                                <h2><a href="single-post.html">Reflections for the Season of Advent</a></h2>
                                <p>CSS. It’s a web designer’s playpen. With so many colors, type settings, layout
                                    options, and responsive…</p>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                                <div class="post-meta user">
                                    <i class="material-icons">perm_identity</i> Posted by <a href="#">codebean</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post list-style">
                            <a href="single-post.html"><img src="upload/blog/blog-image-8.jpg" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">Business</a>
                                <h2><a href="single-post.html">It’s Wonderful to see the Friendships that Develop</a>
                                </h2>
                                <p>CSS. It’s a web designer’s playpen. With so many colors, type settings, layout
                                    options, and responsive…</p>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                                <div class="post-meta user">
                                    <i class="material-icons">perm_identity</i> Posted by <a href="#">codebean</a>
                                </div>
                            </div>
                        </div>

                        <ul class="page-pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>