<?php

return [
    'cms'   => 'Главная',
    'create' => 'Создать',
    'edit' => 'Редактировать',
    'update' => 'Обновить',
    'save' => 'Сохранить',
    'groups' => [
        'groups' => 'Группы',
        'specialization' => 'Специализация',
        'level' => 'Направление подготовки',
        'levels' => [
            \App\Models\Group::LEVEL1 => 'СПО',
            \App\Models\Group::LEVEL2 => 'ВПО'
        ],
        'year' => 'Год поступления',
    ],
    'students' => [
        'students' => 'Студенты',
        'name' => 'ФИО',
        'group' => 'Группа',
        'subgroup' => 'Подруппа',
        'subgroups' => [
            \App\Models\Student::SUBGROUP_A => 'A',
            \App\Models\Student::SUBGROUP_B => 'B',
        ],
    ],
];
