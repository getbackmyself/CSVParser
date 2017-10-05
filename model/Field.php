<?php
/**
 * @author Mukhammed Adullayev <mukhammed.ne@gmail.com>
 * @git - https://github.com/getbackmyself
 */

namespace getbackmyself\CsvParser\model;


class Field
{

    public $headers=[];//загаловки файла
    public $file;//полный путь до файла
    public $data=[];//весь распарсенный файл
    public $size=0;//количество строк в файле



    public function __construct($file)
    {
        $this->file=$file;
        $this->parser();
    }



    public function parser() {

        if (($handle = fopen($this->file, "r")) !== FALSE)
        {
            for ($row=0; ($data = fgetcsv($handle, 1000, ",")) !== FALSE;$row++)
            {
                //количество столбцов в строке
                $num = count($data);

                //итого строк
                $this->size=$row;

                //формируем header
                if($row==0)
                {
                    for ($c=0; $c < $num; $c++)
                    {
                        $this->headers[$c]=$data[$c];
                    }
                }


                //формируем массив из элементов файла
                for ($c=0; $c < $num; $c++)
                {
                    $this->data[$row][$this->headers[$c]]=$data[$c];
                }
            }
            fclose($handle);
        }
    }


    public function getFields(){
        return $this->data;
    }

    public function getField($id){
        return $this->data[$id];
    }


    public function getHeaders(){
        return $this->headers;
    }


    public function getSize(){
        return $this->size;
    }

}