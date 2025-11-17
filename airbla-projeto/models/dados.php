<?php

// Usuários cadastrados
$USUARIOS = [
    [
        'id' => 1,
        'nome' => 'Bruno',
        'email' => 'bruno@airbla.com',
        'senha' => '1234'
    ],
    [
        'id' => 2,
        'nome' => 'Carla',
        'email' => 'carla@airbla.com',
        'senha' => 'abcd'
    ]
];

// Trilhas da cultura AirBLÁ
$TRILHAS = [
    [
        'id' => 1,
        'titulo' => 'Cultura AirBLÁ',
        'descricao' => 'Visão geral sobre os valores e práticas da empresa.'
    ],
    [
        'id' => 2,
        'titulo' => 'Valores Fundamentais',
        'descricao' => 'Trilha sobre colaboração, inovação e ética.'
    ]
];

// Quiz simples com alternativas
$QUIZ = [
    'pergunta' => 'Qual comportamento reflete a cultura AirBLÁ?',
    'alternativas' => [
        ['id' => 1, 'texto' => 'Compartilhar conhecimento.', 'correta' => true],
        ['id' => 2, 'texto' => 'Ignorar feedback.', 'correta' => false],
        ['id' => 3, 'texto' => 'Competir de forma desrespeitosa.', 'correta' => false],
    ]
    
];