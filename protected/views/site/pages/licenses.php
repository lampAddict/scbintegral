<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Лицензии и сертификаты';
$this->breadcrumbs=array(
    'Лицензии и сертификаты',
);

require_once 'libs/fileLib.php';

$fileList = new FileList('licenses');
echo $fileList->showList();