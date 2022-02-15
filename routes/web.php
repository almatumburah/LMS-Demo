<?php

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('enroll/login/{course}', 'EnrollmentController@handleLogin')->name('enroll.handleLogin')->middleware('auth');
Route::get('enroll/{course}', 'EnrollmentController@create')->name('enroll.create');
Route::post('enroll/{course}', 'EnrollmentController@store')->name('enroll.store');
Route::get('my-courses', 'EnrollmentController@myCourses')->name('enroll.myCourses')->middleware('auth');
Route::resource('courses', 'CourseController')->only(['index', 'show']);
Route::get('/apply', 'Admin\HomeController@apply')->name('apply');
Route::post('/application', 'Admin\HomeController@store')->name('application');
Route::get('/dashboard', 'Admin\HomeController@dashboard')->name('dashboard');

//Learners
Route::resource('/registrants', 'LearnersController');
Route::get('/settings', 'Admin\HomeController@settings')->name('settings');
Route::get('/enrolled-course', 'Admin\HomeController@courses')->name('courses');
Route::post('/deregister', 'Admin\HomeController@deregister')->name('deregister');
Route::get('/register-for-this-course', 'Admin\HomeController@newcourse')->name('newcourse');
Route::post('/add-new-course', 'Admin\HomeController@addcourse')->name('addcourse');
Route::get('/my-course/{course}', 'Admin\HomeController@showcourse')->name('showcourse');
Route::delete('/enrollments/{id}', 'Admin\HomeController@deletecourse')->name('deletecourse');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    //Route::get('/dashboard', 'Admin\HomeController@dashboard')->name('dashboard');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Requests
    Route::get('/requests', 'EnrollmentsController@requests')->name('requests');

    // Institutions
    Route::delete('institutions/destroy', 'InstitutionsController@massDestroy')->name('institutions.massDestroy');
    Route::post('institutions/media', 'InstitutionsController@storeMedia')->name('institutions.storeMedia');
    Route::resource('institutions', 'InstitutionsController');

    // Courses
    Route::delete('courses/destroy', 'CoursesController@massDestroy')->name('courses.massDestroy');
    Route::post('courses/media', 'CoursesController@storeMedia')->name('courses.storeMedia');
    Route::resource('courses', 'CoursesController');

    // Enrollments
    Route::delete('enrollments/destroy', 'EnrollmentsController@massDestroy')->name('enrollments.massDestroy');
    Route::resource('enrollments', 'EnrollmentsController');

});
