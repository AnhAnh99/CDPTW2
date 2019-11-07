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
    $less->compileFile('less/112.less', 'css/112.css');
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>112</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo $url_path ?>/css/112.css" rel="stylesheet" type="text/css" />

    <link rel="icon" type="image/x-icon" href="images/icons/favicon.ico">
    <script src="<?php echo $url_path ?>/js/jquery.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/plugins.min.js"></script>
    <script src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b927288a03dbde6"></script>

    
</head>

<body>
    <?php include $dir_block.'/112-content.php'; ?>

    <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
    <script src="<?php echo $url_path ?>/js/112.js"></script>

</body>

</html>