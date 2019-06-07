<?php if ($display !== null) : ?>
    <h1>Video display:</h1>

    <div class="sammy"><iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $display->code ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif; ?>
    <div class='list'>
        <h1>Playlist</h1>
        <ul>
            <?php foreach ($videos_list as $video) : ?>
                <li><a href="/index?id=<?= $video->id ?>"><?= $video->name ?></a></li>
            <?php endforeach; ?>



        </ul>
    </div>
</div>