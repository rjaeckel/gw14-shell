<?php
namespace mlu\common\functions;
use XMLReader;
/**
 * xml-helper
 * 
 * @link http://de1.php.net/manual/de/class.xmlreader.php#100074 copied from here
 * @subpackage xml
 * @package helpers
 * @author j.art <jart@mail.ru>
 */

/**
 * create associative, multidemsional array from xml-file
 * @param XMLReader $xml xml-file-pointer
 * @param int $d recursion-identifier
 * @return mixed[] the convertet data
 */
function xml2assoc(XMLReader $xml,$d=0) {
    $tree = null;
    while($xml->read()) {
        switch ($xml->nodeType) {
            case XMLReader::END_ELEMENT:
                return $tree;
            case XMLReader::ELEMENT:                
                $node = array('tag' => $xml->name);
                if(!$xml->isEmptyElement) $node['value']=xml2assoc($xml,$d+1); 
                if($xml->hasAttributes) {
                    while($xml->moveToNextAttribute()) {
                        $node[$xml->name] = $xml->value;
                    }
                }
                $tree[] = (object)$node;
                break; 
            case XMLReader::TEXT: 
            case XMLReader::CDATA: 
                $tree .= $xml->value;
                break;
        }
    }
    return $tree;
} 

