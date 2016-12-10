<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'ativo' => 1,
        'foto' => 'jpg'
    ];
});

$factory->define(App\Entities\Plano::class, function (Faker\Generator $faker) {
    
    return [
        'titulo' => $faker->lexify('Plano ???'),
        'valor' => $faker->randomFloat(2),
        'forma_pagamento' => 'Cartão de Crédito',
        'ativo' => 1
    ];

});

$factory->define(App\Entities\Cliente::class, function (Faker\Generator $faker) 
{

	$faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));

    return [
    	'plano_id' => function()
    	{
    		return factory(App\Entities\Plano::class)->create()->id;
    	},
        'vinculado_a' => 0,
        'logo' => 'jpg',
        'email' => $faker->companyEmail,
        'telefone' => $faker->cellphoneNumber,
        'celular' => $faker->cellphoneNumber,
        'observacoes' => $faker->text,
        'cep' => $faker->postcode,
        'endereco' => $faker->address,
        'end_numero' => $faker->buildingNumber,
        'end_complemento' => $faker->sentence,
        'bairro' => $faker->secondaryAddress,
        'ativo' => rand(0,1)
    ];

});


$factory->define(App\Entities\ClientePF::class, function (Faker\Generator $faker) 
{

	$faker->addProvider(new Faker\Provider\pt_BR\Person($faker));

    return [
    	'cliente_id' => function()
    	{
    		return factory(App\Entities\Cliente::class)->create()->id;
    	},
        'nome' => $faker->name,
        'data_nascimento' => $faker->date,
        'nome_apresentacao_nick' => $faker->userName,
        'cpf' => $faker->cpf(false),
        'rg' => $faker->rg,
        'genero' => $faker->randomElement(['M','F','O'])
    ];

});


$factory->define(App\Entities\ClientePJ::class, function (Faker\Generator $faker) 
{

	$faker->addProvider(new Faker\Provider\pt_BR\Company($faker));

    return [
    	'cliente_id' => function()
    	{
    		return factory(App\Entities\Cliente::class)->create()->id;
    	},
        'ramo_atividade' => $faker->jobTitle,
        'razao_social' => $faker->company,
        'nome_fantasia' => $faker->companySuffix,        
        'cnpj' => $faker->cnpj(false),
        'atividades_iniciadas_em' => $faker->date,
        'nome_representante_legal' => $faker->name
    ];
    
});