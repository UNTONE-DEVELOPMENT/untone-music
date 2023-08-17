<head>
    <link rel="stylesheet" href="index.css">

</head>

<?php
function Artist($name, $pfp, $link)
{
    return [
        "name" => $name,
        "pfp" => $pfp,
        "link" => $link
    ];
}
function Album($name, $cover, $link, $artists, $date)
{
    return [
        "name" => $name,
        "cover" => $cover,
        "link" => $link,
        "artists" => $artists,
	"date" => $date
    ];
}

$artists = [
    Artist("Tanza", "tanza.png", "https://tanza.me"),
    Artist("DJ Stuiter", "djstuiter.png", "https://linktr.ee/djstuiter"),
    Artist("dusstuiter", "dusstuiter.png", "https://linktr.ee/Retiu"),
    Artist("Hubz", "hubz.png", "https://tanza.me"),
    Artist("eggo", "eggo.png", "https://soundcloud.com/kikoxc/"),
];

$albums = [
    Album("Cubey's Adventures, Vol. 2 (Original Game Soundtrack)", "cubey2.png", "https://push.fm/fl/unt002", "DJ Stuiter, dusstuiter", "?"),
    Album("Aurora / Dunes", "aurora_dunes.png", "https://push.fm/fl/unt001", "DJ Stuiter, Tanza", "?")
];

?>

<body>
    <div class="header" gradient>
        <img src="img/logo.svg">
    </div>
    <div class="page">
        <h1>Hi, We’re UNTONE Music.</h1>
        <p>We're a group of music artists, creating and publishing music. Please take a look!</p>
        <p>Are you an artist interested in releasing your music with UNTONE Music? Please send your demos to music@untone.uk</p>

        <div class="grid">
            <div class="grid-item">
                <h3>Artists</h3>
                <div class="artists-grid">
                    <?php
                    foreach ($artists as $artist) {
                        ?>
                        <a class="artist" href="<?= $artist['link'] ?>">
                            <img src="/img/artists/<?= $artist['pfp'] ?>">
                            <p>
                                <?= $artist['name'] ?>
                            </p>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="grid-item">
                <h3>Music</h3>
                <div class="musics-grid">
                    <?php
                    foreach ($albums as $album) {
                        ?>
                        <a class="music" href="<?= $album['link'] ?>">
                            <img src="/img/albums/<?= $album['cover'] ?>">
                            <p>
                                <?= $album['name'] ?>
                            </p>
                            <small>
                                <?= $album['artists'] ?> <light>/ <?= $album['date'] ?></light>
                            </small>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="https://untone.uk">(C) UNTONE 2022-2023</a>
    </div>
</body>
<script src="index.js" type="module"></script>
