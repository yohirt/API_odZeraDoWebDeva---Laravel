https://youtu.be/cy50mLPk-yo?t=16m53s

https://youtu.be/cy50mLPk-yo


> w Kernel.php
```
protected $routeMiddleware = [
        'jwt.auth' => Tymon\JWTAuth\Middleware\GetUserFromToken::class,
];
```

> w api.php

```php
Route::group([
    'middleware' => ['auth.jwt']
], function () {
    Route::resource('/categories', 'CategoriesController');
});
```