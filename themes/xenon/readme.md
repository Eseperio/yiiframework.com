# Guide to use this theme

Add theme configuration in web.php
```
'view' => [
            'theme' => [
                'basePath' => '@app/themes/xenon',
                'baseUrl' => '@web/themes/xenon',
                'pathMap' => [
                    '@app/views' => '@app/themes/xenon/views',
                ],
            ],
        ],
```

Update gulp config file (config.yml)
```
  # Path to dist folder
  dist: "themes/xenon/assets/dist"
  # Path to source folder
  src: "themes/xenon/assets/src"
```

Run gulp build


Comments:

- Apidoc template should have `<!-- YII_VERSION_SELECTOR -->` placeholder inside the `.content` tag.
