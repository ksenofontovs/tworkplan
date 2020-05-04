<?php

return [
    'cms'   => 'Главная',
    'create' => 'Создать',
    'edit' => 'Редактировать',
    'update' => 'Обновить',
    'save' => 'Сохранить',
    'groups' => [
        'group' => 'Группа',
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
        'student' => 'Студент',
        'students' => 'Студенты',
        'name' => 'ФИО',
        'group' => 'Группа',
        'subgroup' => 'Подруппа',
        'subgroups' => [
            \App\Models\Student::SUBGROUP_A => 'A',
            \App\Models\Student::SUBGROUP_B => 'B',
        ],
    ],
    'disciplines' => [
        'discipline' => 'Дисциплина',
        'disciplines' => 'Дисциплины',
    ],
    'semesters' => [
        'semesters' => 'Семестры',
        'semester' => 'Семестр',
        'date_start' => 'Дата начала',
        'date_end' => 'Дата окончания',
    ]
];
