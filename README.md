<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Why this project ?

Creating software architectures for years, I've never liked traditional SPA for some reasons : 
* Security
* Heavy resource load on server call
* Requires an open-api
* Complexify deployment

Then I heard about Inertia.js that brings, for me, the best of both worlds. This project is only used for learning purposes. Use it as you wish :) 

## How to use ? 

Install bot backend and frontend packages using composer and npm : 

```bash
composer install && yarn install
```

Then run the project on both backend and frontend :

```bash
php artisan serve
```

```bash
yarn watch
```
