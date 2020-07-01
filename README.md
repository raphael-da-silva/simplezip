# SimpleZip

Um wrapper simples para gerar arquivos zip com PHP.

## Compactar arquivos

```php
$zipCreator = new \SimpleZip\ZipCreator(new \ZipArchive);

$zipCreator->create('test.zip', array(
   'filetozip.txt',
   'anotherfiletozip.txt'
));
```

## Extrair arquivos

```php
$zipExtractor = new \SimpleZip\ZipExtractor(new \ZipArchive);

$zipExtractor->extract('test.zip', 'target-path');
```

## Sobre este projeto

Este projeto foi criado em 2015 para fins de estudo.