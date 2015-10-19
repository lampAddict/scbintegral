<?php /* @var $this Controller */?>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />
    <meta charset="utf-8">
    <meta name="description" content="устройства управления токоограничением, токоограничение, устройства управления водоограничением, водоограничение, улучшение платежной дисциплины населения многоквартирных домов, нпп интеграл дубна, научно промышленное предприятие">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- blueprint CSS framework
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->


	<!--
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="icon" type="image/ico" href="/favicon.png" />
	<title>Научно-производственное предприятие «Интеграл»</title>
    <!-- <script src="js/jquery-1.10.2.min.js"></script> -->
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand" style="height: 30px; margin: 11px; background-image: url(/images/sym_logo.png); background-repeat: no-repeat; background-size: contain;"></div>
            <a class="navbar-brand" href="/">Интеграл</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="/company" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">О компании<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/company/activities">Виды деятельности</a></li>
                        <li><a href="/company/history">История</a></li>
                    </ul>
                </li>
                <li><a href="/news">Новости</a></li>
                <li class="dropdown">
                    <a href="/production" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Продукция<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/production/electric-meter">Счетчики электроэнергии</a></li>
                        <li><a href="/production/uto">Устройства управления токоограничением</a></li>
                        <li><a href="/production/uvo">Устройства управления водоограничением</a></li>
                    </ul>
                </li>
                <li><a href="/prices">Цены</a></li>
                <li><a href="/typical-projects">Типовые проекты</a></li>
                <li><a href="/licenses">Лицензии и сертификаты</a></li>
                <li><a href="/partners">Партнеры</a></li>
                <li><a href="/contacts">Контакты</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" id="page">
    <!--
	<div id="header">
		<div id="logo"></div>
        <div id="logo_title"><div class="logo_text">ОАО НАУЧНО-ПРОИЗВОДСТВЕННОЕ ПРЕДПРИЯТИЕ</div></div>
        <div class="title_address"><div class="address_text_wide">141980, Россия, Московская обл., г. Дубна, ул. Приборостроителей, д.2&nbsp;&nbsp;тел.&nbsp;&nbsp;<a class="nolink ctelheader" href="tel:+7 (496) 217 03 83">+7 (496) 217 03 53</a>&nbsp;&nbsp;<a class="nolink ctelheader" href="tel:+7 (903) 726-25-55">+7 (903) 726-25-55</a></div></div>
	</div>
	-->

    <div class="jumbotron jumbo" style="padding: 0 0; margin-bottom:0px">
            <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                    'homeLink' => CHtml::link('Главная', Yii::app()->homeUrl),
                )); ?><!-- breadcrumbs -->
            <?php endif?>
    </div>

	<?php echo $content; ?>

	<div class="clear"></div>
    <div id="footer">Дизайн и разработка сайта <a href="http://baldheads.ru" target="_blank">Baldheads</a><br></div>
</div>
<div class="main-bg"><img id="bg" src="/images/tenzor_bg.jpg" style="border-radius: 0px;"/></div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/main.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter29517825 = new Ya.Metrika({id:29517825,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29517825" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
