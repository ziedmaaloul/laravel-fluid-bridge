# Installation
```bash
composer require  ziedmaaloul/laravel-fluid-bridge
```
In the `config/app.php` add `FluidServiceProvider` to the `providers` section.
```php
'providers' => [
	Diego\Fluid\FluidServiceProvider::class,
],
```
# Usage

## Rendering By Trait in Page Folder

```php
Diego\Fluid\Render::template('Welcome' , ['parameter' => 'parameter'] , 1);
```
This will resolve the template name to `resources/views/Templates/Page/Welcome.html`

## Rendering By Trait Outside Page Folder

```php
Diego\Fluid\Render::template('FolderOne/File' , ['parameter' => 'parameter'] , 0);
```
This will resolve the template name to `resources/views/Templates/FolderOne/File.html`


Enjoy :-)
