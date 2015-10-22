<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Контакты';
$this->breadcrumbs=array(
    'Контакты',
);

function _wrap($type, $cont){
    switch( $type ){
        case 'email':
            return '<a class="nolink black" href="mailto:' . $cont . '">' . $cont . '</a>';
            break;
        case 'phone':
            return '<a class="nolink black" href="tel:' . $cont . '">' . $cont . '</a>';
            break;
        default:
            break;
    }
}
?>
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){
        myMap = new ymaps.Map("map", {
            center: [56.72708106, 37.17560191],
            zoom: 17
        });

        myPlacemark = new ymaps.Placemark([55.75399400, 37.62209300], {
            hintContent: '«Интеграл»',
            balloonContent: 'ОАО «НПП «Интеграл»'
        });

        myMap.geoObjects.add(myPlacemark);
    }
</script>

<p>
<b>Открытое акционерное общество «Научно-производственное предприятие «Интеграл»</b>
</p>
<!--
<p>
119034, Россия,  г.Москва, ул.Пречистенка,  д.40/2,  стр.2
</p>
<p>
тел./факс&nbsp;<a class="nolink black" href="tel:+7 (499) 255 87 48">+7 (499) 255 87 48</a>,&nbsp;<a class="nolink black" href="tel: 255 34 39">255 34 39</a>
</p>
<p>
    e-mail&nbsp;<a class="nolink black" href="mailto:office@nppintegral.ru">office@nppintegral.ru</a>
</p>
<p>
<b>Генеральный директор</b>&nbsp;&mdash;&nbsp;Каплоухий Сергей Александрович<br />
</p>
<p>
    <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=JbPqcteKqMMximgoE6Oj_2lAQqmKdibs&width=600&height=450"></script>
</p>
<br />
<p>
    <b>Филиал ОАО «НПП «Интеграл»</b>
</p>
-->
<p>
    141980, Россия, г. Дубна Московской области, ул. Приборостроителей, д. 2, офис 408
</p>
<p>
    Отдел реализации продукции:
    <br />
    тел.&nbsp;<?=_wrap('phone','+7 (496) 217 03 53')?> e-mail:&nbsp;<?=_wrap('email','ig@nppintegral.ru')?>;&nbsp;<?=_wrap('email','akelin_@mail.ru')?>
</p>
<p>
    Директор по региональному развитию и реализации продукции - Акелин Александр Владимирович, моб.&nbsp;тел.&nbsp;:<?=_wrap('phone','+7 (903) 726 25 55')?>
</p>
<p>
    Ведущий менеджер – Титов Алексей Владимирович, моб.&nbsp;тел.&nbsp;:<?=_wrap('phone','+7 (965) 167-23-57')?>
</p>
<p>
    Инновационная группа:
    <br />
    тел.:&nbsp;<?=_wrap('phone','+7 (496) 217 03 83')?>; e-mail:&nbsp;<?=_wrap('email','ig@nppintegral.ru')?>
    <br />
    Руководитель – Петров Валерий Александрович
    <br />
    Инженер – Тимонин Роман Владимирович
</p>
<p>
    <div id="map" style="width: 100%; height: 400px"></div>
</p>