<?php

namespace SM\Bundle\AdminBundle\Utilities;

class Helper
{

    /**
     * @param type $string    string
     * @param type $strSymbol strSymbol
     * @param type $length    length
     *
     * @return type
     */
    public static function cleanString($string, $strSymbol = '-', $length = 255)
    {
        $arrCharFrom = array(
            "ạ", "á", "à", "ả", "ã", "Ạ", "Á", "À", "Ả", "Ã",
            "â", "ậ", "ấ", "ầ", "ẩ", "ẫ", "Â", "Ậ", "Ấ", "Ầ", "Ẩ", "Ẫ",
            "ă", "ặ", "ắ", "ằ", "ẳ", "ẫ", "Ă", "Ắ", "Ằ", "Ẳ", "Ẵ", "Ặ",
            "ê", "ẹ", "é", "è", "ẻ", "ẽ", "Ê", "Ẹ", "É", "È", "Ẻ", "Ẽ",
            "ế", "ề", "ể", "ễ", "ệ", "Ế", "Ề", "Ể", "Ễ", "Ệ",
            "ọ", "ộ", "ổ", "ỗ", "ố", "ồ", "Ọ", "Ộ", "Ổ", "Ỗ", "Ố", "Ồ", "Ô", "ô",
            "ó", "ò", "ỏ", "õ", "Ó", "Ò", "Ỏ", "Õ",
            "ơ", "ợ", "ớ", "ờ", "ở", "ỡ",
            "Ơ", "Ợ", "Ớ", "Ờ", "Ở", "Ỡ",
            "ụ", "ư", "ứ", "ừ", "ử", "ữ", "ự", "Ụ", "Ư", "Ứ", "Ừ", "Ử", "Ữ", "Ự",
            "ú", "ù", "ủ", "ũ", "Ú", "Ù", "Ủ", "Ũ",
            "ị", "í", "ì", "ỉ", "ĩ", "Ị", "Í", "Ì", "Ỉ", "Ĩ",
            "ỵ", "ý", "ỳ", "ỷ", "ỹ", "Ỵ", "Ý", "Ỳ", "Ỷ", "Ỹ",
            "đ", "Đ",
            "›"
        );
        $arrCharEnd = array(
            "a", "a", "a", "a", "a", "A", "A", "A", "A", "A",
            "a", "a", "a", "a", "a", "a", "A", "A", "A", "A", "A", "A",
            "a", "a", "a", "a", "a", "a", "A", "A", "A", "A", "A", "A",
            "e", "e", "e", "e", "e", "e", "E", "E", "E", "E", "E", "E",
            "e", "e", "e", "e", "e", "E", "E", "E", "E", "E",
            "o", "o", "o", "o", "o", "o", "O", "O", "O", "O", "O", "O", "O", "o",
            "o", "o", "o", "o", "O", "O", "O", "O",
            "o", "o", "o", "o", "o", "o",
            "O", "O", "O", "O", "O", "O",
            "u", "u", "u", "u", "u", "u", "u", "U", "U", "U", "U", "U", "U", "U",
            "u", "u", "u", "u", "U", "U", "U", "U",
            "i", "i", "i", "i", "i", "I", "I", "I", "I", "I",
            "y", "y", "y", "y", "y", "Y", "Y", "Y", "Y", "Y",
            "d", "D",
            ""
        );

        $arrCharFilter = str_replace($arrCharFrom, $arrCharEnd, trim($string));

        if (mb_strlen($arrCharFilter, "UTF-8") > $length) {
            $arrCharFilter = mb_substr($arrCharFilter, 0, $length, "UTF-8");
        }

        $arrCharFilter = preg_replace('/[\W|_]+/', $strSymbol, $arrCharFilter);
        $arrCharFilter = trim($arrCharFilter, '-');

        return strtolower($arrCharFilter);
    }

    /**
     * Get teaser for string
     *
     * @param type $string
     * @param type $wordCount
     * @return type
     */
    public static function getTeaser($string, $wordCount = 100)
    {
        $string = str_replace("\n", '', $string);
        $string = preg_replace('/<style.*<\/style>/i', '', $string);
        //$string = preg_replace('/&amp;/i','&',$string);
        $trimmed = "";
        $string = strip_tags($string);
        $string = preg_replace("/\040+/", " ", trim($string));
        $stringc = explode(" ", $string);
        if ($wordCount >= sizeof($stringc))
            return $string; //nothing to do, our string is smaller than the limit.

            
// trim the string to the word count
        for ($i = 0; $i < $wordCount; $i++)
            $trimmed .= $stringc[$i] . " ";
        if (substr($trimmed, strlen(trim($trimmed)) - 1, 1) == '.')
            return trim($trimmed) . ' ..';
        return trim($trimmed) . ' ...';
    }

    /**
     * Create thumbnail for image
     * @param type $imgName
     * @return type
     */
    public static function createThumb($imgName = '')
    {
        if (!empty($imgName)) {
            $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
            return $container->get('liip_imagine.controller')
                            ->filterAction(
                                    new \Symfony\Component\HttpFoundation\Request(), $imgName, 'thumbs'
            );
        }
    }

    /**
     * Get content type of the file
     */
    public static function getContentType($fileName)
    {
        $contentType = '';
        if (!empty($fileName)) {
            $arr = explode(".", $fileName);
            if (!empty($arr[1])) {
                $type = $arr[1];
                switch ($type) {
                    case 'pdf':
                        $contentType = 'text/pdf';
                        break;
                    case 'docx':
                    case 'doc':
                        $contentType = 'application/vnd.ms-word';
                        break;
                    case 'xls':
                    case 'xlsx':
                        $contentType = 'application/vnd.ms-excel';
                        break;
                    case 'zip':
                    case 'rar':
                    case '7z':
                        $contentType = 'application/octet-stream';
                        break;
                    default:
                        $contentType = 'text/html';
                }
            }
        }
        return $contentType;
    }

    /**
     * Parse id from url
     * 
     * @param string $url
     * @return int 
     */
    public static function getIdFromUrl($url)
    {
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
        $comma = $container->getParameter('comma_nice_url');
        $id = '';
        if (!empty($url)) { //The url is ao-nguc-4.html
            $params = explode($comma, $url);
            if (!empty($params[count($params) - 1])) {
                $params = $params[count($params) - 1];  //The url is 4.html
                $params = explode(".", $params);
                if (!empty($params[0])) {

                    return $params[0];  //This is Id
                }
            }
        }

        return $id;
    }

    /**
     * get last url from url
     */
    public static function getLastUrlFromUrl($url)
    {
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
        $comma = $container->getParameter('comma_nice_url');
        $arrUrl = explode("/", trim($url));
        if (is_array($arrUrl) && count($arrUrl) > 0 && !empty($arrUrl[count($arrUrl) - 1])) {
            $url = $arrUrl[count($arrUrl) - 1];
        }
        return $url;
    }

}