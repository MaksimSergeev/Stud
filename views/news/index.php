<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Self blog</title>

    <link rel='stylesheet' id='reset-css' href='/template/css/reset.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='superfish-css' href='/template/css/superfish.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='fontawsome-css' href='/template/css/font-awsome/css/font-awesome.css' type='text/css'
          media='all'/>
   
	<link rel='stylesheet' id='style-css' href='/template/css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='color-scheme-css' href='/template/css/color/green.css' type='text/css' media='all'/>
    <link rel="stylesheet" href="/template/css/zerogrid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/template/css/responsive.css" type="text/css" media="screen">
    <script type='text/javascript' src='/template/js/jquery.js'></script>
    <script type='text/javascript' src='/template/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='/template/js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='/template/js/jquery.carouFredSel-6.2.1-packed.js'></script>
    <script type='text/javascript' src='/template/js/hoverIntent.js'></script>
    <script type='text/javascript' src='/template/js/superfish.js'></script>

    <script src="/template/js/css3-mediaqueries.js"></script>

    <script type="text/javascript" language="javascript">
        $(function () {

            /* Start Super fish */
            jQuery(document).ready(function () {
                jQuery('ul.sf-menu').superfish({
                    delay: 100,
                    speed: 'fast',
                    speedOut: 'fast',
                });
            });
            /* End Of Super fish */

        });
    </script>
</head>

<body class="home blog">

<!-- Start Header -->
<div class="container zerogrid">
    <div class="col-full">
        <div class="wrap-col">
            <div id="header-nav-container">

                <a href="#">
                    <img src="/template/images/logo.png" id="logo"/>
                </a>

                <!-- Navigation Menu -->

                <ul class="sf-menu">
                    <li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
                    <li class="menu-item"><a href="blog.html">Blog</a></li>
                    <li class="menu-item"><a href="#">Features</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">Menu 01</a></li>
                            <li class="menu-item"><a href="#">Menu 02</a></li>
                            <li class="menu-item"><a href="#">Menu 03</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="about.html">About us</a></li>
                </ul>
                <!-- End Navigation Menu -->

                <div class="clear"></div>

            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="spacing-30"></div>
<!-- End Header -->


<!-- Start Main Container -->
<div class="container zerogrid">

    <!-- Start Posts Container -->
    <div class="col-2-3" id="post-container">
        <div class="wrap-col">

            <!-- Start Post Item -->
            <?php foreach ($newsList as $newsItem): ?>
                <div class="post">
                    <div class="post-margin">

                        <div class="post-avatar">
                            <div class="avatar-frame"></div>
                            <img alt=''
                                 src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G'
                                 class='avatar avatar-70 photo' height='70' width='70'/></div>

                        <h4 class="post-title"><a href="#"><?php echo $newsItem['title'];?></a></h4>
                        <ul class="post-status">
                            <li><i class="fa fa-clock-o"></i><?php echo $newsItem['date'];?></li>

                            <li><i class="fa fa-comment-o"></i>No Comments</li>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <div class="featured-image">
                        <img src="<?php echo $newsItem['preview'];?>" class="attachment-post-standard "/>
                    </div>

                    <div class="post-margin">
                        <p><?php echo $newsItem['short_content'];?></p>
                    </div>

                    <ul class="post-social">
                        <li><a href="#" target="_blank">
                                <i class="fa fa-facebook"></i></a>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fa fa-twitter"></i></a>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fa fa-google-plus"></i></a>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fa fa-linkedin"></i></a>
                        </li>

                        <li>
                            <a href="#" class="readmore">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
                        </li>
                    </ul>

                    <div class="clear"></div>
                </div>
            <?php endforeach; ?>
            <!-- End Post Item -->


            <!-- Start Pagination -->
            <div class="spacing-20"></div>
            <ul class="pagination">
                <li class='current'><a href=''>1</a></li>
                <li><a href=''>2</a></li>
                <li><a href=''>3</a></li>
                <li><a href=''>4</a></li>
            </ul>
            <!-- End Pagination -->

            <div class="clear"></div>
        </div>
    </div>
    <!-- End Posts Container -->

    <!-- Start Sidebar -->
    <div class="col-1-3">
        <div class="wrap-col">
            <div class="widget-container">
                <form role="search" method="get" id="searchform" class="searchform" action="">
                    <div>
                        <label class="screen-reader-text" for="s">Search for:</label>
                        <input type="text" value="" name="s" id="s"/>
                        <input type="submit" id="searchsubmit" value="Search"/>
                    </div>
                </form>
                <div class="clear"></div>
            </div>
            <div class="widget-container"><h6 class="widget-title">Categories</h6>
                <ul>
                    <li class="cat-item cat-item-5"><a href="#" title="View all posts filed under Category #1">Category #1</a>
                    </li>
                    <li class="cat-item cat-item-3"><a href="#" title="View all posts filed under Category #2">Category #2</a>
                    </li>
                    <li class="cat-item cat-item-4"><a href="#" title="View all posts filed under Category #3">Category #3</a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="widget-container"><h6 class="widget-title">Latest Posts</h6>    <!-- Start Widget -->
                <ul class="widget-recent-posts">

                    <li>
                        <div class="post-image">
                            <div class="post-mask"></div>
                            <img width="70" height="70" src="/template/img/HighRes-70x70.jpg"
                                 class="attachment-post-widget #"/></div>

                        <h6><a href="#">Post #1</a></h6>
                        <span>November 02, 2016</span>
                        <div class="clear"></div>
                    </li>


                    <li>
                        <div class="post-image">
                            <div class="post-mask"></div>
                            <img width="70" height="70" src="/template/img/one-more-beer-70x70.png"
                                 class="attachment-post-widget #"/></div>

                        <h6><a href="#">Post #2</a></h6>
                        <span>November 02, 2016</span>
                        <div class="clear"></div>
                    </li>


                    <li>
                        <div class="post-image">
                            <div class="post-mask"></div>
                            <img width="70" height="70" src="/template/img/Port_Harbor1-70x70.jpg"
                                 class="attachment-post-widget #"/></div>

                        <h6><a href="#">Post #3</a></h6>
                        <span>November 02, 2016</span>
                        <div class="clear"></div>
                    </li>


                    <li>
                        <div class="post-image">
                            <div class="post-mask"></div>
                            <img width="70" height="70" src="/template/img/Timothy-J-Reynolds-2560x14401-70x70.jpg"
                                 class="attachment-post-widget #"/></div>

                        <h6><a href="#">Post #4</a></h6>
                        <span>November 02, 2016</span>
                        <div class="clear"></div>
                    </li>


                </ul>
                <!-- End Widget -->
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>        <!-- End Sidebar -->

    <div class="clear"></div>
</div>
<!-- End Main Container -->


<!-- Start Footer -->
<div class="spacing-30"></div>
<div class="container zerogrid">
    <div id="footer-container" class="col-full">
        <div class="wrap-col">
            <!-- Footer Copyright -->
            <p>Sergeyev Maksim Copyrigh &copy; 2017 All Rights Reserved.</p>
            <!-- End Footer Copyright -->

            <!-- Footer Logo -->
            <img src="/template/images/footer-logo.png" id="footer-logo"/>
            <!-- End Footer Logo -->

            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- End Footer -->


</body>

</html>