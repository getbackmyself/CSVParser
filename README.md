# CSVParser
cvs file parser php


## Install:

 Via composer:

```
$ composer require getbackmyself/CSVParser
```
## Usage:


Get `Field count` return int:

```php
use getbackmyself\CSVParser;
use getbackmyself\CSVParser\models\Field;

CSVParser::instance('filename', 'path')->getSize();
```


Get `Table Headers` return array:

```php
use getbackmyself\CSVParser;
use getbackmyself\CSVParser\models\Field;

CSVParser::instance('filename', 'path')->getHeaders();
```

Get all `Fields` return array:

```php
use getbackmyself\CSVParser;
use getbackmyself\CSVParser\models\Field;

CSVParser::instance('filename', 'path')->getFields();
```


Get `Field by ID` return array:

```php
use getbackmyself\CSVParser;
use getbackmyself\CSVParser\models\Field;

CSVParser::instance('filename', 'path')->getField(id);
```
