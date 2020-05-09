<?php

namespace App\Http\Controllers\Cms\Disciplines;

use App\Http\Controllers\Cms\Disciplines\Requests\StoreDisciplineRequest;
use App\Http\Controllers\Cms\Disciplines\Requests\UpdateDisciplineRequest;
use App\Models\Discipline;
use App\Services\Disciplines\DisciplinesService;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use View;

class DisciplinesController extends Controller
{

    private DisciplinesService $disciplinesService;

    public function __construct(DisciplinesService $disciplinesService)
    {
        $this->disciplinesService = $disciplinesService;
    }

    public function index(Request $request)
    {
        View::share([
            'disciplines' => $this->disciplinesService->search($request->getRequestData()),
        ]);

        return view('cms.disciplines.index');
    }

    public function create()
    {
        return view('cms.disciplines.create');
    }

    public function store(StoreDisciplineRequest $request)
    {
        $this->disciplinesService->create($request->getFormData());
        return redirect()->route('cms.disciplines.index')->with('message', 'Дисциплина успешно добавлена.');
    }

    public function show(Discipline $discipline)
    {
        View::share([
            'discipline' => $discipline,
        ]);
        return view('cms.disciplines.show');
    }

    public function edit(Discipline $discipline)
    {
        View::share([
            'discipline' => $discipline,
        ]);
        return view('cms.disciplines.edit');
    }

    public function update(UpdateDisciplineRequest $request, Discipline $discipline)
    {
        $this->disciplinesService->update($discipline, $request->getFormData());
        return redirect()->route('cms.disciplines.index')->with('message', 'Дисциплина успешно сохранена.');
    }

    public function destroy(Discipline $discipline)
    {
        $this->disciplinesService->delete($discipline);
        return redirect()->route('cms.disciplines.index')->with('message', 'Дисциплина успешно удалена.');
    }
}
