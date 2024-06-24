[1mdiff --git a/routes/web.php b/routes/web.php[m
[1mindex 861f7dc..1dc1e17 100644[m
[1m--- a/routes/web.php[m
[1m+++ b/routes/web.php[m
[36m@@ -5,6 +5,9 @@[m
 use App\Http\Controllers\PlatilloController;[m
 use App\Http\Controllers\CuentaClienteController;[m
 use App\Http\Controllers\MetodoPagoController;[m
[32m+[m[32muse App\Http\Controllers\PedidoController;[m
[32m+[m[32muse App\Http\Controllers\CuentaController;[m
[32m+[m[32muse App\Http\Controllers\PedidoPlatilloController;[m
 [m
 Route::get('/', function () {[m
     return view('welcome');[m
[36m@@ -25,6 +28,9 @@[m
     Route::resource('platillos', PlatilloController::class);[m
     Route::resource('cuentaClientes', CuentaClienteController::class);[m
     Route::resource('metodoPagos', MetodoPagoController::class);[m
[32m+[m[32m    Route::resource('pedidos', PedidoController::class);[m
[32m+[m[32m    Route::resource('cuentas', CuentaController::class);[m
[32m+[m[32m    Route::resource('pedidoPlatillos', PedidoPlatilloController::class);[m
 });[m
 [m
 Route::get('/home', function () {[m
