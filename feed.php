<?php
header("Content-Type: application/rss+xml; charset=UTF-8");

// Include the changelog file
include 'log.php';  // Ensure this file returns $dataArray

// RSS Metadata
$siteTitle = "Miniature Garden";
$siteLink = "https://hako-aiko.haliya.net";
$siteDescription = "Latest updates from Miniature Garden";
$siteLanguage = "en-us";

// Sort the array from newest to oldest
usort($dataArray, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

// Limit to 10 items
$dataArray = array_slice($dataArray, 0, 10);

echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>
<rss version="2.0">
    <channel>
        <title><?php echo htmlspecialchars($siteTitle); ?></title>
        <link><?php echo htmlspecialchars($siteLink); ?></link>
        <description><?php echo htmlspecialchars($siteDescription); ?></description>
        <language><?php echo $siteLanguage; ?></language>

        <?php foreach ($dataArray as $item): ?>
            <item>
                <title><?php echo date("F j, Y", strtotime($item['date'])); ?></title>
                <link><?php echo htmlspecialchars($siteLink); ?></link>
                <pubDate><?php echo date(DATE_RSS, strtotime($item['date'])); ?></pubDate>
                <description><![CDATA[<?php echo $item['desc']; ?>]]></description>
            </item>
        <?php endforeach; ?>

    </channel>
</rss>