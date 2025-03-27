<?php

$title = "Projects | ";
$desc = "Aiko's personal website, mostly consisting of interests in fandom and media consumption.";
include 'partials/header.php';

?>

<body class="default">

    <?php include 'partials/menu.php'; ?>

    <main class="box2">

        <h2 class="first">Shrines</h2>

        <p>Shrines are webpages dedicated to specific topics, hobbies, or interests.</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100">
                    <div class="card border-0 rounded-0 mb-1 justify-content-center align-items-center" style="height:150px; width:100%; background-size:cover; background-position:center; background-image:url('https://i.vgy.me/1ceSYq.png');">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">The Tensai Knight</h5>
                        <p class="card-text">
                            Kishido Temma (Holostars) <br />
                            Status: Open <br />
                            Since: 2023/04/17
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="tensai-knight/index.php" class="btn buttons mb-2">Visit</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card border-0 rounded-0 mb-1 justify-content-center align-items-center" style="height:150px; width:100%; background-size:cover; background-position:center; background-image:url('https://i.vgy.me/H02B4X.jpg');">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">(Title TBA)</h5>
                        <p class="card-text">
                            Spiral: The Bonds of Reasoning <br />
                            Status: Planned <br />
                            Since: -
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn buttons mb-2">Visit</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card border-0 rounded-0 mb-1 justify-content-center align-items-center" style="height:150px; width:100%; background-size:cover; background-position:center; background-image:url('');">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">(Title TBA)</h5>
                        <p class="card-text">
                            Girls' Frontline (for those who died) <br />
                            Status: Planned <br />
                            Since: -
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn buttons mb-2">Visit</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card border-0 rounded-0 mb-1 justify-content-center align-items-center" style="height:150px; width:100%; background-size:cover; background-position:center; background-image:url('https://i.vgy.me/X4KXUu.png');">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">(Title TBA)</h5>
                        <p class="card-text">
                            Koori Chikage (Nowayu) <br />
                            Status: Planned <br />
                            Since: -
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn buttons mb-2">Visit</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card border-0 rounded-0 mb-1 justify-content-center align-items-center" style="height:150px; width:100%; background-size:cover; background-position:center; background-image:url('https://i.vgy.me/UBM1t3.jpg');">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">(Title TBA)</h5>
                        <p class="card-text">
                            Reign of the Seven Spellblades <br />
                            Status: Planned <br />
                            Since: -
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn buttons mb-2">Visit</a>
                    </div>
                </div>
            </div>

        </div>


        <small class="mb-2"><i>
                <?php
                $filename = __FILE__; // Get the current PHP file

                $lastModifiedTimestamp = filemtime($filename);
                $lastModifiedDateTime = date('Y/m/d', $lastModifiedTimestamp);
                echo "Last updated: " . $lastModifiedDateTime;
                ?>
            </i></small>


    </main>

    <?php include 'partials/footer.php'; ?>

</body>