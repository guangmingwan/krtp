Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::resource('posts', 'PostController');

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/home', 'HomeController@index');