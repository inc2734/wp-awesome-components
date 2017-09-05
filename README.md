# WP Awesome Widgets

[![Build Status](https://travis-ci.org/inc2734/wp-awesome-components.svg?branch=master)](https://travis-ci.org/inc2734/wp-awesome-components)
[![Latest Stable Version](https://poser.pugx.org/inc2734/wp-awesome-components/v/stable)](https://packagist.org/packages/inc2734/wp-awesome-components)
[![License](https://poser.pugx.org/inc2734/wp-awesome-components/license)](https://packagist.org/packages/inc2734/wp-awesome-components)

## Widgets

* Button
* Alert
* Balloon

## Install
```
$ composer require inc2734/wp-awesome-components
```

## How to use
```
<?php
// When Using composer auto loader
// new Inc2734\WP_Awesome_Components\Awesome_Components();

// When not Using composer auto loader
include_once( get_theme_file_path( '/vendor/inc2734/wp-awesome-components/src/wp-awesome-components.php' ) );
new Inc2734_WP_Awesome_Components();
```

The components don't have styles. So you need create CSS for the components.
