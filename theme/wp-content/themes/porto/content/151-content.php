<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-151">
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img src="<?php bloginfo('template_url'); ?>/images/blog/post-1.jpg" alt="Post">
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-date">
                            <span class="day">29</span>
                            <span class="month">Jun</span>
                        </div><!-- End .entry-date -->

                        <h2 class="entry-title">
                            <a href="single.html">Post Format - Image</a>
                        </h2>

                        <div class="entry-content">
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora
                                torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper
                                vel, congue sed ligula.</p>

                            <a href="single.html" class="read-more">Read More <i
                                    class="icon-angle-double-right"></i></a>
                        </div><!-- End .entry-content -->

                        <div class="entry-meta">
                            <span><i class="icon-calendar"></i>June 29, 2018</span>
                            <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                            <span><i class="icon-folder-open"></i>
                                <a href="#">Haircuts & hairstyles</a>,
                                <a href="#">Fashion trends</a>,
                                <a href="#">Accessories</a>
                            </span>
                        </div><!-- End .entry-meta -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <div class="entry-slider owl-carousel owl-theme owl-theme-light">
                                <img src="<?php bloginfo('template_url'); ?>/images/blog/post-1.jpg" alt="Post">
                                <img src="<?php bloginfo('template_url'); ?>/images/blog/post-2.jpg" alt="Post">
                                <img src="<?php bloginfo('template_url'); ?>/images/blog/post-3.jpg" alt="Post">
                            </div><!-- End .entry-slider -->
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-date">
                            <span class="day">22</span>
                            <span class="month">Jun</span>
                        </div><!-- End .entry-date -->

                        <h2 class="entry-title">
                            <a href="single.html">Post Format - Image Gallery</a>
                        </h2>

                        <div class="entry-content">
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora
                                torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper
                                vel, congue sed ligula.</p>

                            <a href="single.html" class="read-more">Read More <i
                                    class="icon-angle-double-right"></i></a>
                        </div><!-- End .entry-content -->

                        <div class="entry-meta">
                            <span><i class="icon-calendar"></i>June 22, 2018</span>
                            <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                            <span><i class="icon-folder-open"></i>
                                <a href="#">Haircuts & hairstyles</a>,
                                <a href="#">Fashion trends</a>,
                                <a href="#">Accessories</a>
                            </span>
                        </div><!-- End .entry-meta -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <div class="entry-body">
                        <div class="entry-date">
                            <span class="day">07</span>
                            <span class="month">Jun</span>
                        </div><!-- End .entry-date -->

                        <h2 class="entry-title">
                            <a href="single.html">Hello World!</a>
                        </h2>

                        <div class="entry-content">
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora
                                torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper
                                vel, congue sed ligula.</p>

                            <a href="single.html" class="read-more">Read More <i
                                    class="icon-angle-double-right"></i></a>
                        </div><!-- End .entry-content -->

                        <div class="entry-meta">
                            <span><i class="icon-calendar"></i>June 07, 2018</span>
                            <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                            <span><i class="icon-folder-open"></i>
                                <a href="#">Haircuts & hairstyles</a>,
                                <a href="#">Fashion trends</a>,
                                <a href="#">Accessories</a>
                            </span>
                        </div><!-- End .entry-meta -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img src="<?php bloginfo('template_url'); ?>/images/blog/post-3.jpg" alt="Post">
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-date">
                            <span class="day">11</span>
                            <span class="month">May</span>
                        </div><!-- End .entry-date -->

                        <h2 class="entry-title">
                            <a href="single.html">Post Format - Image</a>
                        </h2>

                        <div class="entry-content">
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora
                                torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper
                                vel, congue sed ligula.</p>

                            <a href="single.html" class="read-more">Read More <i
                                    class="icon-angle-double-right"></i></a>
                        </div><!-- End .entry-content -->

                        <div class="entry-meta">
                            <span><i class="icon-calendar"></i>May 11, 2018</span>
                            <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                            <span><i class="icon-folder-open"></i>
                                <a href="#">Haircuts & hairstyles</a>,
                                <a href="#">Fashion trends</a>,
                                <a href="#">Accessories</a>
                            </span>
                        </div><!-- End .entry-meta -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <nav class="toolbox toolbox-pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><span>...</span></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .col-lg-9 -->
            <?php get_template_part('content/152','content');?>

        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main><!-- End .main -->
</div>