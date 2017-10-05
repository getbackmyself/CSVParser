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
use getbackmyself\CSVParser;
```

Get `Field count` return int:
```php
CSVParser::instance('filename', 'path')->getSize();
```

Get `Table Headers` return array:
```php
CSVParser::instance('filename', 'path')->getHeaders();
```

Get all `Fields` return array:
```php
CSVParser::instance('filename', 'path')->getFields();
```

Get `Field by ID` return array:
```php
CSVParser::instance('filename', 'path')->getField(id);
```
