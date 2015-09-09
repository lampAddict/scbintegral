<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

require_once 'libs/fileLib.php';

?> 
<div style="margin: 0 auto; width: 725px; font-size: 20px; font-style: italic; padding-bottom: 5px;">
    Наша стратегия – непрерывное развитие и ориентированность на успех!
</div>
<div class="quarter">
    <div class="jcarousel">
        <ul>
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

            foreach( $carim as $img ){
                echo '<li><img class="" onclick="window.location.href=\''.$img['link'].'\';return false;" src="images/products/'.$img['name'].'" desc="'.$img['desc'].'" /></li>';
            }
            ?>
        </ul>
    </div>
</div>
<div class="threefourth">
    <div class="devcontact">
        <span style="float:left; margin-top:2px; font-weight:normal; font-size: 16px;">
            Открытое акционерное общество «Научно-производственное предприятие «Интеграл», используя производственный потенциал <a href="http://www.tenzor.net/" target="_blank">ОАО «Приборный завод «Тензор»</a> (г. Дубна, Московская обл.), в 2014 году начало реализацию инновационного проекта, обеспечивающего применение эффективных мер воздействия на должников и повышение платежной дисциплины населения за потребленные коммунальные услуги.
        </span>
        <span style="float:left; margin-top:10px; width:100%; font-size: 16px;">
            Использование разработанных устройств <?
            $file = new FileList();
            echo $file->showFile('Для застройщиков, энергосбытовых и УК.rar', 'при строительстве, капитальном ремонте');
            ?> общего имущества МКД и в жилищно-коммунальном хозяйстве позволяет технически реализовать процедуры введения ограничений на подачу коммунальных услуг (электроэнергии, горячей и холодной воды, тепловой энергии) потребителям-неплательщикам в строгом соответствии с действующим законодательством и при этом не затрагивает интересы добросовестных потребителей. Существенным преимуществом разработок является незначительная стоимость готовых изделий. На все виды нового оборудования получены патенты РФ.
        </span>
        <span style="float:left; margin-top:10px; width:100%; font-size: 16px;">
            По итогам заседания Научно-технического совета Министерства жилищно-коммунального хозяйства и комиссии Министерства строительного комплекса Московской области приняты решения по рекомендации в использовании разработанных <a href="index.php?r=site/page&view=production&show=uto">устройств управления токоограничением</a> (УТО) и <a href="index.php?r=site/page&view=production&show=uvo">водоограничением</a> (УВО) как механизма улучшения платежной дисциплины населения для оснащения МКД при строительстве и проведении капитального ремонта на территории Московской области.
        </span>
    </div>
</div>
<script type="text/javascript">

    $('.jcarousel').on('jcarousel:targetin', 'li', function(event, carousel) {
        var img = this.firstChild;
        if( img )
            $('.jcarousel').width(parseInt(img.width));
    });

    $('.jcarousel').jcarousel({
        visible: 1,
        scroll: 1,
        wrap: 'circular'
    }).on('jcarousel:firstin', 'li', function(event, carousel) {
    }).jcarousel({
            animation: {
                duration: 600,
                easing:   'linear'
            }
    }).jcarouselAutoscroll({
            interval: 3000,
            target: '+=1',
            autostart: true
            });
</script>