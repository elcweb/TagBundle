TagBundle
===================

[![Latest Stable Version](https://poser.pugx.org/elcweb/tag-bundle/v/stable.png)](https://packagist.org/packages/elcweb/tag-bundle)
[![Total Downloads](https://poser.pugx.org/elcweb/tag-bundle/downloads.png)](https://packagist.org/packages/elcweb/tag-bundle)

Installation
------------

### Step 1: Download using composer

```js
{
    "require": {
        "elcweb/tag-bundle": "dev-master"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update elcweb/tag-bundle
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Elcweb\TagBundle\ElcwebTagBundle(),
    );
}
```

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE

