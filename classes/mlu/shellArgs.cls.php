<?php
namespace mlu;

/**
 * Wrapper for Shell Arguments
 *
 * <p>This Class is a Singleton. Use shellArgs::parse() to get An instance</p>
 * @property-read string[] $queryString querystring parameters
 * @property-read Traversable|object $templateParams template-parameters
 * @property-read Traversable|object $payloadData Generated payload data
 * @property-read Traversable|object $effectiveData Data to merge into payload-Data, codespecific
 * @property-read string $binary file that is being executed
 * @property-read int $argC Number of accepted shell-arguments
 */
class shellArgs {
    /**
     * parsed shell arguments will be stored here
     * @var object
     */
    protected static $data;
    /**
     * default return-value, if a __get fails
     * @var mixed
     */
    protected $returnIfUnset=array();
    /**
     * constructor, can only be called from internal methods
     */
    protected function shellArgs() {
        
    }
    /**
     * parse the shell-arguments if neccessary and return instance
     * @return shellArgs
     */
    public static function parse() {
        if(!isset(static::$data)) {
            $binary = basename($GLOBALS['argv'][0]);
            $res=static::$data=(object)array('argC'=>0,'binary'=>$binary);
            $argc=$GLOBALS['argc'];
            $argv=$GLOBALS['argv'];
            
            common::issetOr($res->templateParams);
            common::issetOr($res->queryString,array());
            common::issetOr($res->payloadData);
            
            for($i=1;$i<$argc;$i++) {
                if(preg_match('/^(?P<prefix>-|\?|@)?(?P<param>[a-z]+)(=(?P<value>.*))?$/i',$argv[$i],$match)) {
                    // check forjson-encoded values
                    if(isset($match['value']) && strtolower($match['value'])!='null') {
                        // try to set value to decoded string
                        if((null===$value=json_decode($match['value']))||(isset($match['prefix'])&&$match['prefix']=='?')) {
                            // decoding failed, or querystring. reset
                            $value=$match['value'];
                        }
                    } else {
                        // value is "null"
                        $value=null;
                    }
                    // find the correct target and place the argument
                    if($pref=$match['prefix']) {
                        if($pref=='-') {
                            $res->templateParams->{$match['param']}=common::issetOr($value, '-undefined-');
                            $res->argC++;
                        } elseif($pref=='@') {
                            common::issetOr($res->effectiveData);
                            $res->effectiveData->{$match['param']}=common::issetOr($value,'');
                            $res->argC++;
                        } else {
                            $res->queryString[]=$match['param'].'='.common::issetOr($value,true);
                            $res->argC++;
                        } // more options..?
                    } else {
                        $res->payloadData->{$match['param']}=common::issetOr($value,'');
                        $res->argC++;
                    }
                } else {
                    trigger_error("Unknown parameter Pattern <$argv[$i]>", E_USER_WARNING);
                }
            }
            $res->queryString=implode('&',$res->queryString);
        }
        return new shellArgs();
    }
    /**
     * Read the fields
     * @param string $name
     * @return mixed
     */
    public function __get($name) {
        return isset(static::$data->$name)?static::$data->$name:$this->returnIfUnset;
    }
    /**
     * Set the default return value. if a property does not exist
     * @param mixed $value
     * @return shellArgs
     */
    public function setDefault($value) {
        $this->returnIfUnset=$value;
        return $this;
    }
    /**
     * get the all parsed data as array
     * @return mixed[] the parsed data
     */
    public function getArray() {
        return (array)static::$data;
    }
}
