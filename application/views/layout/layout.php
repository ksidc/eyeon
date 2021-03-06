<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <title>아이온시큐리티</title>
    <meta name="viewport" content="width=1200px">
    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//cdn.jsdelivr.net/font-nanum/1.0/nanumbarungothic/nanumbarungothic.css'>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.12/css/all.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link href="/assets/css/select2.min.css" rel="stylesheet">
    <link href="/assets/css/summernote-lite.css" rel="stylesheet">
    <link rel='stylesheet' href="/assets/css/style.css?date=<?=time()?>">

    <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/assets/js/summernote-lite.js"></script>
    <script src="/assets/js/moment.js"></script>
    <script src="/assets/js/select2.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <?=$header?>
        </header>
        <section>
            <?=$left?>
            <?=$content?>
        </section>
        <footer>
            <?=$footer?>
        </footer>
    </div>
    <script src="/assets/js/common.js?date=<?=time()?>"></script>
</body>
</html>