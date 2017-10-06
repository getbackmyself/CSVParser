# CSVParser
cvs file parser php


## Install:

 Via composer:

```
$ composer require getbackmyself/csv-parser
```
## Usage:


#To start the work shown in the examples below, you must first create a namespace
```php
use getbackmyself\CsvParser\CsvParser;
```

Get `Field count` return int:
```php
CsvParser::instance('filename', 'path')->getSize();
```

Get `Table Headers` return array:
```php
CsvParser::instance('filename', 'path')->getHeaders();
```

Get all `Fields` return array:
```php
CsvParser::instance('filename', 'path')->getFields();
```

Get `Field by ID` return array:
```php
CsvParser::instance('filename', 'path')->getField(id);
```
