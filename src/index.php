<?php
    $url = $_SERVER["SCRIPT_NAME"];
    $break = Explode('/', $url);
    $path = realpath(dirname(__FILE__));
    $file = $break[count($break) - 1];
    $cachefile = $path.'/cached-'.substr_replace($file ,"",-4).'.html';
    $cachetime = 120;
    
    date_default_timezone_set('Europe/Helsinki');
    setlocale(LC_ALL, 'fi_FI.UTF-8');
    
    if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) :
        echo "<!-- Amazing hand crafted super cache, generated ".date('H:i', filemtime($cachefile))." -->";
        include($cachefile);
    else :
    ob_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rolle &mdash; A front end developer, web designer &mdash; Roni Laukkarinen</title>
        <meta name="description" content="Roni Laukkarinen is a Finnish web developer, Twitter freak, craft beer enthusiast. Find out more.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/layout.css">

        <link rel="shortcut icon" href="images/ig-avatar.png">
        <link rel="apple-touch-icon" href="images/icon-ipad.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icon-ipad.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/icon-retina.png">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <div id="page">

        <div class="slide">

            <div class="container">

                <section class="main-section">
                    <header>
                        <img src="images/ig-avatar.png" alt="Roni Laukkarinen" class="avatar" />
                        <h1>Roni Laukkarinen</h1>
                        <p>This is <strong>rolle.wtf</strong> &mdash; my contact card online. People who know me call me Rolle. That's me. I've been active in the Internet since the 90s, so this page is a gateway to all those places and profiles I've been building up during the years.</p>
                    </header>
                </section>

            </div>

        </div>

        <div class="items">

            <div class="item item-rollemaa grid-sizer">
            <a href="http://www.rollemaa.org" class="overlay-link"><p>Visit</p></a>

                <header class="item-header">
                <div class="shade"></div>
                
                    <?php
                        $url = "http://www.rollemaa.org/feed/";
                        $rss = simplexml_load_file($url);
                    ?>
                            
                        <?php if($rss) : ?>

                            <p>Latest blog post <?php

                                include_once('inc/time-since.php');
                                echo aika(abs(strtotime($rss->channel->lastBuildDate . " GMT")), time());

                            ?> ago.</p>

                        <?php endif; ?>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-rss"></span>A personal blog: Rollemaa.org</h4>

                    <p>Rollemaa.org (previously rolleweb.net) was my first weblog. Currently published over 1500 articles. Blogging couple of times per month, but used to blog almost daily.</p>

                    <div class="notes">
                        <p><span class="fa fa-flag"></span>Language: Finnish</p>
                    </div>
    
                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-twitter">
            <a href="http://www.twitter.com/rolle" class="overlay-link"><p>Tweet</p></a>

                <header class="item-header">
                <div class="shade"></div>
                
                    <p class="twitter"></p>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-twitter"></span>Twitter</h4>

                    <p>I joined Twitter in 8th of January in 2008. Twitter has been my favorite social media channel ever since.</p>

                    <div class="notes">
                        <p><span class="fa fa-flag"></span>Language: Mostly Finnish, sometimes English</p>
                    </div>

                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-company">

                <header class="item-header">
                <div class="shade"></div>
                
                    <?php
                        $url = "https://www.dude.fi/feed/";
                        $rss = simplexml_load_file($url);
                    ?>
                            
                        <?php if($rss) : ?>

                            <p>Blogged <?php

                                echo aika(abs(strtotime($rss->channel->lastBuildDate . " GMT")), time());

                            ?> ago.</p>

                        <?php endif; ?>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-flask"></span>A web design agency: Digitoimisto Dude Oy</h4>

                    <p>In 22th of May 2013 I founded my first company with my graphic-designer-friend Juha Laitinen and I've been entrepreneur from that moment. We are strictly local, Jyväskylä based boutique agency. Our main products are bespoke WordPress-websites and webstores.</p>

                    <p>Over 100 successful projects done by 2015 (just under 2 years of service).</p>

                        <ul class="links">
                            <li><a href="https://www.dude.fi"><span class="fa fa-home"></span>Company website</a></li>
                            <li><a href="mailto:moro@dude.fi"><span class="fa fa-envelope"></span>Inquiries</a></li>
                            <li><a href="https://github.com/digitoimistodude"><span class="fa fa-github"></span>GitHub</a></li>
                            <li><a href="https://www.facebook.com/digitoimistodude"><span class="fa fa-facebook"></span>Facebook page</a></li>
                            <li><a href="http://www.linkedin.com/company/digitoimisto-dude-oy"><span class="fa fa-linkedin"></span>LinkedIn</a></li>
                            <li><a href="https://plus.google.com/b/104415581795532131383/104415581795532131383"><span class="fa fa-google-plus"></span>Google+</a></li>
                            <li><a href="https://www.youtube.com/channel/UC91UDU7HjbiZS9FN8tG7YlQ"><span class="fa fa-youtube"></span>Our Youtube-video</a></li>
                        </ul>

                    <div class="notes">
                        <p><span class="fa fa-flag"></span>Local Finnish company, Finnish language and Finnish customers. At the moment.</p>
                    </div>

                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-medium">
            <a href="https://medium.com/@rolle" class="overlay-link"><p>Read</p></a>

                <header class="item-header">
                <div class="shade"></div>
                
                    <?php
                        $url = "https://medium.com/feed/@rolle";
                        $rss = simplexml_load_file($url);
                    ?>
                            
                        <?php if($rss) : ?>

                            <p>Last article written <?php

                                echo aika(abs(strtotime($rss->channel->item->pubDate . " GMT")), time());

                            ?> ago.</p>

                        <?php endif; ?>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-medium"></span>Medium</h4>

                    <p>I wrote my first blog post in Medium titled "My first article in Medium — Thoughts after writing over 10 years in 7 different blogs" in 8th of April, 2015. I love this writer-reader-oriented site and its beautiful simplicity.</p>

                    <div class="notes">
                        <p><span class="fa fa-flag"></span>Language: English only</p>
                    </div>

                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-code">
                <header class="item-header">
                <div class="shade"></div>
                
                    <?php
                        $url = "https://github.com/ronilaukkarinen.atom";
                        $rss = simplexml_load_file($url);
                    ?>
                            
                        <?php if($rss) : ?>

                            <p>Last line of code <?php

                                echo aika(abs(strtotime($rss->updated . " GMT")), time());

                            ?> ago.</p>

                        <?php endif; ?>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-code"></span>Code</h4>

                    <p>As I am a full time Front End / Semi stack developer, I produce lots of lines of code. I use mainly git and mercurial for version control.</p>

                    <ul class="links">
                        <li><a href="https://github.com/ronilaukkarinen"><span class="fa fa-github"></span>My personal projects</a></li>
                        <li><a href="https://github.com/digitoimistodude"><span class="fa fa-github"></span>My professional projects</a></li>
                        <li><a href="https://bitbucket.org/ronilaukkarinen"><span class="fa fa-bitbucket"></span>Bitbucket</a></li>
                    </ul>                

                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-beer">

                    <?php include('inc/untappd/index.php'); ?>

                <div class="item-wrapper">

                    <h4><span class="fa fa-beer"></span> Beer</h4>

                    <p>I've tasted over 1000 different beers since 2010. I currently have a Finnish beer blog and Untappd profile (a social media for beer enthusiasts).</p>

                    <ul class="links">
                        <li><a href="http://www.huurteinen.fi"><span class="fa fa-rss"></span>Huurteinen.fi - A beer blog</a></li>
                        <li><a href="https://untappd.com/user/rolle"><img src="images/untappd.svg" alt="Untappd" />Untappd beer check-ins</a></li>
                    </ul>               

                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-photos">

                <?php
                 
                /**
                   * Instagram PHP API
                   *
                   * @link https://github.com/cosenary/Instagram-PHP-API
                   * @author Christian Metz
                   */
                
                  include 'inc/instagram/index.php';
                  
                ?>

                <div class="item-wrapper">

                    <h4><span class="fa fa-photo"></span> Photos</h4>

                    <p>I have two cameras (Canon EOS 400D &amp; Nikon D40) and a flagship Android Phone Oneplus One. I've been photographing a long time, but only for fun and as a hobby.</p>

                    <ul class="links">
                        <li><a href="http://instagram.com/rolle_"><span class="fa fa-instagram"></span>Instagram</a></li>
                        <li><a href="https://www.flickr.com/photos/rolle-/"><span class="fa fa-flickr"></span>Flickr</li>
                        <li><a href="http://rolle.vsco.co/"><img src="images/vsco.svg" alt="VSCO" />VSCO</li>    
                    </ul>               

                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-movies">

                <?php
                    $url = "http://trakt.tv/users/rolle/history.atom?slurm=addddddb526608d7639d3b07e176f2ea";
                    $rss = simplexml_load_file($url);
                    $image = $rss->entry->children($namespaces['media'])->thumbnail->attributes()->url;

                ?>

                <header class="item-header" style="background-image: url('<?php echo $image; ?>');">
                <div class="shade"></div>
                            
                        <?php if($rss) : ?>

                            <p>Watched last time <?php

                                echo aika(abs(strtotime($rss->updated . " GMT")), time());

                            ?> ago.</p>

                        <?php endif; ?>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-film"></span>Movies</h4>

                    <p>I'm an escapist and usually want to relax with a good movie or tv show. I have created a habit to review every film I have watched. I've written over 2000 short movie reviews since 2006.</p>

                    <ul class="links">
                        <li><a href="http://letterboxd.com/rolle/"><img src="images/letterboxd.svg" alt="Letterboxd" />Letterboxd</a></li>   
                    </ul>      

                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-more">
                <div class="item-wrapper">
                
                    <h4>More?</h4>

                    <p>Oh, you bet! I'm registered in over 160 social networks, I blog in 8 blogs, I have hundreds of projects and I'm practically all over the Internet.</p>

                    <p>I will update this page every time I get something new going on and it's on my ToDo-list to code great things here. More stuff definitely coming soon...</p>

                    <ul class="links">
                        <li><a href="https://github.com/ronilaukkarinen/rolle.wtf/commits?author=ronilaukkarinen"><span class="fa fa-github"></span>See the progress in GitHub</a></li>
                    </ul>

                </div><!--/.item-wrapper-->
            </div><!--/.item-->

        </div>

        <div class="footer-container">

            <footer class="wrapper">

                <p>Code with passion. This page is 100% open source. <a href="https://github.com/ronilaukkarinen/rolle.wtf">View in <span class="fa fa-github"></span> Github</a>.</p>

                <p>
                    <?php
                        $url = "https://github.com/ronilaukkarinen/rolle.wtf/commits/master.atom";
                        $rss = simplexml_load_file($url);
                    ?>
                            
                        <?php if($rss) : ?>

                            <p><a class="last-commit" href="<?php echo $rss->entry->link['href']; ?>">Updated <?php

                                echo aika(abs(strtotime($rss->entry->updated . " GMT")), time());

                            ?> ago: <i><?php echo $rss->entry->title; ?></i>.</a></p>

                        <?php endif; ?>                
                </p>

            </footer>

        </div>

    </div>


        <script src="js/all.js"></script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-64522118-1', 'auto');
          ga('send', 'pageview');
        
        </script>
       
    </body>
</html>

<?php

     $cached = fopen($cachefile, 'w');
     fwrite($cached, ob_get_contents());
     fclose($cached);
     ob_end_flush();
    
endif;

?>