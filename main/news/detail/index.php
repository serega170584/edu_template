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
                    <div class="blog-box">
                        <div class="blog-post single-post">
                            <div class="post-content">
                                <h1>Couple Of Happy College Students Graduated</h1>
                                <div class="post-meta date">
                                    <i class="material-icons">access_time</i> June 13, 2018
                                </div>
                                <div class="post-meta user">
                                    <i class="material-icons">perm_identity</i> Posted by <a href="#">codebean</a>
                                </div>
                                <div class="post-meta category">
                                    <i class="material-icons">folder_open</i><a href="#">Academics</a>, <a href="#">School</a>
                                </div>
                            </div>
                            <a href="single-post.html"><img src="upload/blog/blog-image-1.jpg" alt=""></a>
                            <div class="post-content">
                                <p>CSS. It’s a web designer’s playpen. With so many colors, type settings, layout options, and responsive possibilities, it’s easy to turn a stylesheet into a million line nightmare. However, with a few simple actions you can clean up the mess so the CSS works with you, not against you. A few weeks ago, frontend developer Julie Cameron came through our virtual Treehouse office and bestowed some wisdom we still can’t shake. So now I’m sharing it with you all!</p>
                                <h2>It’s only natural. Entanglement happens.</h2>
                                <p>The cascade. It’s a blessing and a curse. It’s often the case that when you change the styling of one element, other elements inadvertently get restyled. Misuse of !important makes the cascade come to a screeching halt, and leaves you with inconsistencies from one element styling to the next. As websites get bigger or more developers start working on the codebase,</p>
                                <blockquote>
                                    the CSS tends to grow as well. Without a plan, it becomes the Wild Wild West (wickey wild, wicky wicky wild wild wild west…Will Smith isn’t gonna get you out of this one).
                                </blockquote>
                                <ul class="text-list">
                                    <li>Modular – You can get to the point of building a page without writing a single line of CSS.</li>
                                    <li>Predictable – It doesn’t matter where you put the component, it’ll behave the same and look the same. It’s easy to write the code. You have systems in place for naming it. It’s more intuitive to write.</li>
                                    <li>Maintainable – It’s quick and easy to deal with. It won’t break other things on the site.</li>
                                    <li>Scalable – It’s hard to break and easy to build onto.</li>
                                    <li>Dry – It eliminates the need for copy and paste duplication in the CSS.</li>
                                    <li>Organized – There’s a place for everything.</li>
                                </ul>
                                <p><span>Separation of container from content</span> means that objects should look the same no matter where you put them. In other words, avoid location-dependent styles. For example, if you’re styling an h2 like this…</p>
                                <div class="tags-share-box">
                                    <ul class="tags-list">
                                        <li><span>Tags:</span></li>
                                        <li><a href="#">course</a></li>
                                        <li><a href="#">theme</a></li>
                                        <li><a href="#">HTML Template</a></li>
                                    </ul>
                                    <ul class="share-list">
                                        <li><span>Share:</span></li>
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="about-author">
                                    <div class="image-holder">
                                        <img src="upload/blog/avatar.jpg" alt="">
                                    </div>
                                    <div class="author-content">
                                        <h2>About codebean</h2>
                                        <p>Aenean eu justo id magna luctus pulvinar. Quisque vitae scelerisque eros. Pellentesque pretium felis non libero pharetra feugiat id ac sem. Suspendisse ac metus justo.</p>
                                        <a class="button-one" href="#">More posts by codebean</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-nav">
                            <div class="post-nav-btn prev-btn">
                                <a href="#" class="post-nav-link prev">
                                    <i class="material-icons">arrow_back</i>
                                    <span>Newer</span>
                                    Reflections for the Season of Advent
                                </a>
                            </div>
                            <div class="post-nav-btn next-btn">
                                <a href="#" class="post-nav-link next">
                                    <i class="material-icons">arrow_forward</i>
                                    <span>Older</span>
                                    Couple Of Happy College Students Graduated
                                </a>
                            </div>
                        </div>

                        <div class="comments-holder">
                            <h2>4 Comments</h2>
                            <p>Join the discussion and tell us your opinion.</p>
                            <ul class="comment-list">
                                <li>
                                    <div class="image-holder">
                                        <img src="upload/blog/avatar4.jpg" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <h2>
                                            Marcy Washington
                                            <span>June 14, 2018</span>
                                            <a href="#"><i class="fa fa-commenting-o"></i>Reply</a>
                                        </h2>
                                        <p>Learnt a lot about masks too. Thank you for sharing.</p>
                                    </div>
                                    <ul class="depth-comment">
                                        <li>
                                            <div class="image-holder">
                                                <img src="upload/blog/avatar2.jpg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <h2>
                                                    Caleb Torres
                                                    <span>June 14, 2018</span>
                                                    <a href="#"><i class="fa fa-commenting-o"></i>Reply</a>
                                                </h2>
                                                <p>Nice result Caroline! Glad you enjoyed it</p>
                                            </div>
                                            <ul class="depth-comment">
                                                <li>
                                                    <div class="image-holder">
                                                        <img src="upload/blog/avatar4.jpg" alt="">
                                                    </div>
                                                    <div class="comment-content">
                                                        <h2>
                                                            Marcy Washington
                                                            <span>June 14, 2018</span>
                                                            <a href="#"><i class="fa fa-commenting-o"></i>Reply</a>
                                                        </h2>
                                                        <p>This was great thank you Caleb</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="image-holder">
                                        <img src="upload/blog/avatar3.jpg" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <h2>
                                            Andrew
                                            <span>June 14, 2018</span>
                                            <a href="#"><i class="fa fa-commenting-o"></i>Reply</a>
                                        </h2>
                                        <p>Great article. I think that companies create their strongest user advocates when designers and developers understand the value of great user experience.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <form class="comment-form">
                            <h2>Leave a Reply</h2>
                            <p>Logged in as besimdauti24. <a href="#">Log out?</a></p>
                            <label>Comment</label>
                            <textarea></textarea>
                            <button type="submit">
                                Post Comment
                            </button>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End blog section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>