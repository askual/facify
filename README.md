# Facify
 
Transform your face using Artificial Intelligence with PHP [FaceApp](http://faceapp.com) API <br>
FaceApp is an [Android](https://play.google.com/store/apps/details?id=io.faceapp) and [iOS](https://itunes.apple.com/app/id1180884341) application.<br>
This library is an unofficial wrapper to their AI system.<br>

<img src="preview.jpg" width="500" height="367" align="center"/>


## Requirements

* PHP >= 7.0
* cURL/PHP

## Basic usage

```php
	composer require askual/facify
```

## Methods

```php
$FaceApp = new Facify('PHOTO_PATH');
```

### getPhotoCode
Get the 'photo unique id' that has Been uploaded to faceapp servers
```php
$photoCode = $FaceApp->getPhotoCode();
```

### getFilters
Get all filters are available to apply the photo
```php
$photoCode = $FaceApp->getFilters(); //returns an array of filters

/*filters : 
	-no-filter
	-smile
	-smile_2
	-hot
	-old
	-young
	-hollywood
	-fun_glasses
	-hitman
	-mustache_free
	-pan
	-heisenberg
	-female
	-female_2
	-male
	-no-filter
	-impression
	-goatee
	-mustache
	-hipster
	-lion
	-bangs
	-glasses
	-wave
	-makeup
*/
```

### applyFilter
Get the code of photo has Been uploaded to faceapp servers
```php
$FaceApp->applyFilter(PHOTO_CODE , SELECTED_FILTER , CROP_FACE_OR_NOT);

//example :
//PHOTO_CODE(string) : $photoCode
//SELECTED_FILTER(string) : 'old'
//CROP_FACE_OR_NOT(bool) : true or false
```

### savePhoto
Save the final filtered photo
```php
$FaceApp->savePhoto('NEW_PHOTO_PATH.jpg');
```

### Proxy Mode
As you may know this service has some limits for requesting so I created a "Proxy Mode" for it<br>
Proxy servers has been added to faceapp.php line 44<br>
All of them works well but i dont guarantee them to work for a long time<br>
If you have any proxy server you can put it in the list<br>
And you can turn the proxy server on with this code<br>
```php
$FaceApp = new FaceApp('PHOTO_PATH', true );
```
Take a look at "ProxyMode.php"

## License

`Facify` is licensed under the MIT License - see the LICENSE file for details



<a href="http://askual.com">Askual.com</a>
