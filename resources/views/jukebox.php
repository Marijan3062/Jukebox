<?php

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Youtube Jukebox</title>
    <link rel="stylesheet" href="css/list.css">
</head>
<body>
    <h1>Video display:</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=  $display->code ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class='list'>
        <h1>Playlist</h1>
        <ul>
            <?php foreach($videos_list as $video) : ?>
            <li><a href="/Day 30/public/jukebox?id=<?= $video->id ?>"><?= $video->name ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>