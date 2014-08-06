<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Документация';
$this->breadcrumbs=array(
    'Документация',
);

require_once 'libs/fileLib.php';

$fileList = new FileList();
echo $fileList->showList();

?>