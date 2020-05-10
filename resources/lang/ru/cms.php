<?php

return [
    'cms'   => 'Главная',
    'create' => 'Создать',
    'edit' => 'Редактировать',
    'update' => 'Обновить',
    'save' => 'Сохранить',
    'save_confirm' => 'Вы действительно хотите сохранить журнал?',
    'delete' => 'Удалить',
    'delete_confirm' => 'Вы действительно хотите удалить запись?',
    'user' => 'Преподаватель',
    'all' => 'Все',
    'manage' => 'Управление',
    'report' => 'Отчеты',
    'reports' => [
        'visit_and_mark' => 'Посещение и оценки',
        'average_mark' => 'Средняя оценка',
        'count_absent' => 'Количество пропусков(академ. часов)',

    ],
    'groups' => [
        'group' => 'Группа',
        'groups' => 'Группы',
        'specialization' => 'Специализация',
        'level' => 'Направление подготовки',
        'levels' => [
            0 => '-',
            null => '-',
            \App\Models\Group::LEVEL_SPO => 'СПО',
            \App\Models\Group::LEVEL_VPO => 'ВПО'
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
            0 => '-',
            null => '-',
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
    ],
    'schedules' => [
        'schedules' => 'Расписание',
    ],
    'lesson_type' => 'Тип занятия',
    'even_odd' => 'Четный\Нечетный',
    'even_odds' => [
        0 => '-',
        null => '-',
        \App\Models\Schedule::LESSON_EVEN => 'Четный',
        \App\Models\Schedule::LESSON_ODD => 'Нечетный',
    ],
    'half_lesson' => 'Полпары',
    'half_lessons' => [
        0 => '-',
        null => '-',
        \App\Models\Schedule::LESSON_HALF_FIRST => 'Первая половина',
        \App\Models\Schedule::LESSON_HALF_SECOND => 'Вторая половина',
    ],
    'lesson_day' => 'День',
    'lesson_time' => 'Время',
    'audience' => 'Аудитория',
    'type_load' => 'Вид нагрузки',
    'type_loads' => [
        0 => '-',
        null => '-',
        \App\Models\Schedule::TYPE_LOAD_BASIC => 'Основная',
        \App\Models\Schedule::TYPE_LOAD_HOUR => 'Почасовая',
    ],
    'visit_log' => 'Журнал посещений',
    'visit_logs' => [
        'absent' => 'Отсутствует',
        'mark' => 'Оценка',
    ],
];
