<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CongTrinhController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin_All_CongTrinh;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);

Route::get('/trang-chu', [HomeController::class,'index']);
Route::get('/Gioi-Thieu', [HomeController::class,'introduce']);
Route::get('/Nha-Cap-4', [CongTrinhController::class,'level_4_house']);
Route::get('/NhaPho', [CongTrinhController::class,'NhaPho']);

//Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);


//Admin-CategoryProduct
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/edit-CongTrinh/{MaSanPham}', [admin_All_CongTrinh::class, 'edit_CongTrinh']);
Route::get('/delete-CongTrinh/{MaSanPham}', [admin_All_CongTrinh::class, 'delete_CongTrinh']);
Route::post('/update-CongTrinh/{MaSanPham}', [admin_All_CongTrinh::class, 'update_CongTrinh']);
Route::get('/all-CongTrinh', [admin_All_CongTrinh::class, 'all_CongTrinh']);
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);
//Admin-account
Route::get('/list-account/{number_page}', [AccountController::class, 'list_account']);
//Admin-order
Route::get('/all-order/{number_page}', [OrderController::class, 'all_order']);
Route::get('/edit-status-order/{MaDonHang}', [OrderController::class, 'edit_order_status']);
Route::post('/update-status-order/{MaDonHang}', [OrderController::class, 'update_status_order']);

//statistics
Route::get('/statistics-day', [CategoryProduct::class, 'statistics_day']);
Route::get('/statistics-month', [CategoryProduct::class, 'statistics_month']);
Route::get('/statistics-year', [CategoryProduct::class, 'statistics_year']);
Route::get('/statistics-quy', [CategoryProduct::class, 'statistics_quy']);
