<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?> 
<div id="desc" class="desc">Устройство управления токоограничением</div>
<div class="jcarousel">
    <ul>
        <?php
        $carim = array(
            array('name'=>'uto.png','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Устройство управления токоограничением'),
            array('name'=>'uto1.png','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Устройство управления токоограничением'),
            array('name'=>'kk.png','link'=>'/index.php?r=site/page&view=production&show=uto', 'desc'=>'Коммутационная коробка для устройств управления токоограничением'),
            array('name'=>'uvo.png','link'=>'/index.php?r=site/page&view=production&show=uvo', 'desc'=>'Устройство управления водоограничением')
        );

        foreach( $carim as $img ){
            echo '<li><img class="" onclick="window.location.href=\''.$img['link'].'\';return false;" src="images/products/'.$img['name'].'" desc="'.$img['desc'].'" /></li>';
        }
        ?>
    </ul>
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
            $('div#desc').text( $(this).find('img').attr('desc') );
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
<p>
Открытое акционерное общество «Научно-производственное предприятие «Интеграл» было создано в 1999 году.
<br /><br />
В настоящий  момент ОАО «НПП «Интеграл» является одним из ведущих российских предприятий, обеспечивающих  научную и производственную базу по созданию высокотехнологичных систем и оборудования. Постоянное  удовлетворение требований и ожиданий потребителей, применение инновационных разработок позволяют обществу достигать высоких результатов и  повышать конкурентоспособность производимой продукции.</p>
<p> ОАО "НПП "Интеграл" конструктивно сотрудничает с Государственной корпорацией по атомной энергии «Росатом». Предприятие включено в состав отраслевого консорциума разработчиков и изготовителей оборудования АСУ ТП для АЭС. ОАО "НПП "Интеграл" является одним из предприятий, обеспечивающих ФГУП «ГОЗНАК» специальными материалами.</p>
<p>Основными направлениями деятельности ОАО «НПП «Интеграл» являются:</p>
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
<?php //echo CHtml::encode(Yii::app()->name); ?>
<?php //echo __FILE__; ?>
<?php //echo $this->getLayoutFile('main'); ?>