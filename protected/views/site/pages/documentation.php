<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Документация';
$this->breadcrumbs=array(
    'Документация',
);

function format_bytes($a_bytes)
{
    if ($a_bytes < 1024) {
        return $a_bytes .' Б';
    } elseif ($a_bytes < 1048576) {
        return round($a_bytes / 1024, 2) .' кБ';
    } elseif ($a_bytes < 1073741824) {
        return round($a_bytes / 1048576, 2) . ' МБ';
    } elseif ($a_bytes < 1099511627776) {
        return round($a_bytes / 1073741824, 2) . ' ГБ';
    } elseif ($a_bytes < 1125899906842624) {
        return round($a_bytes / 1099511627776, 2) .' ТБ';
    }
}

function getFileParams($fileName){

    $pathInfo = pathinfo('files/'.$fileName);
    switch( $pathInfo['extension'] ){
        case 'doc':
            $img = 'DOC.png';
            break;
        default:
            break;
    }

    $numBytes = format_bytes( filesize( 'files/'.$fileName ) );

    $fileName = mb_convert_encoding($pathInfo['filename'], "utf-8", "windows-1251");

    return array('img'=>$img, 'filename'=>rawurlencode($pathInfo['filename']).'.'.$pathInfo['extension'], 'filecaption'=>$fileName, 'filesize'=>$numBytes);
}

$files = array();
if ( $handle = opendir('files/') ) {
    while (false !== ($filename = readdir($handle))) {
        if ($filename != "." &&
            $filename != "..") {

            $files[] = $filename;
        }
    }
    closedir($handle);

    //FILES BLOCK START
    $contentPage = '';
    $replace	= array('[[IMGSRC]]'=>'','[[FILENAME]]'=>'','[[FILECAPTION]]'=>'','[[FILESIZE]]'=>'');
    $template	= '	<tr>
						<td class="fTable">
							<img src="images/[[IMGSRC]]"/>
						</td>
						<td class="fTable">
							<a href="files/[[FILENAME]]">[[FILECAPTION]]</a>
						</td>
						<td class="fTable">
							<b>[[FILESIZE]]</b>
						</td>
					</tr>';

    $page = '';

    $fileParams = array();
    foreach ( $files as $fileName ){

        $page = $template;

        $fileParams = getFileParams( $fileName );

        foreach ( $replace as $replaceThis => $replacement ){
            switch ( $replaceThis ){

                case '[[FILECAPTION]]':
                    $replace[$replaceThis] = $fileParams['filecaption'];
                    break;

                case '[[FILENAME]]':
                    $replace[$replaceThis] = $fileParams['filename'];
                    break;

                case '[[IMGSRC]]':
                    $replace[$replaceThis] = $fileParams['img'];
                    break;

                case '[[FILESIZE]]':
                    $replace[$replaceThis] = $fileParams['filesize'];
                    break;

                default:
                    $replace[$replaceThis] = '';
                    break;
            }
        }

        foreach ( $replace as $replaceThis => $replacement )
            $page = str_replace( $replaceThis, $replacement, $page );

        $contentPage .= $page;
    }

    echo '	<div style="float:left">
				<table class="fTable" width="100%" cellspacing="0">
				'.$contentPage.'
				</table>
			</div>';
    //FILES BLOCK END
}
else{
    echo '<p class="error">Ошибка чтения каталога файлов</p>';
}

?>