<?php

$title = "Updates | ";
$desc = "Aiko's personal website, mostly consisting of interests in fandom and media consumption.";
include 'partials/header.php';
include 'log.php';

?>

<body class="default">

    <?php include 'partials/menu.php'; ?>

    <main class="box2">

        <h2 class="first">Updates</h2>

        <p class="text-start mb-1">
            <a href="/feed.php" class="btn buttons mb-2"><i class="fa-solid fa-rss"></i> Follow with RSS</i></a>
        </p>

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

        <ul class="pages">
            <?php
            if ($page > 1) {
                echo "<li class=\"page\"><a href=\"?page=" . ($page - 1) . "\">＜</a></li>";
            }
            if ($page > 3) {
                echo "<li class=\"page\"><a href=\"?page=1\">1</a></li>";
                echo "<li class=\"dots\">...</li>";
            }
            if ($page - 2 > 0) {
                echo "<li class=\"page\"><a href=\"?page=" . ($page - 2) . "\">" . ($page - 2) . "</a></li>";
            }
            if ($page - 1 > 0) {
                echo "<li class=\"page\"><a href=\"?page=" . ($page - 1) . "\">" . ($page - 1) . "</a></li>";
            } ?>
            <li class="active"><?php echo $page; ?></li>
            <?php
            if ($page + 1 < $totalPages + 1) {
                echo "<li class=\"page\"><a href=\"?page=" . ($page + 1) . "\">" . ($page + 1) . "</a></li>";
            }
            if ($page + 2 < $totalPages + 1) {
                echo "<li class=\"page\"><a href=\"?page=" . ($page + 2) . "\">" . ($page + 2) . "</a></li>";
            }
            if ($page < $totalPages - 2) {
                echo "<li class=\"dots\">...</li>";
                echo "<li class=\"page\"><a href=\"?page=" . $totalPages . "\">" . $totalPages . "</a></li>";
            }
            if ($page < $totalPages) {
                echo "<li class=\"page\"><a href=\"?page=" . ($page + 1) . "\">＞</a></li>";
            } ?>
        </ul>


    </main>

    <?php include 'partials/footer.php'; ?>

</body>