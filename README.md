AsseticMinifierBundle
=====================

[![Build Status](https://travis-ci.org/davidjegat/AsseticMinifierBundle.png)](https://travis-ci.org/davidjegat/AsseticMinifierBundle)

An assetic minifier in pure PHP for CSS and JS files. This bundle use [JSMin](http://code.google.com/p/jsmin-php/) and [CssMin](https://github.com/tubalmartin/YUI-CSS-compressor-PHP-port)

# Instalation

Add this line into your `composer.json` :

```javascript
"davidjegat/assetic-minifier-bundle": "*"
```

Enable the bundle into your `AppKernel.php` :


```php
new DavidJegat\AsseticMinifierBundle\DavidJegatAsseticMinifierBundle()
```

# Use the minifier

Once the bundle is install yo can use the filter `minify_js` and `minify_css` for enable the minify.

```html+jinja
{% stylesheets 
	'my.css'
	filter="?minify_css"
%}
	<link rel="stylesheet" type="text/css" href="{{asset_url}}">

{% endstylesheets %}
```
