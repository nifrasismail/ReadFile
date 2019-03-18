<?php
/**
 * Read File Package
 *
 * @author  Nifras Ismail <nifrasismail@gmail.com>
 * @copyright Copyright © 2019 Nertlab.
 * @license   MIT
 */
namespace Nertlab\FileRead\FileProcessor;

use Illuminate\Support\Facades\File;

class Read
{
    public function readFile($path, $line_delimiter="\n", $word_delimiter="\t")
    {
        $contents = File::get($path);
        $lines = explode($line_delimiter,$contents);
        $array = array();
        foreach ($lines as $line){
            array_push($array,explode($word_delimiter,$line));
        }
        return $array;
    }
}
