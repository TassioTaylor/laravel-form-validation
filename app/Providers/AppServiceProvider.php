<?php

namespace App\Providers;

use Code\Validator\Cnpj;
use Code\Validator\Cpf;
use function foo\func;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->singleton(\Faker\Generator::class, function (){
           return \Faker\Factory::create('pt_Br');
       });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        $platform = \Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum','string');
        \Validator::extend('document_number', function ($attribute, $value, $parameters, $validator){
            $documentValidator = $parameters[0] == 'cpf' ? new Cpf(): new Cnpj();
            return $documentValidator->isValid($value);
        });
    }
}
