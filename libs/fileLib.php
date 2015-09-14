<?php
class FileList{

    public $base_path = 'files/';

    public function FileList($subdir = ''){
        if( $subdir != '' )
            $this->base_path = $this->base_path . $subdir . '/';
    }

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

    private $tr = array(
        "а"=>"a", "б"=>"b", "в"=>"v", "г"=>"g", "д"=>"d", "е"=>"e", "ё"=>".yo.",
        "ж"=>".zh.", "з"=>"z", "и"=>"i", "й"=>"j", "к"=>"k",
        "л"=>"l", "м"=>"m", "н"=>"n", "о"=>"o", "п"=>"p",
        "р"=>"r", "с"=>"s", "т"=>"t", "у"=>"u", "ф"=>"f",
        "х"=>".kh.", "ц"=>".tz.", "ч"=>".ch.", "ш"=>".sh.", "щ"=>".sch.", "ъ"=>".tzn.",
        "ы"=>"y", "ь"=>".mzn.", "э"=>".e.", "ю"=>".yu.", "я"=>".ya.", " "=>"-"
    );

    private $etr = array(
        "А"=>"a", "Б"=>"b", "В"=>"v", "Г"=>"g", "Д"=>"d",
        "Е"=>"e", "Ё"=>".yo.", "Ж"=>".zh.", "З"=>"z", "И"=>"i",
        "Й"=>"j", "К"=>"k", "Л"=>"l", "М"=>"m", "Н"=>"n",
        "О"=>"o", "П"=>"p", "Р"=>"r", "С"=>"s", "Т"=>"t",
        "У"=>"u", "Ф"=>"f", "Х"=>".kh.", "Ц"=>".tz.", "Ч"=>".ch.",
        "Ш"=>".sh.", "Щ"=>".sch.", "Ъ"=>".tzn.", "Ы"=>"y", "Ь"=>".mzn.",
        "Э"=>"e", "Ю"=>".yu.", "Я"=>".ya.",
        "а"=>"a", "б"=>"b", "в"=>"v", "г"=>"g", "д"=>"d",
        "е"=>"e", "ё"=>".yo.", "ж"=>".zh.", "з"=>"z", "и"=>"i",
        "й"=>"j", "к"=>"k", "л"=>"l", "м"=>"m", "н"=>"n",
        "о"=>"o", "п"=>"p", "р"=>"r", "с"=>"s", "т"=>"t",
        "у"=>"u", "ф"=>"f", "х"=>".kh.", "ц"=>".tz.", "ч"=>".ch.",
        "ш"=>".sh.", "щ"=>".sch.", "ъ"=>".tzn.", "ы"=>"y", "ь"=>".mzn.",
        "э"=>".e.", "ю"=>".yu.", "я"=>".ya.",
        " "=>"-", ","=>"", "/"=>"-",
        ":"=>"", ";"=>"","—"=>"", "–"=>"-"
    );

    function ru2lat($str)
    {
        return strtr($str,$this->etr);
    }

    function lat2ru($str)
    {
        return strtr($str, array_flip($this->tr));
    }

    function getFileParams($fileName){

        $pathInfo = pathinfo( $this->base_path . $fileName);
        switch( $pathInfo['extension'] ){
            case 'doc':
                $img = 'DOC.png';
                break;
            case 'docx':
                $img = 'DOCX.png';
                break;
            case 'pdf':
                $img = 'PDF.png';
                break;
            default:
                $img = '';
                break;
        }

        $numBytes = $this->format_bytes( filesize( $this->base_path . $fileName ) );

        $__fileName = $fileName;

        $fileName = mb_convert_encoding($pathInfo['filename'], "utf-8", "windows-1251");

        $_fileName = $this->ru2lat($fileName);

        if( file_exists($this->base_path . $__fileName ) &&
            $_fileName.'.'.$pathInfo['extension'] != $__fileName ){
            rename($this->base_path . $__fileName, $this->base_path . $_fileName.'.'.$pathInfo['extension']);
        }

        return array('img'=>$img, 'filename'=>$_fileName.'.'.$pathInfo['extension'], 'filecaption'=>$this->lat2ru($_fileName), 'filesize'=>$numBytes);
    }

    function showList($order=array()){

        $result = '';

        $files = array();

        if ( $handle = opendir( $this->base_path ) ) {
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
                                    <a target="_blank" href="'.$this->base_path.'[[FILENAME]]">[[FILECAPTION]]</a>
                                </td>
                                <td class="fTable">
                                    <b>[[FILESIZE]]</b>
                                </td>
                            </tr>';

            $page = '';

            if( !empty($order) ){
                foreach( $order as $_fname ){
                    foreach( $files as $fileName ){
                        if( $_fname == substr($fileName, 0, strrpos($fileName,'.')) ){
                            $ordered_files[] = $fileName;
                            continue;
                        }
                    }
                }

                $files = $ordered_files;
            }

            $fileParams = array();
            foreach ( $files as $fileName ){

                $page = $template;

                $fileParams = $this->getFileParams( $fileName );

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

            $result .= '    <div style="float:left">
                                <table class="fTable" width="100%" cellspacing="0">
                                '.$contentPage.'
                                </table>
                            </div>';
            //FILES BLOCK END
        }
        else{
            echo '<p class="error">Ошибка чтения каталога файлов</p>';
        }

        return $result;
    }

    function showFile($fname = '', $caption = ''){

        if( $fname == '' ){echo '<p class="error">Не задано имя файла</p>';return;}

        return '<a target="_blank" href="'.$this->base_path.rawurlencode(iconv('UTF-8','WINDOWS-1251',$fname)).'">'.$caption.'</a>';
    }
}