<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Лицензии и сертификаты';
$this->breadcrumbs=array(
    'Лицензии и сертификаты',
);

require_once 'libs/fileLib.php';

$order = array(
                'svidetelstvo-na-.e.lektros.ch.et.ch.ik-integra',
                'sertifikat-sootvetstvi.ya.-uto',
                'patent-na-uto',
                'patent-na-uvo',
                'tamo.zh.ennyj-so.yu.z-deklara.tz.i.ya.-sootvetstvi.ya.',
                'sertifikat-sootvetstvi.ya.-sistemy-mened.zh.menta-ISO-14001-2004',
                'sertifikat-sootvetstvi.ya.-sistemy-mened.zh.menta-ISO-9001-2008'
                );

$fileList = new FileList('licenses');
echo $fileList->showList($order);