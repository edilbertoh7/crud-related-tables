https://www.youtube.com/watch?v=n1lbUtEcRYY
autenticaion laravel
composer require laravel/ui

escafollding de bootstrap para autenticaion
php artisan ui bootstrap --auth

crear las migraciones clientes y pedidos

/*paquete de crud generator*/
composer require ibex/crud-generator --dev

/*publicar el paquete crud generator*/
php artisan vendor:publish --tag=crud

/*crear el crud de las tablas creadas*/
php artisan make:crud cliente
php artisan make:crud pedidos