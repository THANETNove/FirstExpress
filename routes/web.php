<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\System_UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\DesktopController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PriceAdjustmentController;
use App\Http\Controllers\setUp_UsersController;
use App\Http\Controllers\ManageListController;
use Illuminate\Http\Request;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});


Auth::routes();

Route::resource('/home', System_UserController::class);
Route::get('/destroy-system_user/{id}', [System_UserController::class, 'destroy']);
Route::post('/e_update', [System_UserController::class, 'update']);
Route::post('/home-edit', [System_UserController::class, 'edit']);
Route::resource('/sale', SaleController::class);
Route::post('/sale-update', [SaleController::class, 'update']);
Route::post('/sale-edit', [SaleController::class, 'edit']);
Route::get('/sale-destroy/{id}', [SaleController::class, 'destroy']);
Route::resource('/customer', CustomerController::class);
Route::post('/up', [CustomerController::class, 'update']);
Route::resource('/desktop', DesktopController::class);
Route::get('/verify', [DesktopController::class, 'verify_identity']);
Route::get('/cod', [DesktopController::class, 'cod']);
Route::get('/one-parcel', [DesktopController::class, 'one_parcel']);
Route::get('/more-one-parcel', [DesktopController::class, 'more_one_parcel']);
Route::get('/booking-history', [DesktopController::class, 'booking_history']);
Route::get('/waybill', [DesktopController::class, 'waybill']);
Route::get('/my-parcel', [DesktopController::class, 'my_parcel']);
Route::get('/delivery-details', [DesktopController::class, 'delivery_details']);
Route::get('/COD-Status', [DesktopController::class, 'cod_status']);
Route::get('/parcel-number', [DesktopController::class, 'parcel_number']);
Route::get('/invoice', [DesktopController::class, 'invoice']);
Route::get('/list-charge', [DesktopController::class, 'list_charge']);
Route::get('/receipt-list', [DesktopController::class, 'receipt_list']);
Route::get('/charge', [DesktopController::class, 'charge']);
Route::get('/cell-commission', [DesktopController::class, 'cell_commission']);
Route::get('/list-cellCommission', [DesktopController::class, 'list_cellCommission']);
Route::get('/cost-price', [DesktopController::class, 'costPrice']);
Route::get('/manage-customer-information', [DesktopController::class, 'manageCustomerInformation']);
Route::get('/COD-Refund', [DesktopController::class, 'codRefund']);
Route::get('/manage-customer', [DesktopController::class, 'manageCustomer']);
Route::get('daily-report', [DesktopController::class, 'dailyReport']);
Route::get('/list-invoice', [InvoiceController::class, 'index']);
Route::post('/list-invoice', [InvoiceController::class, 'index']);
Route::get('/create-invoice/{id}', [InvoiceController::class, 'create']);
Route::post('/invoice-store', [InvoiceController::class, 'store']);
Route::post('/update-status', [InvoiceController::class, 'updateStatus']);
Route::get('/invoiceEidit/{id}', [InvoiceController::class, 'edit']);
Route::post('/getInvoice', [InvoiceController::class, 'getData']);
Route::post('/upInvoice', [InvoiceController::class, 'update']);
Route::resource('/shipping-rate', PriceAdjustmentController::class);
Route::resource('/setUp-Users', setUp_UsersController::class);
Route::resource('/manage-list', ManageListController::class);
Route::get('/api-manage', [ManageListController::class, 'apiManageList']);
Route::get('/api-createOrder', [ManageListController::class, 'createOrder']);
Route::get('/api-getLabel', [ManageListController::class, 'getLabel']);
Route::get('/api-cancelOrder', [ManageListController::class, 'cancelOrder']);
Route::get('/export_excel/excel', [ManageListController::class, 'excel'])->name('export_excel');



