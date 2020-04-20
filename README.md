# JP Toolkit Request Helper

This helper serves two purposes:

1. It pre-processes global input data for security.
2. It provides some helper methods for fetching input data and pre-processing it.

<br>

## Accessing form data

### Using POST, GET, COOKIE, or SERVER Data

This helper let to you fetch POST, GET, COOKIE or SERVER items. The main advantage of using the provided methods rather than fetching an item directly `$_POST['something']` is that the methods will check to see if the item is set and return NULL if not. This lets you conveniently use data without having to test whether an item exists first. In other words, normally you might do something like this:

```php
$something = isset($_POST['something']) ? $_POST['something'] : 'default value';
```
With this helper methods you can simply do this:

```php
$something = Request::post('something', 'default value');
```

Please read our [Wiki](https://github.com/jprieton/jp-toolkit-request-helper/wiki) for more detailed information, advanced usage and shorthands.

<br>

## Autoloading

You'll need to use an autoloader with this. Ideally, this would be [Composer](https://getcomposer.org). 

### Composer

From the command line:

```bash
composer require jp-toolkit/request-helper
```

<br>

## Bug tracker?

Have a bug? Please create an issue on GitHub at https://github.com/jprieton/jp-toolkit-request-helper/issues)