<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!DOCTYPE html>
<html lang="<?php echo blog_language(); ?>">

<head>
    <?php echo head_contents(); ?>
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="fediverse:creator" content="@hako_aiko@blorbo.social" />
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo theme_path(); ?>css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo theme_path(); ?>css/screen.css">
    <link rel="stylesheet" type="text/css" href="<?php echo theme_path(); ?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?subset=latin,cyrillic-ext,latin-ext,cyrillic&family=Open+Sans+Condensed:300|Open+Sans:400,600,400italic,600italic|Merriweather:400,300,300italic,400italic,700,700italic|Roboto+Slab:400,300">

    <?php echo $metatags; ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.4.1/purify.min.js" integrity="sha512-uHOKtSfJWScGmyyFr2O2+efpDx2nhwHU2v7MVeptzZoiC7bdF6Ny/CmZhN2AwIK1oCFiVQQ5DA/L9FSzyPNu6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="module" src="/assets/js/mastodon-comments.js"></script>

</head>

<body class="home-template">
    <?php if (facebook()) {
        echo facebook();
    } ?>
    <?php if (login()) {
        toolbar();
    } ?>
    <header id="site-head">
        <a id="blog-logo" href="<?php echo site_url(); ?>">
            <div class="bloglogo" style="background: url(<?php echo theme_path(); ?>images/birdcage.png)"></div>
        </a>
        <?php if (is_index()) { ?>
            <h1 class="blog-title"><a href="<?php echo site_url(); ?>"><?php echo blog_title(); ?></a></h1>
        <?php } else { ?>
            <h2 class="blog-title"><a href="<?php echo site_url(); ?>"><?php echo blog_title(); ?></a></h2>
        <?php } ?>
        <div style="text-align: center; font-size: 1.1em;">
            <p><?php echo blog_description(); ?></p>
        </div>
        <nav class="menu" role="nav">
            <?php echo menu(); ?>
            <!--<span class="feed-link"><a href="<?php echo site_url(); ?>feed/rss"><i class="fa fa-rss"></i></a></span>-->
        </nav>
    </header>
    <main class="content" role="main">
        <?php echo content(); ?>
        <article id="category" class="category-list">
            <?php echo category_list(); ?>
        </article>
        <article id="tags" class="tags-list">
            <?php $i = 1;
            $tags = tag_cloud(true);
            arsort($tags); ?>
            <ul>
                <?php foreach ($tags as $tag => $count) : ?>
                    <li><a class="more-link" href="<?php echo site_url(); ?>tag/<?php echo $tag; ?>">#<?php echo tag_i18n($tag); ?> (<?php echo $count; ?>)</a></li>

                <?php endforeach; ?>
            </ul>
        </article>
    </main>
    <footer class="site-footer">
        <div class="inner">
            <section class="copyright"><?php echo copyright(); ?></section>
            <section>Design by <a target="_blank" href="http://sethlilly.com/" rel="nofollow">Seth Lilly</a></section>
        </div>
    </footer>
    <?php if (analytics()) : ?><?php echo analytics() ?><?php endif; ?>
</body>

</html>