<?php

$title = "Links | ";
$desc = "Aiko's personal website, mostly consisting of interests in fandom and media consumption.";
include 'partials/header.php';

?>

<body class="default">

    <?php include 'partials/menu.php'; ?>

    <main class="box2">

        <h2 class="first">Links</h2>

        <p>Useful links, resources, and inspirations.</p>

        <small class="mb-2"><i>
                <?php
                $filename = __FILE__; // Get the current PHP file

                $lastModifiedTimestamp = filemtime($filename);
                $lastModifiedDateTime = date('Y/m/d', $lastModifiedTimestamp);
                echo "Last updated: " . $lastModifiedDateTime;
                ?>
            </i></small>

        <div class="row mt-2">

            <div class="col-md-4">

                <div class="d-sm-none d-md-block d-none d-sm-block bd-toc mt-3 mb-5 my-lg-0 mb-lg-5 px-sm-1 sticky-md-top">
                    <nav id="tocContents">
                        <nav id="toc" class="p-2" style="border: 2px solid #fa89c3;">
                            <ul style="padding-left: 1px;">
                                <li><a href="#fanlisting">Joined Fanllistings</a></li>
                                <li><a href="#webdev">Web Development</a></li>
                                <ul>
                                    <li><a href="#web-templates">Templates/Layouts</a></li>
                                    <li><a href="#snippets">Code Snippets</a></li>
                                    <li><a href="#libraries">Libraries</a></li>
                                    <li><a href="#webdev-others">Others</a></li>
                                    <li><a href="#webcomics">Webcomics</a></li>
                                    <li><a href="#graphics">Graphics</a></li>
                                    <li><a href="#img-comp">Image Compression</a></li>
                                    <li><a href="#responsive">Responsive Websites</a></li>
                                    <li><a href="#acc">Accessibility</a></li>
                                </ul>
                                <li><a href="#art">Art</a></li>
                                <li><a href="#gamedev">Game Development</a></li>
                                <li><a href="#tools">Tools</a></li>
                                <li><a href="#cool">Cool Sites</a></li>
                                <ul>
                                    <li><a href="#community">Community</a></li>
                                    <li><a href="#personal">Personal</a></li>
                                </ul>
                            </ul>
                        </nav>
                    </nav>
                </div>

                <!--<nav id="navbar-links" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column sticky-md-top" style="overflow-y: auto;">
                       <a class="nav-link" href="#fanlisting">Joined Fanllistings</a>
                        <a class="nav-link" href="#webdev">Web Development</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#web-templates">Templates/Layouts</a>
                            <a class="nav-link ms-3 my-1" href="#snippets">Code Snippets</a>
                            <a class="nav-link ms-3 my-1" href="#libraries">Libraries</a>
                            <a class="nav-link ms-3 my-1" href="#webdev-others">Others</a>
                            <a class="nav-link ms-3 my-1" href="#webcomics">Webcomics</a>
                            <a class="nav-link ms-3 my-1" href="#graphics">Graphics</a>
                            <a class="nav-link ms-3 my-1" href="#img-comp">Image Compression</a>
                            <a class="nav-link ms-3 my-1" href="#responsive">Responsive Websites</a>
                        </nav>
                        <a class="nav-link" href="#gamedev">Game Development</a>
                        <a class="nav-link" href="#tools">Tools</a>
                        <a class="nav-link" href="#cool">Cool Sites</a>
                    </nav>
                </nav>-->

            </div>

            <div class="col-md-8">

                <div data-bs-spy="scroll" data-bs-target="#navbar-links" data-bs-smooth-scroll="false" class="scrollspy" tabindex="0">

                    <section id="fanlisting">

                        <h3>Joined Fanlistings</h3>

                        <div class="text-center">

                            <a href="https://leprd.minty.nu/" title="Leprd"><img src="assets/images/fanlisting/Leprd.png"></a>
                            <a href="http://yandere.nu/rezero/index.php" title="Re: Zero"><img src="assets/images/fanlisting/Re_Zero.png"></a>
                            <a href="http://yandere.nu/gunslinger/index.php" title="Gunslinger Girl"><img src="assets/images/fanlisting/Gunslinger_Girl.png"></a>
                            <a href="https://arknights.kalechips.net/fan/index.php" title="Arknights"><img src="assets/images/fanlisting/Arknights.png"></a>
                            <a href="http://yandere.nu/triela/" title="Triela (Gunslinger Girl)"><img src="assets/images/fanlisting/Triela.png"></a>
                            <a href="https://fan.kirai.org/eyes/" title="Eyes (Spiral: Suiri no Kizuna)"><img src="assets/images/fanlisting/Eyes.png"></a>
                            <a href="http://www.kiri-no-hana.net/bern/" title="Bernkastel (Umineko: When They Cry)"><img src="assets/images/fanlisting/Bernkastel.jpg"></a>
                            <a href="http://www.kiri-no-hana.net/will/" title="Willard H Wright (Umineko: When They Cry)"><img src="assets/images/fanlisting/Will.png"></a>
                            <a href="https://ai.after-death.org/" title="Enma Ai (Jigoku Shoujo)"><img src="assets/images/fanlisting/Enma_Ai.gif"></a>
                            <a href="http://www.marheavenj.net/shinobu/" title="Shinobu (Monogatari Series)"><img src="assets/images/fanlisting/Shinobu.jpg"></a>
                            <a href="http://www.marheavenj.net/bourbon/" title="Furuya Rei (Detective Conan)"><img src="assets/images/fanlisting/Rei.jpg"></a>
                            <a href="http://www.marheavenj.net/akise/" title="Akise Aru (Mirai Nikki)"><img src="assets/images/fanlisting/Akise_Aru.jpg"></a>
                            <a href="https://fan.sleety.org/ilegenes/index.php" title="Ilegenes"><img src="assets/images/fanlisting/Ilegenes.png"></a>
                            <a href="https://rikafire.fanimated.net/hokage/" title="Flame of Recca"><img src="assets/images/fanlisting/Flame_of_Recca.png"></a>

                        </div>

                    </section>

                    <hr>

                    <section>

                        <h3 id="webdev">Web Development</h3>

                        <h4 id="web-templates">Site Templates/Layouts</h4>
                        <p>HTML/CSS templates/layouts you can use for your own websites. Mostly responsive and free.</p>

                        <ul>
                            <li><a href="https://html5up.net/">HTML5 UP</a> - Clean, professional, and modern templates by the creator of Carrd.</li>
                            <li><a href="https://foollovers.com/te/index-nf00.html">Fool Lovers' templates</a></li>
                            <li><a href="https://hiroec.com/template/">Utsusemi's templates</a></li>
                            <li><a href="https://espace.monbalcon.net/category/template/">Espace's templates</a></li>
                            <li><a href="https://sadgrl.online/webmastery/layouts/">Sadgrl's layouts</a></li>
                            <li><a href="https://ninawas.me/index.html">Nina's templates</a></li>
                            <li><a href="https://ragusnon.wwww.jp/">Mutou's templates</a></li>
                            <li><a href="https://simplepagebuilder.app/">Simple Page Builder</a></li>
                            <li><a href="https://sadgrl.online/projects/layout-builder/">Sadgrl's layout builder</a></li>
                            <li><a href="https://eggramen.neocities.org/code/css_testpages">EggRamen's layouts</a></li>
                            <li><a href="https://kalechips.net/projects/layouts/">Kalechips' layouts</a></li>
                            <li><a href="https://repth.neocities.org/theme">Repth's layouts</a></li>
                            <li><a href="https://cepheus.neocities.org/content/layouts">Cepheus' layouts</a></li>
                            <li><a href="https://oc-hub-template.neocities.org/">Character wiki template</a></li>
                            <li><a href="https://matthewjamestaylor.com/web-design">Matthew James Taylor's barebones layout</a></li>
                            <li><a href="https://layout.bradwoods.io/">CSS Layout Generator</a></li>
                        </ul>


                        <h4 id="snippets">Code Snippets</h4>

                        <ul>
                            <li><a href="https://codepen.io/clover-zero/collections/public">Collections of CodePens I like</a></li>
                            <li><a href="https://techinscribed.com/multiple-themes-using-css-variables/">Multiple Themes using CSS Variables</a></li>
                            <li><a href="https://github.com/phuocng/csslayout">CSS Layouts</a> - A collection of popular CSS layouts and patterns that you can use right away.</li>
                            <li><a href="https://grid.layoutit.com/">CSS Grid</a></li>
                            <li><a href="https://html-css-js.com/css/generator/">CSS Code Generators</a></li>
                            <li><a href="https://css-tricks.com/">CSS Tricks</a></li>
                            <li><a href="https://cssgradient.io/">CSS Gradient</a></li>
                            <li><a href="https://ianlunn.github.io/Hover/">Hover.css</a></li>
                            <li><a href="https://www.cssportal.com/css3-text-shadow-generator/">CSS Text Shadow Generator</a></li>
                            <li><a href="https://bennettfeely.com/clippy/">Clippy</a> - Easily make complex shapes in CSS.</li>
                            <li><a href="https://kalechips.net/projects/code/">Kalechips' code projects</a></li>
                            <li><a href="https://kalechips.net/projects/snippets">Kalechips' code snippets</a></li>
                            <li><a href="https://tiny-helpers.dev/">Tiny Helpers</a></li>
                            <li><a href="https://manos.malihu.gr/style-my-tooltips-jquery-plugin/">jQuery tooltips styling plugin</a></li>
                            <li><a href="http://projects.verou.me/bubbly/">Bubbly</a> - CSS bubbles made easy.</li>
                            <li><a href="https://bbbootstrap.com/">Bbbootstrap</a> - Various code snippets.</li>
                            <li><a href="https://codemyui.com/">Code My UI</a></li>
                            <li><a href="https://9elements.github.io/fancy-border-radius/">Fancy Border Radius</a></li>
                            <li><a href="https://a2aaron.github.io/Cohoard/">Cohoard</a></li>
                            <li><a href="https://picocss.com/">Pico CSS</a></li>
                            <li><a href="https://digitallytailored.github.io/Classless.css/">Classless CSS</a></li>
                        </ul>

                        <h4 id="libraries">Scripts, Libraries, Frameworks</h4>

                        <ul>
                            <li><a href="https://getbootstrap.com/">Bootstrap</a></li>
                            <li><a href="https://nanogallery2.nanostudio.org/">Nanogallery2</a> - Javascript image gallery. <a href="https://nanophotosprovider2.nanostudio.org/">PHP extension available</a>.</li>
                            <li><a href="https://biati-digital.github.io/glightbox/">GLightbox</a> - Javascript image gallery.</li>
                            <li><a href="https://do.gt-gt.org/product/fuwaimg/">Fuwaimg</a> - Japanese Javascript image gallery.</li>
                            <li><a href="https://do.gt-gt.org/product/zubolog/">Zubolog</a> - Japanese PHP script that acquires all images in a specified folder and automatically outputs a list.</li>
                            <li><a href="https://swiperjs.com/">Swiper</a> - JavaScript slider/carousel.</li>
                            <li><a href="https://kenwheeler.github.io/slick/">Slick</a> - JavaScript slider/carousel.</li>
                            <li><a href="https://splidejs.com/">Splide</a> - JavaScript slider/carousel.</li>
                            <li><a href="https://isotope.metafizzy.co/">Isotope</a> - JavaScript/jQuery filer and sort layouts.</li>
                        </ul>

                        <h4 id="webdev-others">Others</h4>

                        <ul>
                            <li><a href="https://slashpages.net/">Slash Pages</a> - Slash pages are common pages you can add to your website.</li>
                            <li><a href="https://stefanbohacek.com/blog/resources-for-keeping-the-web-free-open-and-poetic/">Resources for keeping the web free, open, and poetic</a></li>
                            <li><a href="https://zonelets.net/">Zonelets</a> - Simple, free blogging engine, perfect for Neocities or other static websites.</li>
                            <li><a href="https://glitch.com/">Glitch</a> - Small web projects.</li>
                            <li><a href="https://www.htmlcommentbox.com">HTML Comment Box</a></li>
                            <li><a href="https://rss.bloople.net">RSS 2 HTML</a> - RSS feed to be embedded in your website.</li>
                            <li><a href="https://www.feedroll.com/rssviewer/">FeedRoll</a> - RSS feed to be embedded in your website.</li>
                            <li><a href="https://neil-clarke.com/block-the-bots-that-feed-ai-models-by-scraping-your-website/">Block AI scrapers</a></li>
                            <li><a href="https://images.squidge.org/">Squidge Images</a> - Image hosting for fandom, NSFW allowed.</li>
                            <li><a href="https://do.gt-gt.org/">Do</a> - A Japanese website to help people make personal websites. Includes tutorials, templates, libraries, and code snippets.</li>
                        </ul>

                        <h4 id="webcomics">Webcomics</h4>

                        <ul>
                            <li><a href="https://rarebit.neocities.org/">Rarebit</a> - HTML/Javascript template.</li>
                            <li><a href="https://github.com/mrencyc/ComicControl">Comic Control CMS</a></li>
                            <li><a href="https://github.com/Ayemae/Grawlix-Webcomic-CMS">Grawlix Webcomic CMS</a></li>
                            <li><a href="https://www.toocheke.com/">Toocheke Wordpress plugin</a></li>
                            <li><a href="https://ryanvilbrandt.github.io/comic_git/">comic_git</a></li>
                            <li><a href="https://www.comiklex.com/">ComiKlex</a></li>
                            <li><a href="https://www.webcomicx.com/">WebcomicX</a></li>
                            <li><a href="https://averys.green/projects/comic-cms/">Comic CMS</a></li>
                            <li><a href="https://guardian.bona.jp/st/cv/index.html">なんかいい感じのマンガビューア～slick-custom～</a> - Japanese web manga viewer script using jQuery Slick.</li>
                        </ul>

                        <h4 id="graphics">Graphics</h4>

                        <ul>
                            <li><a href="https://foollovers.com/mat/index.html">Fool Lovers' materials</a></li>
                            <li><a href="https://sadgrl.online/projects/88x31-button-maker">Sadgrl's 88x31 button maker</a></li>
                            <li><a href="https://www.webcitron.com/">Web Citron</a> - A Japanese website.</li>
                            <li><a href="https://directory.cinni.net/index.php">Ichigo Directory</a></li>
                        </ul>

                        <h4 id="img-comp">Image Compression</h4>

                        <ul>
                            <li><a href="https://saerasoft.com/caesium">Caesium Image Compressor</a></li>
                            <li><a href="https://evilmartians.com/chronicles/images-done-right-web-graphics-good-to-the-last-byte-optimization-techniques">Evil Martians' Graphics Optimization</a></li>
                            <li><a href="https://tinypng.com/">Tiny PNG</a></li>
                            <li><a href="https://compressjpeg.com/">Compress JPEG</a></li>
                            <li><a href="https://lcdf.org/gifsicle/">Gifsicle</a></li>
                        </ul>

                        <h4 id="responsive">Responsive Websites</h4>
                        <p>I believe responsive websites - websites that look nice on all devices and screens, including desktop computers and mobile phones - are important.</p>

                        <ul>
                            <li><a href="https://kalechips.net/responsive/resources">Resources</a></li>
                            <li><a href="https://kalechips.net/posts/2022-09-09-Mobile-Compatibility">Your website needs to work on phones</a></li>
                            <li><a href="https://whiona.weblog.lol/2023/09/on-mobile-phones-the-small-web-and-able-bodied-privilege">On mobile phones, the small web, and able-bodied privilege</a></li>
                            <li><a href="https://lilaclynx.net/responsive.html">Making your site look good on mobile</a></li>
                            <li><a href="https://goblin-heart.net/sadgrl/learn/articles/responsive-website">Make a website responsive</a></li>
                            <li><a href="http://lilaclynx.net/responsive.html">Making your site look good on mobile</a></li>
                            <li><a href="https://travishorn.com/responsive-grid-in-2-minutes-with-css-grid-layout-4842a41420fe">Responsive grid</a></li>
                            <li><a href="https://responsivedesignchecker.com/">Responsive Web Design Checker</a></li>
                        </ul>

                        <h4 id="acc">Accessibility</h4>

                        <ul>
                            <li><a href="https://pinkvampyr.leprd.space/accessiblenet/resources.php">Resources</a></li>
                            <li><a href="https://kalechips.net/projects/snippets/burger">Accessible hamburger menu</a></li>
                            <li><a href="https://medium.com/@amr.abdelkarem/creating-an-accessible-swiper-slider-with-custom-play-pause-button-and-enhanced-accessibility-b480e5de9fee">Accessible Swiper JS</a></li>
                            <li><a href="https://dolloffk.github.io/contrast-tool/">Color Contrast Tool</a></li>
                            <li><a href="https://colors.dopely.top/contrast-checker">Contrast checker</a></li>
                        </ul>

                    </section>

                    <hr>

                    <section>

                        <h3 id="art">Art</h3>

                        <ul>
                            <li><a href="https://colors.dopely.top/color-pedia/">Dopely Colors' Color Pedia</a></li>
                            <li><a href="https://www.colorhexa.com/">ColorHexa</a></li>
                        </ul>

                    </section>

                    <hr>

                    <section>

                        <h3 id="gamedev">Game Development</h3>

                        <ul>
                            <li><a href="https://vnproject.id/">VN Project ID</a> - An Indonesian community for people who love and create visual novels. Most active on Discord.</li>
                            <li><a href="https://jon-keevy.itch.io/google-she
                        <li><a href=" https://github.com/methanoliver/awesome-renpy">Awesome RenPy</a> - A curated list of awesome goodies for RenPy visual novel engine.</li>
                            <li><a href="https://jon-keevy.itch.io/google-sheet-template-for-ren-py-vns">Google Sheet Template for Ren'Py VNs</a></li>
                        </ul>

                    </section>

                    <hr>

                    <section>

                        <h3 id="tools">Tools</h3>

                        <ul>
                            <li><a href="https://www.postybirb.com">Postybirb</a> - A desktop-only tool to easily cross-post in
                                multiple websites/social media.</li>
                        </ul>

                    </section>

                    <hr>

                    <section>

                        <h3 id="cool">Cool Sites</h3>
                        <P>I am not affiliated with most of them, I just found their websites very cool, a source of inspiration. You can learn a few things from their layouts/templates and resources they linked. Listed in no particular order, though bigger banners/buttons are placed last for stylistic purposes.</P>

                        <h4 id="community">Community</h4>
                        <ul>
                            <li><a href="https://indieweb.org/">IndieWeb</a></li>
                            <li><a href="https://www.fancoders.com/">Fandom Coders</a> - A community for fandom coders, from hobbyists to professionals. I am a member.</li>
                            <li><a href="https://32bit.cafe/">32-Bit Cafe</a> - A community of like-minded website hobbyists and professionals helping to make the personal web fruitful and bountiful again.</li>
                        </ul>

                        <h4 id="personal">Personal</h4>

                        <section id="personal-sites" class="text-center">

                            <a href="https://aegi.neocities.org/" title="Aegi's Cafe"><img src="assets/images/buttons/people/aegi.png"></a>
                            <a href="https://oubliette.nu/" title="The Wither and Bloom Network"><img src="assets/images/buttons/people/oubliette.png"></a>
                            <a class="nobutton" href="https://dldr.xyz/" title="DLDR.XYZ">DLDR.XYZ</a>
                            <a class="nobutton" href="https://www.gekidasa.net/" title="gekidasa.net">gekidasa.net</a>
                            <a href="https://adilene.net/" title="Adilene"><img src="assets/images/buttons/people/adilene.png"></a>
                            <a href="https://asclaria.org" title="Ascalaria"><img src="assets/images/buttons/people/ascalaria.png"></a>
                            <a href="https://caelestis.nu/" title="Caelestis"><img src="assets/images/buttons/people/caelestis.png"></a>
                            <a href="https://aelysia.net/" title="Aelysia"><img src="assets/images/buttons/people/aelysia.png"></a>
                            <a href="https://wings.nu/index.php" title="Wings.nu"><img src="assets/images/buttons/people/wings.png"></a>
                            <a href="https://cepheus.neocities.org/" title="Cepheus"><img src="assets/images/buttons/people/cepheus.gif"></a>
                            <a href="https://fatgrrlz.neocities.org/" title="Fatgrrlz"><img src="assets/images/buttons/people/fatgrrlz.gif"></a>
                            <a href="https://www.hellomei.dev/" title="Hellomei"><img src="assets/images/buttons/people/hellomei.gif"></a>
                            <a href="https://jasm1nii.xyz/" title="Jasmine's Journal"><img src="assets/images/buttons/people/jasmine.png"></a>
                            <a href="https://kayleerowena.com/" title="Kaylee Rowena"><img src="assets/images/buttons/people/kaylee.png"></a>
                            <a href="https://karuma.me/" title="10"><img src="assets/images/buttons/people/10kph.png"></a>
                            <a href="https://kalechips.net/" title="Kalechips"><img src="assets/images/buttons/people/kalechips.png"></a>
                            <a href="https://zucchini.cc/" title="Zucchini"><img src="assets/images/buttons/people/zucchini.gif"></a>
                            <a href="https://citro.neocities.org/" title="Citro, who's also a dork"><img src="assets/images/mutuals/Citro.png"></a>
                            <a href="https://rgl-shena.lsv.jp/" title="SCRAP ✂ 0417"><img src="assets/images/buttons/people/shena.gif"></a>
                            <a href="https://zan-ei.rojo.jp/" title="Zanei Honmaru"><img src="assets/images/buttons/people/zanei_honmaru.png"></a>

                        </section>

                    </section>

                </div>
            </div>

        </div>


    </main>

    <?php include 'partials/footer.php'; ?>

</body>