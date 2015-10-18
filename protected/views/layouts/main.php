<?php /* @var $this Controller */?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />
    <meta name="description" content="устройства управления токоограничением, токоограничение, устройства управления водоограничением, водоограничение, улучшение платежной дисциплины населения многоквартирных домов, нпп интеграл дубна, научно промышленное предприятие">
    <meta name="robots" content="index, follow">
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="icon" type="image/ico" href="/favicon.png" />
	<title>Научно-производственное предприятие «Интеграл»</title>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.jcarousel.js"></script>
    <script src="js/jquery.jcarousel-autoscroll.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="container" id="page">
	<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
        <div id="logo_title"><div class="logo_text">ОАО НАУЧНО-ПРОИЗВОДСТВЕННОЕ ПРЕДПРИЯТИЕ</div></div>
        <div class="title_address"><div class="address_text_wide">141980, Россия, Московская обл., г. Дубна, ул. Приборостроителей, д.2&nbsp;&nbsp;тел.&nbsp;&nbsp;<a class="nolink ctelheader" href="tel:+7 (496) 217 03 83">+7 (496) 217 03 53</a>&nbsp;&nbsp;<a class="nolink ctelheader" href="tel:+7 (903) 726-25-55">+7 (903) 726-25-55</a></div></div>
	</div><!-- header -->
	<div id="mainmenu" style="height: 26px;">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>'/'),
                array('label'=>'О компании', 'url'=>'/company',
                    'items'=>array(
                        array('label'=>'Виды деятельности', 'url'=>'/company/activities'),
                        array('label'=>'История',           'url'=>'/company/history')
                    ),
                ),
                array('label'=>'Новости', 'url'=>'/news'),
				array('label'=>'Продукция', 'url'=>'/production',
                    'items'=>array(
                                    array('label'=>'Счетчики электроэнергии',                   'url'=>'/production/electric-meter'),
                                    array('label'=>'Устройства управления токоограничением',    'url'=>'/production/uto'),
                                    array('label'=>'Устройства управления водоограничением', 	'url'=>'/production/uvo')
                    ),
                ),
                array('label'=>'Цены', 'url'=>'/prices'),
                array('label'=>'Типовые проекты', 'url'=>'/typical-projects'),
                array('label'=>'Лицензии и сертификаты', 'url'=>'/licenses'),
                /*
                array('label'=>'Раскрытие информации', 'url'=>array('/site/page', 'view'=>'information'),

                    'items'=>array(
                        array('label'=>'Устав и внутренние документы',      'url'=>array('/site/page', 'view'=>'regulations')),
                        array('label'=>'Отчетность',                        'url'=>array('/site/page', 'view'=>'accounts')),
                        array('label'=>'События',                           'url'=>array('/site/page', 'view'=>'developments'))
                    ),
                ),
                array('label'=>'Инновации', 'url'=>array('/site/page', 'view'=>'innovation')),
                */
                array('label'=>'Партнеры', 'url'=>'/partners'),

				array('label'=>'Контакты', 'url'=>'/contacts'),
                //array('label'=>'Документы', 'url'=>array('/site/page', 'view'=>'documentation'))
				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
            'htmlOptions'=>array('class' => 'topNav')
		)); ?>
        <style type="text/css">
            .topNav {
                list-style: none;
            }
            .topNav li {
                //display: inline-block;
                float: left;
                height: 16px;
                //margin-top: -1px;
                //padding: 0 6px;
            }
            .topNav li:hover ul {
                display: block;
                background-color:#EFF4FA;
            }
            .topNav li:hover ul li a, .topNav li.active:hover ul li a{
                color: #6399cd;
                background-color:#EFF4FA;
                text-decoration: none;
            }
            .topNav ul {
                display: none;
                position: absolute;
            }
            .topNav li ul {
                background: none repeat scroll 0 0 #FFFFFF;
                z-index:1;
                }
            .topNav li a {
                /*color: #ffffff;*/
            }
            .topNav li ul li {
                clear: left;
                height: auto;
                padding:2px 4px;
            }
            .topNav li.active a {
                text-decoration: none;
            }
        </style>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink' => CHtml::link('Главная', Yii::app()->homeUrl),
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<?php echo $content; ?>
	<div class="clear"></div>
	<div id="footer">
        Дизайн и разработка сайта <a href="http://baldheads.ru" target="_blank">Baldheads</a><br/>
	</div><!-- footer -->
</div><!-- page -->
<div class="main-bg"><img id="bg" src="/images/tenzor_bg.jpg" style="border-radius: 0px;"/></div>
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
