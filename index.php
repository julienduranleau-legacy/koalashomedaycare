<?php

$langParam = isset($_GET['lang']) ? $_GET['lang'] : '';

if ($langParam == 'fr' || $langParam == 'en') {
    $lang = include('lang/'.$langParam.'.php');
} else {
    $lang = include('lang/en.php');  
} 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $lang['page.title'] ?></title>
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="description" content="<?php echo $lang['meta.desc'] ?>">
        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="stylesheet" type="text/css" href="css/compiled/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="centeredContainer">
                    <h1 class="logo"><a href="/"><img src="images/logo.png" alt="Les Petits Koalas" /></a></h1>
                    <div class="menu">
                        <a class="anchor dekstop-only" href="#<?php echo $lang['menu.homeHash'] ?>"><?php echo $lang['menu.home'] ?></a>
                        <a class="anchor dekstop-only" href="#<?php echo $lang['menu.daycareHash'] ?>"><?php echo $lang['menu.daycare'] ?></a>
                        <a class="anchor dekstop-only" href="#<?php echo $lang['menu.contactHash'] ?>"><?php echo $lang['menu.contact'] ?></a>
                        <a href="<?php echo $lang['menu.otherLangUrl'] ?>"><?php echo $lang['menu.otherLang'] ?></a>
                    </div>     
                </div>
            </header>
            <div id="<?php echo $lang['menu.homeHash'] ?>" class="headerImageBloc">
                <div class="centeredContainer">
                    <div class="textContainer">
                        <p class="headerTitle1"><?php echo $lang['header.1'] ?></p>
                        <p class="headerTitle2"><?php echo $lang['header.2'] ?></p>
                        <p class="headerTitle3"><?php echo $lang['header.3'] ?></p>
                    </div>
                </div>
            </div>
            <div id="<?php echo $lang['menu.daycareHash'] ?>" class="intoTextBloc">
                <div class="centeredContainer">
                    <div class="camilleInfos">
                        <img src="images/profile-pic.png" />
                        <p class="name"><?php echo $lang['name'] ?></p>
                        <p class="infos"><?php echo $lang['daycare.side.text'] ?></p>
                    </div>
                    <div class="textContent">
                        <h2><?php echo $lang['daycare.title'] ?></h2>
                        <p class="first"><?php echo $lang['daycare.text.1'] ?></p>
                        <p><?php echo $lang['daycare.text.2'] ?></p>
                        <div class="intoText3">
                            <p class="left"><?php echo $lang['daycare.text.3'] ?></p>
                            <p class="right"><?php echo $lang['daycare.text.3b'] ?></p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tags">
                            <div class="tag">
                                <img src="images/animals-icon.png" />
                                <span><?php echo $lang['daycare.tags.animals'] ?></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tag">
                                <img src="images/no-smoke-icon.png" />
                                <span><?php echo $lang['daycare.tags.smoke'] ?></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tag third">
                                <img src="images/red-cross-icon.png" />
                                <span class="desktop"><?php echo $lang['daycare.tags.red-cross'] ?></span>
                                <span class="mobile"><?php echo $lang['daycare.tags.red-cross-mobile'] ?></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="routineBloc">
                <div class="sideImage"></div>
                    
                    <div class="textContent">
                        <h2><?php echo $lang['routine.title'] ?></h2>
                        <p class="subtitle"><?php echo $lang['routine.subtitle'] ?></p>
                        <div class="list">
                            <div class="row"><div class="time">08:00 - 08:45</div><div class="desc"><?php echo $lang['routine.1'] ?></div></div>
                            <div class="row"><div class="time">08:45 - 10:15</div><div class="desc"><?php echo $lang['routine.2'] ?></div></div>
                            <div class="row"><div class="time">10:15 - 10:30</div><div class="desc"><?php echo $lang['routine.3'] ?></div></div>
                            <div class="row"><div class="time">10:30 - 12:00</div><div class="desc"><?php echo $lang['routine.4'] ?></div></div>
                            <div class="row"><div class="time">12:00 - 12:40</div><div class="desc"><?php echo $lang['routine.5'] ?></div></div>
                            <div class="row"><div class="time">12:40 - 13:00</div><div class="desc"><?php echo $lang['routine.6'] ?></div></div>
                            <div class="row"><div class="time">13:00 - 15:00</div><div class="desc"><?php echo $lang['routine.7'] ?></div></div>
                            <div class="row"><div class="time">15:00 - 15:15</div><div class="desc"><?php echo $lang['routine.8'] ?></div></div>
                            <div class="row"><div class="time">15:15 - 16:15</div><div class="desc"><?php echo $lang['routine.9'] ?></div></div>
                            <div class="row"><div class="time">16:15 - 17:30</div><div class="desc"><?php echo $lang['routine.10'] ?></div></div>
                        </div>
                    </div>

            </div>
            <div id="<?php echo $lang['menu.contactHash'] ?>" class="contactBloc">
                <div class="centeredContainer">
                    <div class="mapContainer">
                        <a href="https://www.google.ca/maps/place/35+Nathaniel+Crescent,+Kitchener,+ON+N2P+1L3/@43.3921085,-80.4505202,17z/data=!3m1!4b1!4m5!3m4!1s0x882b8aa9ef2ef681:0xe023693c7ccf676c!8m2!3d43.3921085!4d-80.4483262" target="_blank">
                            <img src="images/contact-map.png" />
                        </a>
                    </div>
                    <div class="textContent">
                        <h2><?php echo $lang['contact.title'] ?></h2>
                        <h3 class="name"><?php echo $lang['name'] ?></h3>
                        <div class="phones">
                            <div class="phone"><span><?php echo $lang['contact.phone'] ?></span> 226 647 2365</div>
                            <div class="phone"><span><?php echo $lang['contact.cellphone'] ?></span> 514 880 1286</div>
                        </div>
                        <p class="address">
                            35 Nathaniel Cresent, Kitchener,<br/>
                            On, N2P 1L3 <a href="https://www.google.ca/maps/place/35+Nathaniel+Crescent,+Kitchener,+ON+N2P+1L3/@43.3921085,-80.4505202,17z/data=!3m1!4b1!4m5!3m4!1s0x882b8aa9ef2ef681:0xe023693c7ccf676c!8m2!3d43.3921085!4d-80.4483262" target="_blank">(<?php echo $lang['contact.seeOnMap'] ?>)</a>
                        </p>
                        <h3 class="writeUs"><?php echo $lang['contact.writeUs'] ?></h3>
                        <a id="emailLink" class="emailLink" href="#"></a>
                        <script type="text/javascript">
                            var link = document.getElementById('emailLink')
                            link.href = "mail"+"to:"+"cam.ille"+"@"+"hotmail"+"."+"com"
                            link.innerHTML = "cam.ille"+"@"+"hotmail"+"."+"com"
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/menu.js"></script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-80180561-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>