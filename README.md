#Read Text Files - FileRead Packagist

This package helps to convert any text file to array. So it is makes life easier to read
the file in array format.

#Usage

where ever you need to read the file just adding the path of the text file  as follow. 

usually people put their files on storage directory of laravel
```php
use Nertlab\FileRead\FileProcessor\Read;

$contents = (new Read())->readFile(storage_path('app/myFile.txt'));
```

By default we are set delimiters of line are `\n` and word delimiter as`\t`

you can by pass this as follow
```php
use Nertlab\FileRead\FileProcessor\Read;

$contents = (new Read())->readFile(storage_path('app/myFile.txt'), "\n", "\t");
```

