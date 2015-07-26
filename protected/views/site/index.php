<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

require_once 'libs/fileLib.php';

?> 
<div style="margin: 0 auto; width: 725px; font-size: 20px; font-style: italic; padding-bottom: 5px;">
    Наша стратегия – непрерывное развитие и ориентированность на успех!
</div>
<!-- <div id="desc" class="desc tcolor">Устройство управления токоограничением</div> -->
<div class="quarter">
    <div class="jcarousel">
        <ul>
            <?php
            $carim = array(
                //array('name'=>'uto-01f12_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Устройство управления токоограничением'),
                array('name'=>'uto-01f20_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Устройство управления токоограничением'),
                //array('name'=>'kk.JPG','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Коммутационная коробка для устройств управления токоограничением'),
                array('name'=>'uto_m200_m.jpg','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Устройство управления токоограничением'),
                array('name'=>'integra_m.jpg','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Устройство управления токоограничением'),
                array('name'=>'uvo_hw_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uvo', 'desc'=>'Устройство управления водоограничениемб горячее водоснабжение'),
                array('name'=>'uvo_cw_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uvo', 'desc'=>'Устройство управления водоограничением, холодное водоснабжение'),
                array('name'=>'uvo_h_m.JPG','link'=>'/index.php?r=site/page&view=production&show=uvo', 'desc'=>'Устройство управления водоограничением, теплоснабжение'),
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
        <!-- <span style="float:left; margin-top:2px; font-weight:normal; /*color: #4067C4;*/ font-size: 14px;">С 2010 года в целях модернизации систем коммунальной инфраструктуры и внедрения ресурсосберегающих технологий ОАО «НПП «Интеграл» предлагает для использования в сфере жилищно-коммунального хозяйства инновационные решения, обеспечивающие повышение платежной дисциплины населения и применение эффективных мер воздействия на неплательщиков за коммунальные услуги.<br /><br />Использование новых разработок и систем на их основе позволяет технически реализовать процедуры введения ограничений на подачу коммунальных ресурсов (электроэнергии, горячей и холодной воды, тепловой энергии) потребителям-неплательщикам в соответствии с действующим законодательством и при этом не затрагивает интересы добросовестных потребителей коммунальных услуг.<br /><br />Существенным преимуществом разработок является незначительная стоимость готовых изделий.<br /><br />На все виды нового оборудования, как объекты промышленной собственности, получены патенты РФ.</span> -->
        <span style="float:left; margin-top:2px; font-weight:normal; /*color: #4067C4;*/ font-size: 16px;">
            Открытое акционерное общество «Научно-производственное предприятие «Интеграл», используя производственный потенциал <a href="http://www.tenzor.net/" target="_blank">ОАО «Приборный завод «Тензор»</a> (г. Дубна, Московская обл.), в 2014 году начало реализацию инновационного проекта, обеспечивающего применение эффективных мер воздействия на должников и повышение платежной дисциплины населения за потребленные коммунальные услуги.
        </span>
        <span style="float:left; margin-top:5px; width:100%; font-size: 16px;">
            Использование разработанных устройств <?
            $file = new FileList();
            echo $file->showFile('Для застройщиков, энергосбытовых, ресурсоснабжающих и проектных организаций.rar', 'при строительстве, капитальном ремонте');
            ?> общего имущества МКД и в жилищно-коммунальном хозяйстве позволяет технически реализовать процедуры введения ограничений на подачу коммунальных услуг (электроэнергии, горячей и холодной воды, тепловой энергии) потребителям-неплательщикам в строгом соответствии с действующим законодательством и при этом не затрагивает интересы добросовестных потребителей. Существенным преимуществом разработок является незначительная стоимость готовых изделий. На все виды нового оборудования получены патенты РФ.
        </span>
        <span style="float:left; margin-top:5px; width:100%; font-size: 16px;">
            По итогам заседания Научно-технического совета Министерства жилищно-коммунального хозяйства и комиссии Министерства строительного комплекса Московской области приняты решения по рекомендации в использовании разработанных <a href="index.php?r=site/page&view=production&show=uto">устройств управления токоограничением</a> (УТО) и <a href="index.php?r=site/page&view=production&show=uvo">водоограничением</a> (УВО) как механизма улучшения платежной дисциплины населения для оснащения МКД при строительстве и проведении капитального ремонта на территории Московской области.
        </span>
        <!--
        <span style="float:left; margin-top:20px;">Контакты группы инновационных проектов:</span>
        <span style="float:left; margin-top:5px; width:100%">тел./факс&nbsp;&nbsp;<a class="nolink black" href="tel:+7 496 217-03-83">+7 496 217-03-83</a></span>
        <span style="float:left; margin-top:5px; width:100%"><b>Руководитель группы</b>&nbsp;&mdash;&nbsp;Петров Валерий Александрович</span>
        <span style="float:left; margin-top:5px; width:100%"><b>Главный менеджер группы</b>&nbsp;&mdash;&nbsp;Акелин Александр Владимирович</span>
        <span style="float:left; margin-top:5px; width:100%"><b>Инженер группы</b>&nbsp;&mdash;&nbsp;Тимонин Роман Владимирович</span>
        <span style="float:left; margin-top:3px;">e-mail&nbsp;&nbsp;<a class="nolink black" href="mailto:ig@nppintegral.ru">ig@nppintegral.ru</a></span>
        -->
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
            // "this" refers to the item element
            // "carousel" is the jCarousel instance
            //$('div#desc').text( $(this).find('img').attr('desc') );
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
<!-- <h4 class="tcolor">Открытое акционерное общество «Научно-производственное предприятие «Интеграл» было создано в 1999 году.</h4> -->
<!--
<p>Открытое акционерное общество «Научно-производственное предприятие «Интеграл» (ОАО «НПП «Интеграл») было образовано на базе ОАО «Научно-производственное предприятие «Тензор», которое было создано для решения задач объединения финансового, производственного и научно-технического потенциалов предприятий сферы атомного машиностроения, вновь образованных предприятий на базе промышленной инфраструктуры Приборного завода «Тензор» и начало свою деятельность в 1998 году.</p>
<p>В связи с расширением видов деятельности в 2009 году ОАО «НПП «Тензор» было переименовано в ОАО «НПП «Интеграл», и на данный момент в перечень заказчиков предприятия входят такие организации, как Госкорпорация «Росатом», Министерство обороны РФ, ФСК ЕЭС России, ОАО «РусГидро», ОАО «РЖД».</p>
<p>Более 10 лет успешно реализуется сотрудничество предприятия с ФГУП «ГОЗНАК».</p>
<p>В 2011 году ОАО «НПП «Интеграл» внедрило систему экологического менеджмента на соответствие требованиям международного стандарта ИСО 14001-2009г., который подтверждается регулярными сертификационными аудитами.</p>
<p>В городе Дубне Московской области создан филиал ОАО «НПП «Интеграл», который является производственной площадкой, обеспечивающей стабильность и бесперебойность производственных процессов предприятия.</p>
<p>В настоящий момент ОАО «НПП «Интеграл» является одним из ведущих российских предприятий, обеспечивающих научную и производственную базу по созданию высокотехнологичных систем и оборудования. Постоянное удовлетворение требований и ожиданий потребителей, применение инновационных разработок позволяют обществу достигать высоких результатов и повышать конкурентоспособность производимой продукции.</p>
-->
<!--
<h4 class="tcolor">Основными направлениями деятельности ОАО «НПП «Интеграл» являются:</h4>
<p>
    <ul>
        <li>
            Проектирование, разработка, освоение, промышленное производство, проведение испытаний, поставка, монтаж, пуско-наладка, ремонт и техническое обслуживание:<br />
            <ul>
                <li>Компьютеризированных систем, приборов и оборудования для атомных станций.</li>
                <li>Технических средств охраны, комплексов и систем технических средств охраны,комплексов охранной сигнализации протяженных и локальных объектов, средств обнаружения, средств управления доступом.</li>
                <li>Современных систем пожаротушения для промышленных объектов, в том числе ядерно- и радиационно-опасных.</li>
                <li>Информационных (криптографических) средств, защитных голографических знаков и других новых изделий.</li>
            </ul>
        </li>
        <li>
            Разработка и реализация научно-технических идей, новых технологических процессов, конструкций, приборов, оборудования, технической документации на их производство и изготовление.
        </li>
        <li>
            Поставка, производство металлических изделий с различными покрытиями, материалов, обладающих специальными свойствами.
        </li>
        <li>
            Организация производства продукции по заказам юридических лиц на договорных условиях.
        </li>
    </ul>
</p>
<p>
В городе Дубне Московской области создан филиал  Общества, который является производственной площадкой, обеспечивающей стабильность и бесперебойность производственных процессов ОАО «НПП «Интеграл».
</p>
<p>
Ключевым вопросом в политике развития Общества является поддержание положительного имиджа, надежность, сохранение действующих позиций на рынке и освоение новых направлений.
</p>
<p>
ОАО "НПП "Интеграл" планирует продвижение своей продукции и услуг по направлениям обеспечения информационной, охранной и пожарной безопасности особо важных объектов на территории России и других стран.
</p>
<p>
Стратегией ОАО "НПП "Интеграл" является непрерывное развитие и ориентированность на успех.
</p>
-->
<?php //echo CHtml::encode(Yii::app()->name); ?>
<?php //echo __FILE__; ?>
<?php //echo $this->getLayoutFile('main'); ?>