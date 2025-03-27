<?php

$title = "";
include 'partials/header.php';
include 'log.php';

// Sort the array from newest to oldest
usort($dataArray, function ($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
});

// Limit to 10 items
$dataArray = array_slice($dataArray, 0, 5);

?>

<body class="default">

        <?php include 'partials/menu.php'; ?>

        <main class="box2">

                <h2 class="first">Welcome</h2>

                <p>Welcome to <b>Miniature Garden</b>, Aiko's personal website consisting of creative work, blog, fandom interests, and anything else that comes to mind. It is perpetually in-progress, so please excuse anything unfinished and the occasional scuff. Feel free to look around!</p>

                <!--<p>Here, you can find <a href="about.php">information about me and this website</a>, my <a href="faves.php">favorite characters and series</a>, my mostly-fannish works (<a href="projects.php">projects</a>, <a href="gallery.php">artworks</a>, and <a href="#">written works</a>), and <a href="links.php">cool links and resources</a> I found! You can also sign my <a href="guestbook/index.php">guestbook</a>. Feel free to <a href="sitemap.php">look around</a>!</p>-->

                <p>You are viewing <a href="about.php#layout">version 1.5</a> of <b>Miniature Garden</b>. It was designed to be <b>responsive</b>, meaning it should look good on all devices at all resolutions. If it looks funny to you, please take a screenshot and send it to me, I'll try to fix it.</p>

                <p><b>This site is a personal derivative site that is not affiliated with any official organization/companies.</b></p>

                <hr />

                <section class="row">

                        <section class="col-md-6 mt-2 mb-2">

                                <h3 id="about">About</h3>

                                <p>I'm Aiko, also known as Clover Zero. I have a wide range of interest, but my main interests
                                        are drawing, writing, gaming, coding, and consuming Japanese media and its adjacent
                                        media.
                                </p>

                                <p>はじめまして。「アイコ」で呼んでください。時々絵を描いたり書いたりしています。</p>

                                <p><a href="about.php">Read more・詳しく</a></p>

                                <!--<div class="list-unstyled circle">
                        <span class="fa-stack size">
                                <i class="fa-regular fa-circle fa-stack-2x"></i>
                                <a href="https://twitter.com/harem_eater" target="_blank"><i class="fab fa-twitter fa-stack-1x circle"></i></a>
                        </span>
                        <a class="icon" href="https://twitter.com/harem_eater"><i class="fa-brands fa-twitter" target="_blank"></i></a>
                        <a class="icon" rel="me" href="https://blorbo.social/@hako_aiko" target="_blank"><i class="fa-brands fa-mastodon"></i></a>
                        <a class="icon" href="https://hako-aiko.tumblr.com/" target="_blank"><i class="fa-brands fa-tumblr"></i></a>
                </div>-->

                        </section>

                        <section class="col-md-6 mt-2 mb-2">

                                <h3>Link Me</h3>

                                <p class="mb-2">Feel free to link to me and tell me if you want to exchange buttons! But please no <a href="https://simple.wikipedia.org/wiki/Hotlinking">hotlinking</a>.</p>

                                <dt>Website name:</dt>
                                <dd>Miniature Garden</dd>

                                <dt>URL:</dt>
                                <dd>https://hako-aiko.haliya.net</dd>

                                <dt>Buttons:</dt>
                                <dd>
                                        <img src="assets/images/button_1.png" width="200" height="40" alt="button">
                                        <img src="assets/images/button_2.png" width="88" height="31" alt="button">
                                        <img src="assets/images/button_3.png" width="200" height="40" alt="button">
                                        <img src="assets/images/button_4.png" width="88" height="31" alt="button">
                                </dd>

                        </section>

                </section>

                <hr />

                <section class="row">

                        <h3 id="latest">Latest</h3>

                        <section class="col-md-4 mt-2 mb-2">
                                <div class="p-3 mt-2 mb-2 h-100" style="border: 2px solid #fa89c3; max-height: 300px; overflow-y: auto; overflow-x: hidden;">

                                        <h4>Site Updates</h4>

                                        <p class="text-start mb-1">
                                                <a href="/feed.php" class="btn buttons mb-2"><i class="fa-solid fa-rss"></i> Follow with RSS</i></a>
                                        </p>

                                        <div class="changelog-index">

                                                <dl>

                                                        <?php
                                                        $itemsPerPage = 10;
                                                        $totalItems = count($dataArray);

                                                        // Sorting the data array by date from newest to oldest
                                                        function compareDates($a, $b)
                                                        {
                                                                return strtotime($b['date']) - strtotime($a['date']);
                                                        }
                                                        usort($dataArray, 'compareDates');

                                                        $totalPages = ceil($totalItems / $itemsPerPage);

                                                        // Get the current page number from the query string, default to 1 if not provided
                                                        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                                                        $page = max(1, min($totalPages, $page)); // Ensure page number is within valid range

                                                        // Calculate the start and end indexes for the current page
                                                        $startIndex = ($page - 1) * $itemsPerPage;
                                                        $endIndex = min($totalItems, $startIndex + $itemsPerPage);

                                                        // Display data for the current page
                                                        for ($i = $startIndex; $i < $endIndex; $i++) {
                                                                $data = $dataArray[$i];
                                                                echo '<dt>' . $data['date'] . '</dt>';
                                                                echo '' . $data['desc'] . ''; //<dd>
                                                        }
                                                        ?>

                                                </dl>

                                                <a href="/changelog.php" class="btn buttons mb-2">More→</a>

                                        </div>
                                </div>

                        </section>

                        <section class="col-md-4 mt-2 mb-2">
                                <div class="p-3 mt-2 mb-2 h-100" style="border: 2px solid #fa89c3; max-height: 300px; overflow-y: auto; overflow-x: hidden;">

                                        <h4>Blog</h4>

                                        <script src="https://embeds.rss2html.net/embed.js?url=https%3A%2F%2Fhako-aiko.haliya.net%2Fblog%2Ffeed%2Frss%2F&amp;embed_render_copy_link=0&amp;embed_render_title=0&amp;feed_render_description=0&amp;item_count=10&amp;item_render_body=0&amp;item_published_label=&amp;item_published_format=%25a+%25b+%25e+%25r"></script>

                                        <a href="blog/" target="_blank" class="btn buttons mb-2">More→</a>

                                </div>

                        </section>

                        <section class="col-md-4 mt-2 mb-2">

                                <section class="p-3 mt-2 h-100" style="border: 2px solid #fa89c3; max-height: 300px; overflow-y: auto; overflow-x: hidden;">

                                        <h4>Reading Comics</h4>

                                        <script src="https://embeds.rss2html.net/embed.js?url=https%3A%2F%2Fmyanimelist.net%2Frss.php%3Ftype%3Drrm%26u%3DHakoAiko&amp;embed_render_copy_link=0&amp;embed_render_title=0&amp;feed_render_description=0&amp;item_count=10&amp;item_published_label=&amp;item_published_format=%25a+%25b+%25e+%25r"></script>

                                        <a href="https://myanimelist.net/profile/HakoAiko" target="_blank" class="btn buttons mb-2">More→</a>

                                        <h4>Watching Anime</h4>

                                        <script src="https://embeds.rss2html.net/embed.js?url=https%3A%2F%2Fmyanimelist.net%2Frss.php%3Ftype%3Drwe%26u%3DHakoAiko&amp;embed_render_copy_link=0&amp;embed_render_title=0&amp;feed_render_description=0&amp;item_count=10&amp;item_published_label=&amp;item_published_format=%25a+%25b+%25e+%25r"></script>

                                        <a href="https://myanimelist.net/profile/HakoAiko" target="_blank" class="btn buttons mb-2">More→</a>

                                        <h4>Reading Other Books</h4>

                                        <script src="https://embeds.rss2html.net/embed.js?url=https%3A%2F%2Fbookwyrm.social%2Fuser%2Fhako_aiko%2Frss&amp;embed_render_copy_link=0&amp;embed_render_title=0&amp;feed_render_description=0&amp;item_count=10&amp;item_render_body=0&amp;item_published_label=&amp;item_published_format=%25a+%25b+%25e+%25r"></script>

                                        <a href="https://bookwyrm.social/user/hako_aiko" target="_blank" class="btn buttons mb-2">More→</a>

                                </section>
                        </section>

                </section>

                <hr>

                <section>

                        <h3>Stickers</h3>

                        <div class="text-center p-3 mt-2 h-100" style="border: 2px solid #fa89c3;"> <!-- max-height: 300px; overflow-y: auto; overflow-x: hidden; -->

                                <section class="row align-items-center">

                                        <section class="col-md-4">

                                                <p>
                                                        <a href="https://fediring.net/previous?host=hako-aiko.haliya.net">←</a>
                                                        <a href="https://fediring.net/">Fediring</a>
                                                        <a href="https://fediring.net/next?host=hako-aiko.haliya.net">→</a>
                                                </p>

                                        </section>

                                        <section class="col-md-4">

                                                <journal-ring icon="pink"></journal-ring>
                                                <script async src="https://cdn.jsdelivr.net/gh/js044/nenrikido@main/static/js/misc/journalring.js"></script>

                                                <br />

                                                <div id='fandomring'>
                                                        <script type="text/javascript" src="https://fandomr.ing/onionring/onionring-variables.js"></script>
                                                        <script type="text/javascript" src="https://fandomr.ing/onionring/onionring-widget.js"></script>
                                                </div>

                                        </section>

                                        <section class="col-md-4">

                                                <p><a href="http://aromatic.wings.nu/">aromatic</a> // pink oleander</p>

                                        </section>

                                        <section>

                                                <a href="https://leprd.minty.nu/" title="Leprd"><img src="assets/images/buttons/leprd.png" alt="Leprd"></a>
                                                <a href="https://kalechips.net/responsive/index"><img src="assets/images/buttons/responsive.png" alt="Responsive Web Directory"></a>
                                                <a href="https://debtdeath.neocities.org/buttons"><img src="assets/images/buttons/debtdeath-mobilefriendly.png" alt="Mobile friendly"></a>
                                                <img src="assets/images/buttons/handcoded.gif" alt="Hardcoded">
                                                <img src="assets/images/buttons/misc-visualstudio.png" alt="Visual Studio Code">

                                        </section>

                                </section>

                        </div>
                </section>

        </main>

        <?php include 'partials/footer.php'; ?>

</body>