<?php
$cachefile = 'cached-index.html';
$cachetime = 1800;
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    include($cachefile);
    echo "<!-- Amazing hand crafted super cache, generated ".date('H:i', filemtime($cachefile))." -->";
    exit;
}
ob_start();
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
                            
                        <a href="https://instagram.com/p/4FR3j8m0Zc/" title="Photo taken 18th of June, 2015.">
                            <img src="images/ig-avatar.png" alt="Roni Laukkarinen" class="avatar" />
                        </a>

                        <h1>Roni Laukkarinen</h1>
                        <p>I build websites and tweet a lot &mdash; among other things. People call me Rolle and <strong>rolle.wtf</strong> is my contact card online. I've been active in the Internet since the late 90s and in some point lost track of all the places and profiles I've been building up during the years. Hoping to get back on track with this page.</p>

                    </header>
                </section>

            </div>

        </div>

        <div class="items">

            <div class="item item-contact grid-sizer">

                <header class="item-header">
                <div class="shade"></div>

                    <?php include('inc/last-active-irc.php'); ?>              

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-paper-plane"></span>Contact</h4>

                    <p>Getting contact information should be the easiest thing on the website. I'm everywhere, so contacting me is not a problem. You can get in touch best by tweeting me or sending an e-mail (yes, even better than calling me directly).</p>

                    <p>I'm one of those old-schoolers who use IRC. I'm using nick rolle in Quakenet and rolle_ in IRCnet. Remember to check /whois. If you are wondering what's that geeky chat on the header of this box, that's #pulina at Quakenet.</p>

                    <ul class="links">
                        <li><a href="skype:roni.laukkarinen"><span class="fa fa-skype"></span>Skype</a></li>
                        <li><a href="mailto:roni@dude.fi"><span class="fa fa-envelope"></span>E-mail</a></li>
                        <li><a href="telegram:+358451271611"><img src="images/telegram.svg" alt="Telegram" />Telegram</a></li>
                        <li><a href="whatsapp:+358451271611"><img src="images/whatsapp.svg" alt="WhatsApp" />WhatsApp</a></li>
                        <li><a href="http://www.pulina.fi"><span class="fa fa-slack"></span>Internet Relay Chat</a></li>
                    </ul>
    
                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-rollemaa">
            <a href="http://www.rollemaa.org" class="overlay-link"><p>Visit</p></a>

                <header class="item-header">
                <div class="shade"></div>
                
                    <?php
                        $url = "http://www.rollemaa.org/feed/";
                        $rss = simplexml_load_file($url);
                    ?>
                            
                        <?php if($rss) : ?>

                            <p>Last update <?php

                                include_once('inc/time-since.php');
                                echo " ".aika(abs(strtotime($rss->channel->lastBuildDate . " GMT")), time())." ";

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

                            <p>Last update <?php

                                echo " ".aika(abs(strtotime($rss->channel->lastBuildDate . " GMT")), time())." ";

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

                                echo " ".aika(abs(strtotime($rss->channel->item->pubDate . " GMT")), time())." ";

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

                                $codetime = aika(abs(strtotime($rss->updated . " GMT")), time());
                                
                                if(!empty($codetime)) :
                                    $codetime = " ". aika(abs(strtotime($rss->updated . " GMT")), time()). " ";
                                else :
                                    $codetime = " a moment ";
                                endif;

                                echo $codetime;

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
                        <li><a href="http://www.codeivate.com/users/rolle"><span class="fa fa-code"></span>Codeivate</a></li>
                        <li><a href="https://wakatime.com/@rolle"><img src="images/wakatime.svg" alt="WakaTime" />WakaTime</a></li>
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

            <div class="item item-problemsolvin">
            <a href="http://problemsolv.in" class="overlay-link"><p>Visit</p></a>

                <header class="item-header">
                <div class="shade"></div>
                
                    <?php
                        $url = "http://problemsolv.in/feed/";
                        $rss = simplexml_load_file($url);
                    ?>
                            
                        <?php if($rss) : ?>

                            <p>Last update <?php

                                include_once('inc/time-since.php');
                                echo " ".aika(abs(strtotime($rss->channel->lastBuildDate . " GMT")), time())." ";

                            ?> ago.</p>

                        <?php endif; ?>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-rss"></span>Problemsolv.in - IT blog</h4>

                    <p>I think problemsolv.in was my fourth blog. I'm an analytic problem solver and every time I get something solved, I usually write the solution down to my massive note file where I'll find it again if I forget about it next time having the same problem.</p>

                    <p>Problemsolv.in was born, because instead of writing those solutions down just for myself, I could help others by blogging about them. Website redesigned in 20th of July, 2015.</p>

                    <div class="notes">
                        <p><span class="fa fa-flag"></span>Language: English</p>
                    </div>
    
                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-aboutme">

                <header class="item-header">
                <div class="shade"></div>
                            
                    <p>No longer maintained.</p>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-user"></span> Legacy services</h4>

                    <p>I signed up in About.me in 2009. It was meant to be like this page today - to collect all the links and social medias in the same place. I had a dozen of social media profiles already in 2009. However, I soon noticed the service is lacking features, so stopped using it. But there it is, feel free to visit. The picture is from 2009.</p>

                    <p>Below I'm listing also other services where I'm not active any more.</p>

                    <ul class="links">
                        <li><a href="http://about.me/rolle"><img src="images/aboutme.svg" alt="About.me" />About.me</li>
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

                            <p>On the couch <?php

                                $onthecouch = " ".aika(abs(strtotime($rss->updated . " GMT")), time())." ";
                                if(empty($onthecouch)) :
                                    $onthecouch = " a moment ";
                                else :
                                    $onthecouch = " ".aika(abs(strtotime($rss->updated . " GMT")), time())." ";
                                endif;
                                    echo $onthecouch;

                            ?> ago.</p>

                        <?php endif; ?>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-film"></span>Movies &amp; TV</h4>

                    <p>I'm an escapist and usually want to relax with a good movie or tv show. I have created a habit to review every film I have watched. I've written over 2000 short movie reviews since 2006.</p>

                    <ul class="links">
                        <li><a href="http://letterboxd.com/rolle/"><img src="images/letterboxd.svg" alt="Letterboxd" />Letterboxd</a></li>
                        <li><a href="http://www.imdb.com/mymovies/list?l=27761618"><img class="imdb" src="images/imdb.svg" alt="IMDb" />IMDb</a></li>
                        <li><a href="http://trakt.tv/users/rolle"><img src="images/trakt.svg" alt="Trakt" />Trakt</a></li>
                        <li><a href="http://rollemaa.org/leffat/"><span class="fa fa-rss"></span>My movie blog</a></li>
                    </ul>      

                </div><!--/.item-wrapper-->
            </div><!--/.item-->


            <div class="item item-tasks">

                    <?php

                        include('inc/todoist/index.php');

                    ?>

            </div><!--/.item-->

            <div class="item item-facebook">
                <div class="item-wrapper">

                    <h4><span class="fa fa-facebook"></span>Facebook</h4>

                    <p>Meh. I don't use Facebook that much any more. It's way too crowded and annoying. I first thought I won't add the Facebook information on this page, because I don't like it that much.</p>

                    <p>I have to use it to keep in touch with people, but I don't like the way Facebook filters the updates - the more popular you are, the more you show, the more you pay, the more visibility you get. Anyway, I have a profile and some Facebook pages. Links below.</p>

                    <ul class="links">
                        <li><a href="http://www.facebook.com/rollefb"><span class="fa fa-facebook-square"></span>My Facebook profile</a></li>
                        <li><a href="http://www.facebook.com/huurteinen"><span class="fa fa-facebook-square"></span>Huurteinen, a beer blog</a></li>
                        <li><a href="http://www.facebook.com/digitoimistodude"><span class="fa fa-facebook-square"></span>Digitoimisto Dude Oy, my company</a></li>
                        <li><a href="http://www.facebook.com/rollemaa"><span class="fa fa-facebook-square"></span>Rollemaa, my personal blog</a></li>
                        <li><a href="http://www.facebook.com/rollenleffat"><span class="fa fa-facebook-square"></span>My movie blog</a></li>
                        <li><a href="http://www.facebook.com/ericeric.fi"><span class="fa fa-facebook-square"></span>Eric &amp; co. - art</a></li>
                        <li><a href="http://www.facebook.com/problemsolvin"><span class="fa fa-facebook-square"></span>Problemsolv.in, IT-blog</a></li>
                        <li><a href="https://www.facebook.com/pages/IRC-kanava-kuurosokeille/108039709259135"><span class="fa fa-facebook-square"></span>IRC channel for Finnish deaf and blind</a></li>
                        <li><a href="https://www.facebook.com/pulinairc"><span class="fa fa-facebook-square"></span>Pulina IRC channel</a></li>
                    </ul>

                </div><!--/.item-wrapper-->
            </div><!--/.item-->

            <div class="item item-music">

                    <?php

                        include('inc/lastfm/index.php');

                    ?>

                <div class="item-wrapper">

                    <h4><span class="fa fa-music"></span> Music</h4>

                    <p>I love music, who doesn't? The difference is, I also love the geeky side of it. Like with other things, I like to keep record of my listening habits and for that Last.fm is perfect. It's been already a decade since I registered as a last.fm user in 2005.</p>
                    
                    <p>My music taste is quite elastic and versatile, so please check out my Last.fm profile below to get the whole picture. I also have other profiles and you could follow me in Spotify to get my playlists and so on.</p>

                    <ul class="links">
                        <li><a href="http://www.last.fm/user/rolle-"><span class="fa fa-lastfm"></span>Last.fm</a></li>
                        <li><a href="http://bandcamp.com/roni"><img src="images/bandcamp.svg" alt="Bandcamp" />Bandcamp</a></li>
                        <li><a href="http://open.spotify.com/user/rolle-"><span class="fa fa-spotify"></span>Spotify</a></li>
                        <li><a href="http://www.deezer.com/profile/20268967"><img src="images/deezer.svg" alt="Deezer" />Deezer</a></li>
                        <li><a href="https://soundcloud.com/rolle-6"><span class="fa fa-soundcloud"></span>Soundcloud</a></li>
                        <li><a href="http://www.mikseri.net/user/roll"><span class="fa fa-headphones"></span>Mikseri</a></li>
                    </ul>               

                </div><!--/.item-wrapper-->

            </div><!--/.item-->


           <div class="item item-health">

                <?php
                    $url = "http://endo2atom.conoroneill.com/2012723";
                    $rss = simplexml_load_file($url);
                ?>

                <header class="item-header">
                <div class="shade"></div>
                            
                        <?php if($rss) : ?>

                            <p>Last workout <?php

                                $lastworkout = " ".aika(abs(strtotime($rss->entry->updated . " GMT")), time())." ";
                                if(empty($lastworkout)) :
                                    $lastworkout = " a moment ";
                                else :
                                    $lastworkout = " ".aika(abs(strtotime($rss->entry->updated . " GMT")), time())." ";
                                endif;
                                    echo $lastworkout;

                            ?> ago.</p>
                            
                        <?php endif; ?>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-heartbeat"></span>Health</h4>

                    <p>Well, I'm a full time nerd, so I'm not very healthy person, obviously. I don't excercise, but I use bicycle in the summer.</p>

                    <ul class="links">
                        <li><a href="https://www.endomondo.com/profile/2012723"><img src="images/endomondo.svg" alt="Endomondo" />Endomondo</a></li>
                        <li><a href="http://heia.me/rolle"><img src="images/heiaheia.svg" alt="HeiaHeia" />HeiaHeia</a></li>
                    </ul>

                </div><!--/.item-wrapper-->
            </div><!--/.item-->


            <div class="item item-more">
                <div class="item-wrapper">
                
                    <h4>More?</h4>

                    <p>Oh, you bet! I'm registered in over 160 social networks, I blog in 8 blogs, I have hundreds of projects and I'm practically all over the Internet.</p>

                    <p>I will update this page every time I get something new going on and it's on my ToDo-list to code great things here. More stuff definitely coming soon...</p>

                    <p>By the way, data collected on this site are displayed in real time by using APIs and RSS. Well, you can check the code yourself.</p>

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
                            
                                $updatetime = aika(abs(strtotime($rss->entry->updated)), time());
                                if(!empty($updatetime)) :
                                    $updatetime = " ". aika(abs(strtotime($rss->entry->updated)), time()+60) . " ";
                                else :
                                    $updatetime = " a moment ";
                                endif;

                                echo $updatetime;

                            ?> ago: <i><?php echo $rss->entry->title; ?></i>.</a></p>

                        <?php endif; ?>
                </p>

            </footer>

        </div>

    </div>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-64522118-1', 'auto');
          ga('send', 'pageview');
        </script>

        <script src="js/all.js"></script>
       
    </body>
</html>

<?php
$fp = fopen($cachefile, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
ob_end_flush();
?>