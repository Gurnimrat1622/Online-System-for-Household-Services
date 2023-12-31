<?php
use App\Livewire\HomeComponent;
use App\Livewire\ServiceCategoriesComponent;
use App\Livewire\ServicesByCategoryComponent;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Admin\AdminServiceCategoryComponent;
use App\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Livewire\Admin\AdminAddServiceComponent;
use App\Livewire\Admin\AdminContactComponent;
use App\Livewire\ContactComponent;
use App\Livewire\Admin\AdminServicesComponent;
use App\Livewire\Admin\AdminServiceProviderComponent;
use App\Livewire\Admin\AdminEditServiceCategoryCompnent;
use App\Livewire\Customer\CustomerDashboardComponent;
use App\Livewire\sprovider\SproviderDashboardComponent;
use App\Livewire\sprovider\SproviderProfileComponent;
use App\Livewire\sprovider\EditSproviderProfileComponent;
use App\Livewire\ServiceDetailsComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Controllers\SearchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',HomeComponent::class)->name('home');
Route::get('/service-categories',ServiceCategoriesComponent::class)->name('home.service_categories');
Route::get('/{category_slug}/services',ServicesByCategoryComponent::class)->name('home.services_by_category');
Route::get('/contact-us',ContactComponent::class)->name('home.contact');

Route::get('/service/{service_slug}',ServiceDetailsComponent::class)->name('home.service_details');

Route::get('/autocomplete',[SearchController::class,'autocomplete'])->name('autocomplete');
Route::post('/search',[SearchController::class,'searchService'])->name('searchService');

//For Customer
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/customer/dashboard',CustomerDashboardComponent::class)->name('customer.dashboard');
});

//For Service Provider
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified','authsprovider'
])->group(function () {
    Route::get('/sprovider/dashboard',SproviderDashboardComponent::class)->name('sprovider.dashboard');
    Route::get('/sprovider/profile',SproviderProfileComponent::class)->name('sprovider.profile');
    Route::get('/sprovider/profile/edit',EditSproviderProfileComponent::class)->name('sprovider.edit_profile');
});

//For Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 'authadmin'
])->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/service-categories',AdminServiceCategoryComponent::class)->name('admin.service_categories');
    Route::get('/admin/service-categories/add',AdminAddServiceCategoryComponent::class)->name('admin.add_service_categories');
    Route::get('/admin/service-categories/edit/{category_id}',AdminEditServiceCategoryCompnent::class)->name('admin.edit_service_categories');
    Route::get('/admin/all-services',AdminServicesComponent::class)->name('admin.all_services');
    Route::get('/admin/{category_slug}/services',AdminServicesByCategoryComponent::class)->name('admin.services_by_category');
    Route::get('/admin/service/add',AdminAddServiceComponent::class)->name('admin.add_service');
    Route::get('/admin/service/edit/{service_slug}',AdminEditServiceComponent::class)->name('admin.edit_service');
    Route::get('/admin/contacts',AdminContactComponent::class)->name('admin.contacts');
    Route::get('/admin/service-providers',AdminServiceProviderComponent::class)->name('admin.service_providers');
});