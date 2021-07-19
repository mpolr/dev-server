<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Development server by mPolr</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            font-weight: 600;
        }

        .title {
            font-size: 64px;
        }

        .links > a {
            color: #636b6f;
            padding: 25px 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-t-md {
            margin-top: 45px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .text-left {
	        text-align: left;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="top-right links">
            <a href="https://t.me/mpolr">Telegram - t.me/mpolr</a>
        </div>

        <div class="content">
            <div class="title m-b-md">
                Development server
            </div>

            <div>
                <p>
                    This file located in "<?php echo __DIR__ ?>"
                </p>
                <p>
                    You can create you projects folders in "<?php echo dirname(__DIR__, 2) ?>",<br>
                    e.g. "<?php echo dirname(__DIR__, 2) ?>/my-project/public" will be accessible via URL: <?php echo "//my-project.$_SERVER[HTTP_HOST]" ?>
                </p>
            </div>

            <div>
                <p class="">
                    Here is a list of current project folders:
                </p>
                <p>
                    <?php
                        $dir = new DirectoryIterator(dirname(__DIR__, 2));
                        foreach ($dir as $fileinfo) {
                            echo '<ul class="text-left">';
                            if ($fileinfo->isDir() && !$fileinfo->isDot() && $fileinfo->getFilename() != '_default') {
                                echo '<li><a target="_blank" href="//'.$fileinfo->getFilename().'.'.$_SERVER["HTTP_HOST"].'">'.$fileinfo->getFilename().'</a></li>';
                            }
                            echo '</ul>';
                        }
                    ?>
                </p>
            </div>

            <div class="links m-t-md">
                <a href="https://mpolr.ru">Author's site</a>
                <a href="https://github.com/mPolr/dev-server">GitHub</a>
            </div>
        </div>
    </div>
</body>
</html>