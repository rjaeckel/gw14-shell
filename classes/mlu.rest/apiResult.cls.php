<?php
namespace mlu\rest;

use \Exception;

class apiResult implements \IteratorAggregate {
    /**
     * the content received by request
     * @var string|object
     */
    public $content;
    /**
     * the headers received by request
     * @var array
     */
    public $headers;
    /**
     * the request that created the object
     * @var object Object containing method,base,url and json-data
     */
    public $request;
    /**
     * the transport encoding
     * @var string
     */
    public $encoding;
    /**
     * constructor, shouldn't be called manually
     * @param string $str raw http-data inlucding headers
     * @param string|null $contentEncoding encoding type
     * @param object $origin request data
     */
    function __construct($str="", $contentEncoding=null,$origin=null) {
        $this->encoding=$contentEncoding;
        $this->request=$origin;
        $headers=array();
        $header_end=false;
        $content="";
        // split transport data into headers and payload
        $lines=\explode("\r\n",$str);
        foreach($lines as $line) {
            if(!$line) { $header_end=true; continue; }
            if($header_end) $content.=$line.($content?"\r\n":'');
            else {
                $headerLine=\preg_split ('/:? /',$line,2);
                if(\count($headerLine)>1) {
                    $headers[\strtolower($headerLine[0])]=$headerLine[1];
                } else {
                    $headers[]=$headerLine[0];
                }
            }
        }
        $this->headers=$headers;
        // decode data if encoding is set
        $this->content=$contentEncoding?\call_user_func($contentEncoding.'_decode',$content):$content;
    }
    /**
     * encode the data
     * @return string
     */
    public function __toString() {
        return (\is_object($this->content)||\is_array($this->content)?
            \call_user_func($this->encoding.'_encode',$this->content)
            :(string)$this->content).\PHP_EOL;
    }
    /**
     *
     * @param string $name the name of the property
     * @return mixed the property's value
     * @throws Exception
     */
    public function __get($name) {
        if(isset($this->content->$name)) {
            return $this->content->$name;
        }
        throw new Exception("Undefined property: $name");
    }
    /**
     * check if a property is set
     * @param string $name the name of the property
     * @return bool
     */
    public function __isset($name) {
        return isset($this->content->$name);
    }
    /**
     * get a specific header attribute
     * @param string $n the header's key, all lower case
     * @return string the value of the header line matched
     * @throws Exception if header field not found
     */
    public function header($n) {
        if(isset($this->headers[$n])) {
            return $this->headers[$n];
        }
        throw new Exception("Header <$n> not set.");
    }
    /**
     * get an iterator for the current data
     * @return ArrayIterator
     */
    public function getIterator() {
        return new \ArrayIterator($this->content);
    }
}
