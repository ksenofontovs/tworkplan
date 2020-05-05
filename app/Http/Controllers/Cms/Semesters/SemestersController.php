<?php

namespace App\Http\Controllers\Cms\Semesters;

use App\Http\Controllers\Cms\Semesters\Requests\StoreSemesterRequest;
use App\Http\Controllers\Cms\Semesters\Requests\UpdateSemesterRequest;
use App\Models\Semester;
use App\Services\Semesters\SemestersService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;

class SemestersController extends Controller
{

    private SemestersService $semestersService;

    public function __construct(SemestersService $semestersService)
    {
        $this->semestersService = $semestersService;
    }

    public function index(Request $request)
    {
        View::share([
            'semesters' => $this->semestersService->search($request),
        ]);

        return view('cms.semesters.index');
    }

    public function create()
    {
        return view('cms.semesters.create');
    }

    public function store(StoreSemesterRequest $request)
    {
        $this->semestersService->create($request->getFormData());
        return redirect()->route('cms.semesters.index')->with('message', 'Семестр успешно добавлен.');
    }

    public function show(Semester $semester)
    {
        View::share([
            'semester' => $semester,
        ]);
        return view('cms.semesters.show');
    }

    public function edit(Semester $semester)
    {
        View::share([
            'semester' => $semester,
        ]);
        return view('cms.semesters.edit');
    }

    public function update(UpdateSemesterRequest $request, Semester $semester)
    {
        $this->semestersService->update($semester, $request->getFormData());
        return redirect()->route('cms.semesters.index')->with('message', 'Семестр успешно сохранен.');
    }

    public function destroy(Semester $semester)
    {
        $this->semestersService->delete($semester);
        return redirect()->route('cms.semesters.index')->with('message', 'Семестр успешно удален.');
    }
}
