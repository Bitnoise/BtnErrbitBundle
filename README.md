BtnErrbitBundle
===============

errbitPHP integration with Symfony2


### Step 1: Add ErrbitBundle in your composer.json (private repo)

```js
{
    "require": {
        "bitnoise/errbit-php-bundle": "dev-master",
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@github.com:Bitnoise/BtnErrbitBundle.git"
        }
    ],
}
```

### Step 2: Enable the bundle

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Btn\ErrbitBundle\BtnErrbitBundle(),
    );
}
```

### Step 3: Configure the bundle

``` yml
# app/config/config.yml
btn_errbit:
    api_key: ~
    enabled: true
    host: ~
    port: 80
    environment_name: dev
```
