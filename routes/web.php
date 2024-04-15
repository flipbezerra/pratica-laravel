<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'nome' => 'Felipe',
        'sobrenome' => 'Bezerra'      
    ]);
});

Route::get('/tarefas', function () {
    return view('tarefas', [
        'tarefas' => [
            [
                'descricao' => 'Estudar Laravel',
                'horario' => '07:00',
                'concluida' => true,
            ],
            [
                'descricao' => 'Treinar peito, ombro e bíceps',
                'horario' => '16:00',
                'concluida' => false,
            ],
        
        ]   
    ]);
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});
