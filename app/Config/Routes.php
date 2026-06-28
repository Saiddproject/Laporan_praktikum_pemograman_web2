<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --- Rute Halaman Statis (Frontend) ---
$routes->get('/', 'Page::index');
$routes->get('about', 'Page::about');
$routes->get('contact', 'Page::contact');

// --- Rute Manajemen & Daftar Artikel ---
$routes->group('artikel', function($routes) {
    $routes->get('/', 'Artikel::index'); 
    $routes->get('tambah', 'Artikel::tambah');
    $routes->post('simpan', 'Artikel::simpan');
    $routes->get('edit/(:num)', 'Artikel::edit/$1'); 
    $routes->post('update/(:num)', 'Artikel::update/$1'); 
    $routes->get('hapus/(:num)', 'Artikel::hapus/$1');
    
    // Route untuk halaman admin dengan AJAX pagination & search (Modul 9)
    $routes->get('admin', 'Artikel::admin_index');
});

// --- Rute Autentikasi User ---
$routes->group('user', function($routes) {
    $routes->get('login', 'User::login');
    $routes->post('login', 'User::login'); 
    $routes->get('register', 'User::register');
    $routes->post('register', 'User::register');
    $routes->get('logout', 'User::logout');
});

// --- Rute AJAX (Praktikum 8) ---
$routes->get('ajax', 'AjaxController::index');
$routes->get('ajax/getData', 'AjaxController::getData');
$routes->post('ajax/save', 'AjaxController::save');
$routes->post('ajax/delete', 'AjaxController::delete');

// --- Rute REST API (Praktikum 10) ---
$routes->resource('post');