<?php

use Illuminate\Support\Facades\Route;


Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home');
Route::get('product_detail/{id_product}', '\App\Http\Controllers\HomeController@ProductDetail')->name('product.detail');
//dang ky nguoi dung
Route::get('registration_user', '\App\Http\Controllers\CustomerController@RegistrationUser')->name('registration.user');
Route::post('save_registration', '\App\Http\Controllers\CustomerController@SaveRegistration')->name('SaveRegistration');
//danh sach nguoi dung- trang admin
Route::get('list_customer', '\App\Http\Controllers\CustomerController@ListCustomer')->name('ListCustomer');
// khach hang dang-nhap
Route::get('login_customer', '\App\Http\Controllers\CustomerController@LoginCustomer')->name('LoginCustomer');
Route::post('dang-nhap', '\App\Http\Controllers\CustomerController@Login')->name('khach_hang_dang_nhap');
Route::get('account_customer', '\App\Http\Controllers\CustomerController@Account')->name('account_customer');
// Search san pham trang chu
Route::get('search', '\App\Http\Controllers\HomeController@Search')->name('search');
// filter san pham theo danh muc, thuong hieu
Route::get('danhmuc/{category_id}', '\App\Http\Controllers\HomeController@ProductByCategory')->name('ProductByCategory');
Route::get('thuonghieu/{id}', '\App\Http\Controllers\HomeController@ProductByBrand')->name('ProductByBrand');
// them SP vao giỏ hàng
Route::post('cart','\App\Http\Controllers\CartController@SaveProductCart')->name('save_cart');
Route::get('cart', '\App\Http\Controllers\CartController@ShowCart')->name('show_cart');
Route::get('delete_to_cart/{rowId}', '\App\Http\Controllers\CartController@DeleteCart')->name('delete_to_cart');
//nếu đã đăng nhập mới vào được giỏ hàng, còn ko redirect về trang đăng nhập
Route::get('check_cart', '\App\Http\Controllers\CartController@CheckCart')->name('CheckCart');
Route::get('/dang_xuat', '\App\Http\Controllers\CustomerController@Logout')->name('dang_xuat');
// checkout(thanh toán)
Route::get('checkout', '\App\Http\Controllers\CheckoutController@Checkout')->name('checkout');
Route::post('save-checkout-customer', '\App\Http\Controllers\CheckoutController@SaveCheckoutCustomer')->name('save-checkout-customer');

// quản lý đơn hàng bên trang admin
Route::get('order', '\App\Http\Controllers\CheckoutController@ManageOrder')->name('ManageOrder');
Route::get('order_detail/{id}', '\App\Http\Controllers\CheckoutController@OrderDetail')->name('order_detail');
// xem thông tin trong tài khoản người dùng
Route::get('account_order', '\App\Http\Controllers\CustomerController@AccountOrder')->name('account_order');
Route::get('account_info', '\App\Http\Controllers\CustomerController@InfoAccount')->name('account_info');
Route::get('change_password', '\App\Http\Controllers\CustomerController@ChangePassword')->name('change_password');
Route::post('save_change_password', '\App\Http\Controllers\CustomerController@SaveChangePassword')->name('SaveChangePassword');


Route::get('/admin', '\App\Http\Controllers\AdminController@index')->name('admin');
Route::get('/dashboard', '\App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard', '\App\Http\Controllers\AdminController@dashboard');

Route::post('logout', '\App\Http\Controllers\AdminController@logout')->name('logout'); //ko nen dung get de lam logout

//category product
Route::get('addCategoryProduct', '\App\Http\Controllers\CategoryController@addCategoryProduct')->name('addCategoryProduct');
Route::get('listCategoryProduct', '\App\Http\Controllers\CategoryController@listCategoryProduct')->name('listCategoryProduct');
Route::post('save_category_product', '\App\Http\Controllers\CategoryController@saveCategoryProduct')->name('saveCategoryProduct');
Route::get('edit_category_product/{category_id}', '\App\Http\Controllers\CategoryController@editCategoryProduct')->name('editCategoryProduct');
Route::post('update_category_product/{category_id}', '\App\Http\Controllers\CategoryController@updateCategoryProduct')->name('updateCategoryProduct');
Route::delete('delete_category_product/{category_id}', '\App\Http\Controllers\CategoryController@deleteCategoryProduct')->name('deleteCategoryProduct');

// product brand
Route::get('addProductBrand', '\App\Http\Controllers\ProductBrandController@addProductBrand')->name('addProductBrand');
Route::get('listProductBrand', '\App\Http\Controllers\ProductBrandController@listProductBrand')->name('listProductBrand');
Route::post('save_product_brand', '\App\Http\Controllers\ProductBrandController@saveProductBrand')->name('saveProductBrand');
Route::delete('delete_product_brand/{id}', '\App\Http\Controllers\ProductBrandController@deleteProductBrand')->name('deleteProductBrand');
Route::get('edit_product_brand/{id}', '\App\Http\Controllers\ProductBrandController@editProductBrand')->name('editProductBrand');
Route::post('update_product_brand/{id}', '\App\Http\Controllers\ProductBrandController@updateProductBrand')->name('updateProductBrand');

// product
Route::get('addProduct', '\App\Http\Controllers\ProductController@addProduct')->name('addProduct');
Route::get('listProduct', '\App\Http\Controllers\ProductController@listProduct')->name('listProduct');
Route::post('save_product', '\App\Http\Controllers\ProductController@saveProduct')->name('saveProduct');




