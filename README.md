<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## ESERCIZIO DI OGGI

 ### Oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!
  - Per prima cosa, creiamo un nuovo progetto Laravel 9, utilizzando questo comando:

 ```composer create-project laravel/laravel:^9.2 laravel-primi-passi```

 
 - Al termine dell'installazione, entriamo nella cartella del progetto

```cd laravel-primi-passi```

e avviamo l'artisan serve con uno di questi due comandi:
php artisan serve oppure 

```php -S localhost:8000 -t public```

- A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view `welcome.blade.php` e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi `home.blade.php`
- Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.


### Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()