<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

require_once 'libs/fileLib.php';

?> 
<p class="main_slogan">
    Наша стратегия – непрерывное развитие и ориентированность на успех!
</p>

    <div id="carousel-example-generic" class="carousel slide quarter" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            $carim = array(
                array('name'=>'integra_m.JPG','link'=>'/index.php?r=site/page&view=production&show=ec', 'desc'=>'Счетчики электрической энергии с функцией ограничения мощности'),
                //array('name'=>'uto-01f12_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Устройство управления токоограничением'),
                array('name'=>'uto_m200_m.jpg','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Устройство управления токоограничением'),
                array('name'=>'uto-01f20_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Устройство управления токоограничением'),
                //array('name'=>'kk.JPG','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Коммутационная коробка для устройств управления токоограничением'),
                array('name'=>'uvo_hw_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uvo', 'desc'=>'Устройство управления водоограничениемб горячее водоснабжение'),
                array('name'=>'uvo_cw_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uvo', 'desc'=>'Устройство управления водоограничением, холодное водоснабжение'),
                //array('name'=>'uvo_h_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uvo', 'desc'=>'Устройство управления водоограничением, теплоснабжение'),
            );

            $c = 0;
            foreach( $carim as $img ){
                $class = '';
                if($c == 2)$class = 'active';
                echo '<div class="item '.$class.'"><img data-src="holder.js/200x120/auto/#777:#555/text:'.$img['desc'].'" data-holder-rendered="true" onclick="window.location.href=\''.$img['link'].'\';return false;" src="/images/products/'.$img['name'].'" desc="'.$img['desc'].'" /></div>';
                $c++;
            }
            ?>
        </div>
        <div>



        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


<div class="well well_main_page">
    <p>
        Открытое акционерное общество «Научно-производственное предприятие «Интеграл», используя производственный потенциал <a href="http://www.tenzor.net/" target="_blank">ОАО «Приборный завод «Тензор»</a> (г. Дубна, Московская обл.), в 2014 году начало реализацию инновационного проекта, обеспечивающего применение эффективных мер воздействия на должников и повышение платежной дисциплины населения за потребленные коммунальные услуги.
        <br /><br />
        Использование разработанных устройств <?
        $file = new FileList();
        echo $file->showFile('Для застройщиков, энергосбытовых и УК.rar', 'при строительстве, капитальном ремонте');
        ?> общего имущества МКД и в жилищно-коммунальном хозяйстве позволяет технически реализовать процедуры введения ограничений на подачу коммунальных услуг (электроэнергии, горячей и холодной воды, тепловой энергии) потребителям-неплательщикам в строгом соответствии с действующим законодательством и при этом не затрагивает интересы добросовестных потребителей. Существенным преимуществом разработок является незначительная стоимость готовых изделий. На все виды нового оборудования получены патенты РФ.
        <br /><br />
        По итогам заседания Научно-технического совета Министерства жилищно-коммунального хозяйства и комиссии Министерства строительного комплекса Московской области приняты решения по рекомендации в использовании разработанных <a href="index.php?r=site/page&view=production&show=uto">устройств управления токоограничением</a> (УТО) и <a href="index.php?r=site/page&view=production&show=uvo">водоограничением</a> (УВО) как механизма улучшения платежной дисциплины населения для оснащения МКД при строительстве и проведении капитального ремонта на территории Московской области.
    </p>
</div>

