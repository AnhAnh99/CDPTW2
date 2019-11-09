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
    $less->compileFile('less/140.less', 'css/140.css');    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Module - 140</title>
    <link href="<?php echo $url_path ?>/css/140.css" rel="stylesheet" />
    <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet">

    <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
</head>

<body>
    <?php include $dir_block.'/140-content.php'; ?>
</body>

<script src="<?php echo $url_path ?>/js/140.js"></script>

</html>