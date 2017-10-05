<?php
/**
 * @author Mukhammed Adullayev <mukhammed.ne@gmail.com>
 * @git - https://github.com/getbackmyself
 */


namespace app\modules\docs\components\CSVParser;

use yii\helpers\VarDumper;
use  app\modules\docs\components\CSVParser\model\Field;
use Yii;

class CSVParser
{


    private $path="@webroot/upload/docs/";
    private static $instance;
    private $storage=[];
    private $filename;


    public static function instance($filename, $path=null) {
        if (null === static::$instance)
            static::$instance = new static($filename, $path);
        return static::$instance->getFileModel();
    }

    private function __construct($filename, $path=null) {
        $this->filename=$filename;
        if($path)$this->path=$path;
    }


    private function __clone() {}
    private function __wakeup() {}


    private function getFileModel() {
        if (key_exists($this->filename, $this->storage))
            return $this->storage[$this->filename];
        $file=Yii::getAlias($this->path.$this->filename.'.csv');
        $this->storage[$this->filename] = new Field($file);
        return $this->storage[$this->filename];
    }

}