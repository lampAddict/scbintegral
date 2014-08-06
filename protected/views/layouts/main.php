<?php /* @var $this Controller */?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="icon" type="image/ico" href="/favicon.png" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
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
        <div class="title_address"><div class="address_text">119034, Россия, г. Москва, ул. Пречистенка, д. 40/2, стр. 2&nbsp;&nbsp;тел./факс&nbsp;&nbsp;<a class="nolink ctelheader" href="tel:+7 (499) 255 87 48">+7 (499) 255 87 48</a>,&nbsp;&nbsp;<a class="nolink ctelheader" href="tel:255 34 39">255 34 39</a></div></div>
        <div class="title_address"><div class="address_text_wide">Филиал: 141980, Россия, Московская обл., г. Дубна, ул. Приборостроителей, д.2&nbsp;&nbsp;тел.&nbsp;&nbsp;<a class="nolink ctelheader" href="tel:+7 (496) 217 03 83">+7 (496) 217 03 83</a></div></div>
	</div><!-- header -->
	<div id="mainmenu" style="height: 26px;">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Продукция и услуги', 'url'=>array('/site/page', 'view'=>'production'),

                    'items'=>array(
                                    array('label'=>'Устройства управления токоограничением',    'url'=>array('/site/page', 'view'=>'production', 'show'=>'uto')),
                                    array('label'=>'Устройства управления водоограничением', 	'url'=>array('/site/page', 'view'=>'production', 'show'=>'uvo'))
                    ),
                ),
                array('label'=>'Лицензии и сертификаты', 'url'=>array('/site/page', 'view'=>'licenses')),
                array('label'=>'Раскрытие информации', 'url'=>array('/site/page', 'view'=>'information')),
                array('label'=>'Инновации', 'url'=>array('/site/page', 'view'=>'innovation')),
                array('label'=>'Наши партнеры', 'url'=>array('/site/page', 'view'=>'partners')),
				array('label'=>'Контакты', 'url'=>array('/site/page', 'view'=>'contacts'))
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
                //color: #ffffff;
            }
            .topNav li ul li {
                clear: left;
                height: auto;
                padding:2px 8px;
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
<div class="main-bg"><img id="bg" src="/images/tenzor_bg.jpg"/></div>
</body>
</html>
