# bors/font-awesome

[Font Awesome](http://fontawesome.io/) toolkit support for BORS© framework.

```bash
# To use CDN-version
composer require bors/font-awesome

# To use local asset version need also:
composer require bower-asset/font-awesome
```

Local or CDN version detects automatically via `bower-asset/font-awesome` package install.

Call `\B2\FontAwesome::load();` in `pre_show()` method on any view or config.

```php
function pre_show()
{
	\B2\FontAwesome::load();
	return parent::pre_show();
}
```
