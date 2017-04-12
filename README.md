phpNT - Yii2 Slim Scroll
================================
[![Latest Stable Version](https://poser.pugx.org/phpnt/yii2-slimscroll/v/stable)](https://packagist.org/packages/phpnt/yii2-slimscroll) [![Total Downloads](https://poser.pugx.org/phpnt/yii2-slimscroll/downloads)](https://packagist.org/packages/phpnt/yii2-slimscroll) [![Latest Unstable Version](https://poser.pugx.org/phpnt/yii2-slimscroll/v/unstable)](https://packagist.org/packages/phpnt/yii2-slimscroll) [![License](https://poser.pugx.org/phpnt/yii2-slimscroll/license)](https://packagist.org/packages/phpnt/yii2-slimscroll)
### Описание:
### LimScroll - маленький (4.6KB) плагин jQuery, который преобразует любой div в прокручиваемую область с приятной полосой прокрутки - аналогично тому, как в последнее время Facebook и Google начали использовать в своих продуктах.
### [DEMO](http://phpnt.com/widget/slimscroll)

------------
### - [Поддержать phpNT](http://phpnt.com/donate/index)
------------

### Социальные сети:
 - [Канал YouTube](https://www.youtube.com/c/phpnt)
 - [Группа VK](https://vk.com/phpnt)
 - [Группа facebook](https://www.facebook.com/Phpnt-595851240515413/)

------------

Установка:

------------

```
php composer.phar require "phpnt/yii2-slimscroll" "*"
```
или

```
composer require phpnt/yii2-slimscroll
```

или добавить в composer.json файл

```
"phpnt/yii2-slimscroll": "*"
```

### Представление:
------------
```php
<?php
use phpnt\slimscroll\SlimScrollAsset;
SlimScrollAsset::register($this);
?>
```
```html
 <div class="slimScroll" style="height: 50px;">
        <p>Большой блок с полосой прокрутки.</p>
</div>
------------
# Документация (примеры):
## [Slim Scroll](http://rocha.la/jQuery-slimScroll)
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------
