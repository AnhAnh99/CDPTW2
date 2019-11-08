<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block.'/libs/lessc.inc.php');
    }

    $less = new lessc;
    $less->compileFile('less/127.less', 'css/127.css');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>127</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/127.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/plugins.min.js"></script>
        <!-- <script src="js/nouislider.min.js"></script> -->
        <script src="js/main.min.js"></script>
        <script src="js/127.js"></script>
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    </head>
    <body>
        <?php include $dir_block.'/127-content.php'; ?>
    </body>
</html>
