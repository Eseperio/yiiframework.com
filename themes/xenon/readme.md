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

In current yii site configurations there are customized bundles (selectize..). Those dependencies should be updated to be from the theme asset.

Comments:
- Even i´ve tried, it has been impossible for me to not override some views. I tried to keep the maximum amount of views in the original folder.
- Apidoc template should have `<!-- YII_VERSION_SELECTOR -->` placeholder inside the `.content` tag.
- Apidoc for v1.1 needs a change in layout. Left column must be wider
- Comments widget should put aside the column offset and be placed in the same column of content. Actually if content is smaller than menu, a weird space appears.
- Comma in wiki tags should be removed. Maybe the view must be overriden in theme.
- Labels for sort in wikiController have redundant text. `Sorted by` can be removed.
- Added a call to action panel in wiki. May be good to be dismissable.





Icon credits:

Some icons has been collected from Flaticon. They require a link in the website to use them.

- Chat.svg Icon made by [Smashicons](https://www.flaticon.com/authors/smashicons) from www.flaticon.com
