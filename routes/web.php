<?php

use Illuminate\Support\Facades\Route;

// Patie des users

// Route::get('/', function () {
//     return view('user.home');
// });

Route::resource('/', 'User\HomeController');
Route::resource('/contact', 'User\ContactController');
Route::resource('/article', 'User\ArticleController');
Route::resource('/document', 'User\DocumentController');
Route::resource('/pricing', 'User\PricingController');
Route::resource('/doctor', 'User\DoctorController');
Route::resource('/about', 'User\AboutController');
Route::resource('/comment', 'User\CommentController');
Route::resource('/inscription', 'User\InscriptionController');

// Ici sont sont rassemble les route d'authentification du client
Auth::routes();
// fin des routes pour l'authentification du clients

// Pour la redirection du client
Route::get('/client-home','Client\ClientController@index')->name('client.home');
Route::resource('/client', 'Client\ClientController');
Route::get('/client-region', 'Client\ClientController@client_region')->name('client_region');
Route::get('/client/{id}/notification', 'Client\ClientController@view')->name('client.view');
// Route::get('/client/{id}/profile', 'Client\ClientController@profile')->name('client.profile');
Route::get('/client-lasted', 'Client\ClientController@lasted')->name('client.lasted');
Route::get('/client-today', 'Client\ClientController@today')->name('client.today');
Route::get('/client-weiting', 'Client\ClientController@weiting')->name('client.weiting');
// Route::get('/client-weiting', 'Client\ClientController@weiting')->name('client.weiting');
Route::get('/client-asked', 'Client\ClientController@asked')->name('client.asked');
Route::get('/client/{id}/view_asked', 'Client\ClientController@view_asked')->name('client.view_asked');
Route::get('/client/{id}/medecin_info', 'Client\ClientController@medecin_info')->name('client.medecin_info');
Route::delete('/client/{id}/option_client', 'Client\ClientController@option_client')->name('client.option_client');
Route::get('/client-ticker', 'Client\ClientController@ticker')->name('client.ticker');
Route::resource('client-payment/payment', 'Client\PaymentController');
Route::get('client/retoure', 'Client\PaymentController@retoure')->name('client.retoure');
// Fin pour la redirection du client




// Partie des Admin
Route::resource('admin/home', 'Admin\AdminController');
Route::resource('admin/category', 'Admin\CategoryController');
Route::resource('admin/tag', 'Admin\TagController');
Route::resource('admin/departement', 'Admin\DepartementController');
Route::resource('admin/specialite', 'Admin\SpecialiteController');
Route::resource('admin/post', 'Admin\PostController');
Route::resource('admin/info', 'Admin\InfoController');
Route::resource('admin/slider', 'Admin\SliderController');
Route::resource('admin/social', 'Admin\SocialController');
Route::resource('admin/team', 'Admin\TeamController');
Route::resource('admin/mailbox', 'Admin\MailboxController');
Route::resource('admin/service', 'Admin\ServiceController');
Route::resource('admin/medecin', 'Admin\MedecinController');
Route::resource('admin/statistique', 'Admin\StatistiqueController');
Route::get('admin/medecin_chef', 'Admin\MedecinController@medecin_chef')->name('medecin.medecin_chef');
Route::get('admin/{id}/medecin_chef_view', 'Admin\MedecinController@medecin_chef_view')->name('medecin.medecin_chef_view');
Route::get('admin/{id}/medecin_chef_edit', 'Admin\MedecinController@medecin_chef_edit')->name('medecin.medecin_chef_edit');
Route::put('admin/{id}/medecin_chef_update', 'Admin\MedecinController@medecin_chef_update')->name('medecin.medecin_chef_update');
Route::resource('admin/role', 'Admin\RoleController');
Route::resource('admin/permission', 'Admin\PermissionController');
Route::resource('admin/demander', 'Admin\DemanderController');
Route::resource('admin/admin', 'Admin\AdminController');


// Gestion des rendez-vous par l'administrateur
Route::get('/admin-ticker', 'Admin\AdminController@ticker')->name('admin.ticker');
Route::get('admin/today', 'Admin\AdminController@today')->name('admin.today');
Route::get('admin/latested', 'Admin\AdminController@latested')->name('admin.latested');
Route::get('admin/{id}medecin_info', 'Admin\AdminController@active_medecin_info')->name('admin.medecin_info');
Route::get('admin/{id}/client_info', 'Admin\AdminController@active_client_info')->name('admin.client_info');
Route::get('admin/{id}/all', 'Admin\AdminController@all_rv_detail')->name('admin.admin_all');
// Fin des gestion rendez-vous par l'administrateur

// Les routes pour l'authentication du admin
Route::get('/admin-login','Admin\Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin-login','Admin\Auth\AdminLoginController@login');
Route::get('/admin-home','Admin\Auth\AdminController@index')->name('admin.home');
// Fin des routes pour l'authentication du admin


// Les routes pour l'authentication du medecin
Route::get('/medecin-login','Medecin\Auth\MedecinLoginController@showLoginForm')->name('medecin.login');
Route::post('/medecin-login','Medecin\Auth\MedecinLoginController@login');
Route::get('/medecin-home','Medecin\MedecinController@index')->name('medecin.home');
Route::resource('/medecin-show','Medecin\MedecinController');
Route::get('/hopital','Medecin\MedecinController@hopital')->name('medecin.hopital');
Route::post('/add_hopital','Medecin\MedecinController@add_hopital')->name('medecin.add_hopital');
Route::get('/medecin/{id}/notification', 'Medecin\MedecinController@view')->name('medecin.view');
Route::get('/medecin-asked','Medecin\MedecinController@asked')->name('medecin.asked');
Route::get('/medecin-weiting','Medecin\MedecinController@weiting')->name('medecin.weiting');
Route::get('/medecin-lasted','Medecin\MedecinController@lasted')->name('medecin.lasted');
Route::get('/medecin/{id}/valider','Medecin\MedecinController@valider')->name('medecin.valider');
Route::get('/medecin/{id}/client_info','Medecin\MedecinController@client_info')->name('medecin.client_info');
Route::get('/medecin/{id}/medecin_option','Medecin\MedecinController@medecin_option')->name('medecin.medecin_option');
Route::get('/medecin/info_medecin','Medecin\MedecinController@info_medecin')->name('medecin.info_medecin');
Route::get('/medecin/{id}/medecin_region_view','Medecin\MedecinController@medecin_region_view')->name('medecin.medecin_region_view');
Route::get('/medecin/{id}/prochain','Medecin\MedecinController@prochain')->name('medecin.prochain');
Route::put('/medecin/{id}/prochain_rendez_vous','Medecin\MedecinController@prochain_rendez_vous')->name('medecin.prochain_rendez_vous');
Route::get('/medecin-ticker', 'Medecin\MedecinController@ticker')->name('medecin.ticker');
Route::put('/medecin/{id}/valider-ticker', 'Medecin\MedecinController@valider_ticker')->name('medecin.valider_ticker');
// Fin des routes pour l'authentication du medecin


// Gestion de tout les profile
Route::get('/profile/medecin', 'Profile\AllProfileController@view_medecin')->name('view_medecin');
Route::put('/profile/update_medecin', 'Profile\AllProfileController@update_medecin')->name('update_medecin');

Route::get('/profile/admin', 'Profile\AllProfileController@view_admin')->name('view_admin');
Route::put('/profile/update_admin', 'Profile\AllProfileController@update_admin')->name('update_admin');

Route::get('/profile/client', 'Profile\AllProfileController@view_client')->name('view_client');
Route::put('/profile/update_client', 'Profile\AllProfileController@update_client')->name('update_client');
// Fin de la gestion de tout les profiles

// Information medical des client
Route::resource('/carnet','Information\CarnetController');
Route::resource('/rapport','Information\RapportController');
Route::resource('/ordonance','Information\OrdonanceController');
// Fin des information medical des client




