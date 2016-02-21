<?php ob_start("ob_gzhandler");?>
<!DOCTYPE HTML>
<html lang=en-US>
    <head>
        <title>BALSOFT - Balan S.P, Web designer, HTML5, PHP, Banglore</title>
        <meta name=viewport content="width=device-width, user-scalable=no" />
        <meta name=HandheldFriendly content=True />
        <meta http-equiv=Cache-Control content="public, max-age=5400, pre-check=5400">
        <meta http-equiv=Expires content=<?php echo date(DATE_RFC822,strtotime( " 7 day ")); ?>>
        <meta charset=utf-8>
        <meta name=description content="Hi, I am Balan S.P a front-end web developer from a place near to Kanyakumari, working as Technology Analyst at Infosys Banglore and i like Web designing..." />
        <meta name=robots content=index,follow />
        <link rel=stylesheet href=css/styles.css.php />
        <script>
            var pbar, g = 0;

            function p() {
                window.scrollTo(0, 0);
                var f = 0,
                    d = 0,
                    i = document.getElementsByTagName("img");
                pbar = document.getElementById("pbar");
                for (var h = 0; h < i.length; h++) {
                    if (i[h].complete) {
                        f++
                    }
                    d = Math.round((f * 100) / i.length) - 1;
                    if (d > g) {
                        g = d;
                        pbar.style.width = g + "%"
                    }
                }
                if (f < i.length) {
                    setTimeout(function () {
                        p()
                    }, 100)
                }
            }
            try {
                document.addEventListener("DOMContentLoaded", p, false)
            } catch (e) {}

            function hp() {
                pbar.style.width = "100%";
                pbar.style.display = "none";
                document.getElementById("load").style.display = "none"
            }

        </script>

        <body onload=hp()> <img id=load src=images/dot.gif alt title />
            <div id=pbar></div>
            <header>
                <nav>
                    <a class=home title=home href=#><img src="images/home.png" /></a>
                    <a class=about title="about me" href=#about><img src="images/about.png" /></a>
                    <a class=photography title="my clicks" href=#photography><img src="images/photography.png" /></a>
                    <a class=contact title="contact me" href=#contact><img src="images/contact.png" /></a>
                    <div class=clear></div>
                </nav> <img class=line src=images/line.png /> </header>
            <article class=secIntro id=home>
                <p class=hi><strong>hi</strong>, I am</p>
                <h1 class=balan>b<span>a</span>lan s.p</h1> <img class=banner src=images/balan.sp.png />
                <p class=center>a front-end <strong>web developer</strong> from a place near to <strong>Kanyakumari</strong> , working as Technology Analyst at <strong>Infosys</strong> Banglore and i like <strong id=like>Web designing...</strong> </p> <img class=line src=images/line.png id="about" /> </article>
            <article class=secAbout>
                <h2 class=blue>About Me</h2>
                <div class=aboutCnt>
                    <p>Date of Birth : <span>Aug 02</span>, 1985</p>
                    <p>Martial Status : <span>Single</span></p>
                    <p>Languages : Tamil and <span>English</span></p>
                    <h2 class=yellow>Programming</h2>
                    <p>Technologies : <span>HTML</span>, CSS, <span>PHP</span>, MySQL, AJAX, JavaScript, <span>JQuery</span>, SEO, <span>web designing</span> and Photo editing.</p>
                    <p>Web Servers : Apache Http Server</p>
                    <p>Frame Work : <span>Codeigniter</span>, Smarty</p>
                    <p>DBMS: <span>MySQL</span>, PostgreSQL</p>
                    <h2 class=gray>Work Experience</h2>
                    <ul>
                        <li>Working as <span>Technology Analyst</span> in <span>Infosys</span> Limited, Banglore.</li>
                        <li>Worked as <span>Programmer Analyst</span> in <span>Cognizant Technology Solutions</span> , Chennai and Banglore.</li>
                        <li>Worked as <span>Senior Software Engineer</span> in Web Development team at <span>Cape Consultancy Services Pvt. Ltd</span>, Nagercoil.</li>
                        <li>Worked as <span>Research Assistant</span> at Centre for Aerospace Systems Design and Engineering <span>(CASDE)</span> at Department of Aerospace Engineering, <span>IIT Bombay</span>.</li>
                        <li>Won <span>First Prize</span> for the <span>Web Designing</span> Contest and <span>Third Prize</span> for Software Development Contest held during <span>Empower I.T</span> 2008 State Level Campaign jointly hosted by <span>ELCOT, NASSCOM &amp; Govt of Tamil Nadu</span>.</li>
                    </ul>
                </div> <img id=walle src=images/walle.png /> <img class=line src=images/line.png /> </article>
            <article class=secPortfolio>
                <h2 class=yellow>Portfolio</h2>
                <section>
                    <div class=portfolioHldr id=PortfolioHdr>
                        <div class=portLeft> <img src=images/cap.jpg /> <img src=images/portfolio/rone.jpg /> </div>
                        <div class=portRight>
                            <h3>Ra-One Game</h3> <a href=http://www.balsoft.in/raone target=balnk>www.balsoft.in/raone</a>
                            <p>A simple game in HTML5, Canvas, CSS3 and Javascript. Developed 2012</p>
                        </div>
                        <div class=clear></div>
                    </div>
                    <div class=arrows>
                        <a href=javascript:nextPort(1)><img src=images/back.png class=back /></a>
                        <a href=javascript:nextPort(0)><img src=images/fwd.png class="fwd" /></a>
                        <div class=clear></div>
                    </div>
                </section> <img class=line src=images/line.png id="photography" /> </article>
            <article class=secPhoto>
                <h2 class=yellow>My Clicks</h2>
                <section>
                    <div class=leftbg>
                        <div class=rightbg id=photoHldr> <img src=../photos/0.jpg /> </div>
                    </div>
                    <div class=arrows>
                        <a href=javascript:nextPh(1)><img src=images/back.png class="back" /></a>
                        <a href=javascript:nextPh(0)><img src=images/fwd.png class=fwd /></a>
                        <div class=clear></div>
                    </div>
                </section> <img class=line src=images/line.png id="contact" /> </article>
            <article class=secContact>
                <h2 class=blue>Contact Me</h2>
                <form class=formHldr action=saveMsg.php method=post onsubmit="return send()">
                    <h4 id=msg>Thanks for visiting my website.</h4>
                    <div class=ctrl> <label for=txtName>Name* :</label> <input type=text class=txt id=txtName> </div>
                    <div class=ctrl> <label for=txtEmail>Email* :</label> <input type=email class=txt id=txtEmail> </div>
                    <div class=ctrl> <label for=txtPhno>Phone :</label> <input type=number maxlength=10 class=txt id=txtPhno> </div>
                    <div class=ctrl> <label for=txtMsg>Message* :</label> <textarea class=txt id=txtMsg rows=4 class=msg></textarea> </div> <input type=submit class=send value=send> </form>
            </article> <img class=line src=images/line.png />
            <footer>
                <ul>
                    <li>
                        <a href=https://www.facebook.com/balan.sp target=_blank><img src=images/fb.png /></a>
                    </li>
                    <li>
                        <a href=https://plus.google.com/108292393977305977179 target=_blank><img src=images/g+.png /></a>
                    </li>
                    <li>
                        <a href=http://profile.yahoo.com/MTLSBP6IF6EQJFAEN2PQH6UU4Q/ target=_blank><img src=images/y.png /></a>
                    </li>
                    <li>
                        <a href=http://www.linkedin.com/pub/balan-sp/46/866/600 target=_blank><img src=images/in.png /></a>
                    </li>
                </ul>
                <div class=clear></div>
            </footer> <img class=line src=images/line.png /> <a class=desktop href="http://www.balsoft.in/?v=d"> View desktop version</a>
            <script>
                var portLen = <?php
		$string = file_get_contents("../portfolio.json");
		$json=json_decode($string,true);
		echo sizeof($json["works"]);
	?>;
                var photoLen = <?php
		$dir = '../photos';
		$files = scandir($dir);
		$i=0;
		foreach($files as $file){
			if($file!="." && $file!="..")
				$i++;
		}
		echo $i;
	?>;
                var xmlhttp, port = 0,
                    photo = 0,
                    sendCnt = 0;
                var j = ["web designing", "jquery", "fire fox", "A.R.R's music", "banglore", "putta papu"],
                    l = 0;
                setInterval(function () {
                    if (l == j.length - 1) {
                        l = 0
                    } else {
                        l++
                    }
                    document.getElementById("like").innerHTML = j[l] + "..."
                }, 1750);

                function nextPort(a) {
                    if (a == 1) {
                        port--
                    } else {
                        port++
                    }
                    if (port < 0) {
                        port = 0;
                        return
                    }
                    if (port > portLen - 1) {
                        port = portLen - 1
                    }
                    document.getElementById("PortfolioHdr").innerHTML = "Loading...";
                    ajax("portfolio.php?no=" + port, function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("PortfolioHdr").innerHTML = xmlhttp.responseText
                        }
                    })
                }

                function nextPh(a) {
                    if (a == 1) {
                        photo--
                    } else {
                        photo++
                    }
                    if (photo < 0) {
                        photo = 0;
                        return
                    }
                    if (photo > photoLen - 1) {
                        photo = photoLen - 1
                    }
                    document.getElementById("photoHldr").innerHTML = "Loading...";
                    ajax("photos.php?no=" + photo, function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("photoHldr").innerHTML = xmlhttp.responseText
                        }
                    })
                }

                function showErr() {
                    var a = document.getElementById("msg");
                    location.href = "#";
                    location.href = "#contact";
                    a.className = "error"
                }

                function send() {
                    var f = document.getElementById("txtName"),
                        b = document.getElementById("txtEmail"),
                        g = document.getElementById("txtPhno"),
                        i = document.getElementById("txtMsg");
                    var c = document.getElementById("msg"),
                        k = {
                            txtName: f.value,
                            txtEmail: b.value,
                            txtPhno: g.value,
                            txtMsg: i.value
                        };
                    c.className = "";
                    c.innerHTML = "Thanks for visiting my website.";
                    if (k.txtName == "") {
                        c.innerHTML = "Please enter your name.";
                        showErr();
                        return false
                    } else {
                        if (k.txtEmail == "") {
                            c.innerHTML = "Please enter your email id.";
                            showErr();
                            return false
                        } else {
                            if (k.txtMsg == "") {
                                c.innerHTML = "Please enter your message.";
                                showErr();
                                return false
                            }
                        }
                    }
                    var a = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (a.test(k.txtEmail) == false) {
                        c.innerHTML = "Please enter valid email id.";
                        c.className = "error";
                        return false
                    }
                    if (k.txtPhno != "" && (k.txtPhno >= 0) == false || k.txtPhno != "" && k.txtPhno.length != 10) {
                        c.innerHTML = "Please enter valid mobile number.";
                        c.className = "error";
                        return false
                    }
                    if (sendCnt >= 3) {
                        c.innerHTML = "Unable to send your message now!";
                        c.className = "error";
                        return false
                    }
                    var e = [];
                    for (var h in k) {
                        if (k.hasOwnProperty(h)) {
                            e.push(encodeURIComponent(h) + "=" + encodeURIComponent(k[h]))
                        }
                    }
                    var d = e.join("&");
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest()
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            if (xmlhttp.responseText == "1") {
                                c.className = "";
                                c.innerHTML = "Thanks for sending your message.";
                                f.value = "";
                                b.value = "";
                                g.value = "";
                                i.value = "";
                                sendCnt++;
                                location.href = "#";
                                location.href = "#contact"
                            } else {
                                c.innerHTML = "Unable to send your message now!"
                            }
                        }
                    };
                    xmlhttp.open("POST", "../contact.php", true);
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xmlhttp.send(d);
                    return false
                }

                function ajax(a, b) {
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest()
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
                    }
                    xmlhttp.onreadystatechange = b;
                    xmlhttp.open("GET", a, true);
                    xmlhttp.send()
                };


                (function (d, f, k, j, h, c, b) {
                    d.GoogleAnalyticsObject = h;
                    d[h] = d[h] || function () {
                        (d[h].q = d[h].q || []).push(arguments)
                    }, d[h].l = 1 * new Date();
                    c = f.createElement(k), b = f.getElementsByTagName(k)[0];
                    c.async = 1;
                    c.src = j;
                    b.parentNode.insertBefore(c, b)
                })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");
                ga("create", "UA-45600345-1", "balsoft.in");
                ga("send", "pageview");

            </script>
        </body>

</html>
