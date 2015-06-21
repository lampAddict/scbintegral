<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Контакты';
$this->breadcrumbs=array(
    'Контакты',
);
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
    <div id="map" style="width: 600px; height: 400px"></div>
</p>
<p>
141980, Россия, г. Дубна Московской области, ул. Приборостроителей, д. 2
</p>
<p>
тел./факс&nbsp;<a class="nolink black" href="tel:+7 (496) 217 03 83">+7 (496) 217 03 83</a>
</p>
<p>
    моб. тел.&nbsp;<a class="nolink black" href="tel:+7 (903) 726-25-55">+7 (903) 726-25-55</a>
</p>
<p>
e-mail&nbsp;<a class="nolink black" href="mailto:akelin_@mail.ru">akelin_@mail.ru</a>
</p>