<?php

namespace intradesys\api\ebay\trading;
// $Id: EbatNs_DataConverter.php,v 1.2 2008-05-02 15:04:05 carsten Exp $
// $Log: EbatNs_DataConverter.php,v $
// Revision 1.2  2008-05-02 15:04:05  carsten
// Initial, PHP5
//
class EbatNs_DataConverter
{
    protected $options = array();

    function __construct ()
    {
    }

    function decodeData ($data, $type = 'string')
    {
        switch ($type)
        {
            case 'boolean':
                if ($data == 'true')
                    return true; else
                    return null;
        }
        return $data;
    }

    function encodeData ($data, $type = 'string', $elementName = null)
    {
        return ("<![CDATA[" . $data . "]]>");
    }

    function encryptData ($data, $type = null)
    {
        return $data;
    }

    function decryptData ($data, $type = null)
    {
        return $data;
    }
}

class EbatNs_DataConverterUtf8 extends EbatNs_DataConverter
{
    function __construct ()
    {
        parent::__construct();
    }
}

class EbatNs_DataConverterIso extends EbatNs_DataConverter
{
    function __construct ()
    {
        parent::__construct();
    }

    function decodeData ($data, $type = 'string')
    {
        switch ($type)
        {
            case 'string':
                return utf8_decode($data);
            case 'dateTime':
                {
                    //return $data;
                    $dPieces = split('T', $data);
                    $tPieces = split("\.", $dPieces[1]);
                    $data = $dPieces[0] . ' ' . $tPieces[0];
                    return date('Y-m-d H:i:s', strtotime($data) + date('Z'));
                    //return $data;
                }
            case 'boolean':
                if ($data == 'true')
                    return true; else
                    return null;
            default:
                return $data;
        }
    }

    //diff test1

    function encodeData ($data, $type = 'string', $elementName = null)
    {
        switch ($type)
        {
            case 'dateTime':
                if (preg_match('/^\d{4}\-\d{2}\-\d{2}T\d{2}:\d{2}:\d{2}Z$/',$data)) {
                    $data = substr($data,0,-1).".000Z";
                    //echo "DATA: ".$data."\n";
                } else {
                    //echo "dateTime IN: ".$data."\n";
                    $time = strtotime($data);
                    $data = date("Y-m-d\\TH:i:s.000\\Z", $time);
                    //echo "dateTime OUT: ".$data."\n";
                }
                break;
            
            case 'boolean':
            case 'int':
            case (substr($type, 0, - 8) . 'CodeType'):
                break;
            
            default:
                if (is_string($data))
                    if(mb_detect_encoding($data, 'UTF-8, ISO-8859-1') === 'UTF-8'){
                        # der String ist in UTF-8 kodiert
                        $data = "<![CDATA[" . $data . "]]>";
                    } else {
                        $data = "<![CDATA[" . utf8_encode($data) . "]]>";
                    }
                break;
        }
        
        return $data;
    }
}
?>