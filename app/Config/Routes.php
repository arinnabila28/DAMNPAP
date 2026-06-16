<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('dashboard', 'DashboardController::index');

$routes->get('books', 'BookController::index');
$routes->get('list/books', 'BookController::index');
$routes->get('list/books/table', 'BookController::ajaxTable');
$routes->get('ajax/create/book', 'BookController::ajaxCreate');
$routes->get('ajax/edit/book/(:num)', 'BookController::ajaxEdit/$1');
$routes->get('/create/book', 'BookController::create');
$routes->post('/create/book', 'BookController::store');
$routes->get('/edit/book/(:num)', 'BookController::edit/$1');
$routes->post('/update/book/(:num)', 'BookController::update/$1');
$routes->get('/delete/book/(:num)', 'BookController::delete/$1');

$routes->get('book/trash', 'BookController::trash');
$routes->get('/restore/book/(:num)', 'BookController::restore/$1');
$routes->get('/purge/book/(:num)', 'BookController::purge/$1');

$routes->get('/list/members', 'MemberController::index');
$routes->get('/list/members/table', 'MemberController::ajaxTable');
$routes->get('/ajax/create/member', 'MemberController::ajaxCreate');
$routes->get('/ajax/edit/member/(:num)', 'MemberController::ajaxEdit/$1');
$routes->post('/create/member', 'MemberController::store');
$routes->post('/update/member/(:num)', 'MemberController::update/$1');
$routes->get('/delete/member/(:num)', 'MemberController::delete/$1');
$routes->get('/list/members/trash', 'MemberController::trash');
$routes->get('/restore/member/(:num)', 'MemberController::restore/$1');
$routes->get('/delete-permanent/member/(:num)', 'MemberController::deletePermanent/$1');

$routes->get('/list/peminjaman', 'PeminjamanController::index');
$routes->get('/list/peminjaman/table', 'PeminjamanController::ajaxTable');
$routes->get('/ajax/create/peminjaman', 'PeminjamanController::ajaxCreate');
$routes->get('/ajax/edit/peminjaman/(:num)', 'PeminjamanController::ajaxEdit/$1');
$routes->post('/create/peminjaman', 'PeminjamanController::store');
$routes->post('/update/peminjaman/(:num)', 'PeminjamanController::update/$1');
$routes->get('/delete/peminjaman/(:num)', 'PeminjamanController::delete/$1');

$routes->get('/list/pengembalian', 'PengembalianController::index');
$routes->get('/list/pengembalian/table', 'PengembalianController::ajaxTable');
$routes->get('/ajax/create/pengembalian', 'PengembalianController::ajaxCreate');
$routes->get('/ajax/edit/pengembalian/(:num)', 'PengembalianController::ajaxEdit/$1');
$routes->get('/pengembalian/hapus/(:num)', 'PengembalianController::hapus/$1');
$routes->post('/create/pengembalian', 'PengembalianController::simpanPengembalian');
$routes->post('/update/pengembalian/(:num)', 'PengembalianController::update/$1');
$routes->post('/delete/pengembalian/(:num)', 'PengembalianController::delete/$1');

// Laporan Routes
$routes->get('/laporan/buku', 'LaporanController::buku');
$routes->get('/laporan/cetak-buku', 'LaporanController::cetakBuku');
// Label Buku Routes
$routes->get('/laporan/label-buku', 'LaporanController::labelBuku');
$routes->get('/laporan/cetak-label-buku', 'LaporanController::cetakLabelBuku');
$routes->get('/laporan/cetak-label-buku/(:num)', 'LaporanController::cetakLabelSatu/$1');