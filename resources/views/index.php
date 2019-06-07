<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/list.css">
</head>

<body>
    <div class="samuel">
        <?= \App\Http\Services\YoutubeService::video_list(); ?>
        <?= $form ?>
    </div>
    <script src="" async defer></script>
</body>

</html>