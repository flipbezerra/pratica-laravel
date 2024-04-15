<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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
                'id' => 1,
                'descricao' => 'Estudar Laravel',
                'horario' => '07:00',
                'concluida' => true,
            ],
            [
                'id' => 2,
                'descricao' => 'Treinar peito, ombro e bíceps',
                'horario' => '16:00',
                'concluida' => false,
            ],
        
        ]   
    ]);
});

Route::get('/tarefas/{id}', function ($id) {
    $tarefas = [
        [
            'id' => 1,
            'descricao' => 'Estudar Laravel',
            'horario' => '07:00',
            'concluida' => true,
        ],
        [
            'id' => 2,
            'descricao' => 'Treinar peito, ombro e bíceps',
            'horario' => '16:00',
            'concluida' => false,
        ],
    
    ];
    
    $tarefa = Arr::first($tarefas, fn ($tarefa) => $tarefa['id'] == $id);

    return view('tarefa', ['tarefa' => $tarefa]);
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});
