<?php
  if(preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])&&$_GET['v']!='d'){
    header('Location: /m/');exit();
  }
  ob_start( "ob_gzhandler");
?>
    <!DOCTYPE html>
    <html lang=en-US>

    <head>
        <title>BALAN S.P, Web designer, HTML5, PHP, Bangalore</title>
        <meta http-equiv=Cache-Control content="public, max-age=5400, pre-check=5400">
        <meta http-equiv=Expires content=<?php echo date(DATE_RFC822,strtotime( " 7 day ")); ?>>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
        <meta name=google-site-verification content=7MHCAttQQ8l26vik0mkqOAJ2wM2gaCUAYO2qa2xz9LE />
        <meta name=description content="Hi, I am Balan S.P a front-end web developer from a place near to Kanyakumari, working as Technology Analyst at Infosys Bangalore and i like Web designing..." />
        <meta name=keywords content="Balan S.P, Bangalore" />
        <meta name=robots content=index,follow />
        <meta name=author content="Balan S.P" />
        <meta name=geo.placename content="Electronic City Phase II, Bangalore, India">
        <link rel=author href=https://plus.google.com/108292393977305977179 />
        <link rel=icon href=favicon.ico type=image/x-icon />
        <link rel="shortcut icon" href=favicon.ico type=image/x-icon />
        <link rel=stylesheet href=css/styles.php />
        <link href='http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise' rel=stylesheet type=text/css>
        <!--[if lt IE 9]> <style>#pbar{display:none}.txt{overflow:hidden}</style> <script type=text/javascript>(function(D,B){var H="3.7.0";var K=D.html5||{};var G=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i;var L=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i;var x;var F="_html5shiv";var N=0;var z={};var J;(function(){try{var b=B.createElement("a");b.innerHTML="<xyz></xyz>";x="hidden" in b;J=b.childNodes.length==1||function(){B.createElement("a");var c=B.createDocumentFragment();return typeof c.cloneNode=="undefined"||(typeof c.createDocumentFragment=="undefined"||typeof c.createElement=="undefined")}()}catch(a){x=true;J=true}})();function I(c,a){var d=c.createElement("p"),b=c.getElementsByTagName("head")[0]||c.documentElement;d.innerHTML="x<style>"+a+"</style>";return b.insertBefore(d.lastChild,b.firstChild)}function C(){var a=E.elements;return typeof a=="string"?a.split(" "):a}function y(b){var a=z[b[F]];if(!a){a={};N++;b[F]=N;z[N]=a}return a}function A(d,c,a){if(!c){c=B}if(J){return c.createElement(d)}if(!a){a=y(c)}var b;if(a.cache[d]){b=a.cache[d].cloneNode()}else{if(L.test(d)){b=(a.cache[d]=a.createElem(d)).cloneNode()}else{b=a.createElem(d)}}return b.canHaveChildren&&(!G.test(d)&&!b.tagUrn)?a.frag.appendChild(b):b}function w(b,f){if(!b){b=B}if(J){return b.createDocumentFragment()}f=f||y(b);var a=f.frag.cloneNode(),h=0,c=C(),d=c.length;for(;h<d;h++){a.createElement(c[h])}return a}function v(b,a){if(!a.cache){a.cache={};a.createElem=b.createElement;a.createFrag=b.createDocumentFragment;a.frag=a.createFrag()}b.createElement=function(c){if(!E.shivMethods){return a.createElem(c)}return A(c,b,a)};b.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+C().join().replace(/[\w\-]+/g,function(c){a.createElem(c);a.frag.createElement(c);return'c("'+c+'")'})+");return n}")(E,a.frag)}function M(b){if(!b){b=B}var a=y(b);if(E.shivCSS&&(!x&&!a.hasCSS)){a.hasCSS=!!I(b,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")}if(!J){v(b,a)}return b}var E={elements:K.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:H,shivCSS:K.shivCSS!==false,supportsUnknownElements:J,shivMethods:K.shivMethods!==false,type:"default",shivDocument:M,createElement:A,createDocumentFragment:w};D.html5=E;M(B)})(this,document);</script> <![endif]-->
        <!--[if lte IE 7]> <![endif]-->
        <meta property=og:url content=http://www.balsoft.in />
        <meta property=og:image content=http://www.balsoft.in/balsoft.jpg />
        <meta property=og:title content="Balan's personal website" />
        <meta property=og:site_name content=www.balsoft.in />
        <meta property=og:description content="Hi, I am Balan S.P a front-end web developer from a place near to Kanyakumari, working as Technology Analyst at Infosys Bangalore and i like Web designing..." />
        <meta property=og:type content=website />
        <meta property=og:locale content=en_us />
        <script>
            var pbar, g = 0;

            function p() {
                window.scrollTo(0, 0);
                var a = 0,
                    b = 0,
                    c = document.getElementsByTagName("img");
                pbar = document.getElementById("pbar");
                for (var j = 0; j < c.length; j++) {
                    if (c[j].complete) {
                        a++
                    }
                    b = Math.round((a * 100) / c.length) - 1;
                    if (b > g) {
                        g = b;
                        pbar.style.width = g + "%"
                    }
                }
                if (a < c.length) {
                    setTimeout(function () {
                        p()
                    }, 100)
                }
            }
            try {
                document.addEventListener("DOMContentLoaded", p, false)
            } catch (e) {}

            function hp() {
                $(pbar).width("100%").slideUp("slow");
                $("#load").hide("slow");
            }

        </script>
    </head>

    <body onload=hp() oncontextmenu="return(false);"> <img id=load src=images/dot.gif alt title />
        <div id=pbar></div>
        <?php flush(); ?>
        <header>
            <nav>
                <a href=#home title=home class=home></a>
                <a href=#about title="about me" class=about></a>
                <a href=#photos title="my clicks" class=portfolio></a>
                <a href=#contact title="contact me" class=contact></a>
                <div class=clear></div>
                <div class=sline></div>
            </nav>
        </header>
        <section id=home> <img id=balan src=images/balan.png alt="Balan S.P" title="balan s.p" width=309 height=434 /><img id=aero src=images/aero.png alt title /> <img id=walle src=images/walle.png alt="My Wall-E" title="My Wall-E" /> <img id=tada src=images/tada.png alt title /> <img id=thanks src=images/thanks.png alt title /> <img id=visiting src=images/visiting.png alt title />
            <article class=secIntro>
                <p><strong>hi</strong>, I am</p>
                <h1 class=balan>b<span>a</span>lan s.p</h1>
                <p class=center>a front-end <strong>web developer</strong> from a place near to <strong>Kanyakumari</strong>, working as Technology Analyst at <strong>Infosys</strong> Bangalore and i like <strong id=like>Web designing...</strong> </p>
                <div class=scrollHldr>
                    <div class=scrollTxt></div>
                    <div id=scroll></div>
                </div>
            </article>
            <article class=secAbout id=about>
                <header>
                    <h1>About Me</h1> </header>
                <div class=aboutCnt>
                    <p>Date of Birth : <span>Aug 02</span>, 1985</p>
                    <p>Martial Status : <span>Single</span> </p>
                    <p>Languages : Tamil and <span>English</span> </p>
                    <h2 class=yellow>Programming</h2>
                    <p>Technologies : <span>HTML5</span>, CSS3, <span>AngularJs</span>, Backbone,Bootstrap, Object Oriented JavaScript, <span>JQuery</span>, SEO, <span>web designing</span> and Photo editing.</p>
                    <p>Web Servers : Apache Http Server</p>
                    <p>Frame Work : <span>Codeigniter</span>, Smarty</p>
                    <p>DBMS: <span>Mongo</span>, MySQL, PostgreSQL</p>
                    <h2 class=gray>Work Experience</h2>
                    <ul> <img id=cock src=images/cock.png alt title />
                        <li>Working as <span>Technology Analyst</span> in <span>Infosys</span> Limited, Bangalore.</li>
                        <li>worked as <span>Programmer Analyst</span> in <span>Cognizant Technology Solutions</span> , Chennai and Bangalore.</li>
                        <li>worked as <span>Senior Software Engineer</span> in Web Development team at <span>Cape Consultancy Services Pvt. Ltd</span>, Nagercoil.</li>
                        <li>Worked as <span>Research Assistant</span> at Centre for Aerospace Systems Design and Engineering <span>(CASDE)</span> at Department of Aerospace Engineering, <span>IIT Bombay</span>.</li>
                        <li>Won <span>First Prize</span> for the <span>Web Designing</span> Contest and <span>Third Prize</span> for Software Development Contest held during <span>Empower I.T</span> 2008 State Level Campaign jointly hosted by <span>ELCOT, NASSCOM & Govt of Tamil Nadu</span>.</li>
                    </ul>
                </div>
                <div class=clear></div>
            </article>
            <article class=secPortfolio id=portfolio>
                <header>
                    <h1>Portfolio</h1> </header>
                <div class=portSldHldr>
                    <div class="seek prev" rel=portSlider></div>
                    <div id=portSlider class=slider>
                        <div class=slide>
                            <div class=imgHolder>
                                <div class=imgCap></div> <img src=images/portfolio/depsi.jpg alt title /> </div>
                            <div class=descHolder>
                                <h3>Depsi - Flash Animation</h3>
                                <h4 class=url>www.balsoft.in/old/second-site/player.php?play=depsi</h4>
                                <p>Flash animation created just for fun. When there is allige that some soft drinks contains pesticides. Ref: www.goo.gl/fUUxko</p> <a class=btnLook href=old/second-site/player.php?play=depsi title="take a look" target=_blank>Take a look</a> </div>
                            <div class=clear></div>
                        </div>
                    </div>
                    <div class="seek next" rel=portSlider></div>
                    <div class=clear></div>
                </div>
            </article>
            <article class=secPhoto id=photos>
                <header>
                    <h1>My Clicks</h1>
                    <div class=camera></div> <img src=images/flash.png class=flash alt> </header>
                <div class=frameHldr> <img class="seek prev" src=images/back.png title=back alt=back rel=photoSlider />
                    <div class=frame>
                        <div id=photoSlider class=slider>
                            <div class=slide>
                                <div class="imgCaption top">&nbsp;</div> <img width=609 height=398 src=photos/0.jpg alt title />
                                <div class="imgCaption bottom">Aunty house's, parvathipuram..nagercoil...</div>
                            </div>
                        </div>
                    </div> <img class="seek next" src=images/fwd.png title=next alt=next rel=photoSlider />
                    <div class=clear></div>
                </div>
            </article>
            <article class=secContact id=contact>
                <header>
                    <h1>Contact Me</h1> <img id=contactAero class=aero src=images/aero.png alt title />
                </header>
                <div class=cntHolder>
                    <div class=contactHldr>
                        <p>Email : balan.spx@gmail.com</p>
                        <p>Phone : +91 9900052285</p>
                        <div class=html></div>
                        <div class=web>
                            <ul>
                                <li><a href=old/second-site/ title="my second website - 2010">my second website - 2010</a> </li>
                                <li><a href="old/first-site" title="my first website - 2007"> my first website - 2007</a> </li>
                            </ul>
                        </div>
                    </div>
                    <form method=post action=saveMsg.php class=formHldr>
                        <h4>Thanks for visiting my website.</h4>
                        <div class=ctrl> <label for=txtName>Name* :</label> <input type=text id=txtName class=txt /> </div>
                        <div class=ctrl> <label for=txtEmail>Email* :</label> <input type=text id=txtEmail class=txt /> </div>
                        <div class=ctrl> <label for=txtPhno>Phone :</label> <input type=text id=txtPhno class=txt maxlength=10 /> </div>
                        <div class=ctrl> <label for=txtMsg>Message* :</label> <textarea class=msg rows=4 id=txtMsg></textarea> </div> <input type=submit value=send class=send /> </form>
                    <div class=socialHldr>
                        <p>get connected via</p>
                        <div class=iconHldr>
                            <div>
                                <a href=https://www.facebook.com/balan.sp target=_blank class="icon iconFb" title=facebook></a>
                                <a href=https://plus.google.com/108292393977305977179 target=_blank class="icon gplus" title="google plus"></a>
                                <a href=http://www.linkedin.com/pub/balan-sp/46/866/600 target=_blank class="icon linked" title="linked in"></a>
                                <a href=http://profile.yahoo.com/MTLSBP6IF6EQJFAEN2PQH6UU4Q/ target=_blank class="icon yahoo" title=yahoo></a>
                                <div class=clear></div>
                            </div>
                        </div>
                    </div>
                    <div class=clear></div>
                </div>
            </article>
            <div class=line></div>
            <footer>
                <p>&copy; only to Balan s.p :)</p>
            </footer>
        </section>
        <div class=line id=line></div>
        <script type=text/javascript src=js/jquery-1.7.1.min.php></script>
        <script>
            (function (m, l, g, i, k, n, a) {
                m.GoogleAnalyticsObject = k;
                m[k] = m[k] || function () {
                    (m[k].q = m[k].q || []).push(arguments)
                }, m[k].l = 1 * new Date();
                n = l.createElement(g), a = l.getElementsByTagName(g)[0];
                n.async = 1;
                n.src = i;
                a.parentNode.insertBefore(n, a)
            })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");
            ga("create", "UA-45600345-1", "balsoft.in");
            ga("send", "pageview");

        </script>
    </body>

    </html>
