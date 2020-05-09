<?php

namespace App\Http\Controllers\Cms\Students;

use App\Http\Controllers\Cms\Students\Requests\StoreStudentRequest;
use App\Http\Controllers\Cms\Students\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Services\Students\StudentsService;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use View;

class StudentsController extends Controller
{

    private StudentsService $studentsService;

    public function __construct(StudentsService $studentsService)
    {
        $this->studentsService = $studentsService;
    }

    public function index(Request $request)
    {
        View::share([
            'students' => $this->studentsService->search($request->getRequestData()),
        ]);

        return view('cms.students.index')->with('group_id', $request->input('group_id'));
    }

    public function create()
    {
        return view('cms.students.create');
    }

    public function store(StoreStudentRequest $request)
    {
        $this->studentsService->create($request->getFormData());
        return redirect()->route('cms.students.index', ['group_id' => $request->input('group_id')])->with('message', 'Студент успешно добавлен.');
    }

    public function show(Student $student)
    {
        View::share([
            'student' => $student,
        ]);
        return view('cms.students.show');
    }

    public function edit(Student $student)
    {
        View::share([
            'student' => $student,
        ]);
        return view('cms.students.edit');
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $this->studentsService->update($student, $request->getFormData());
        return redirect()->route('cms.students.index', ['group_id' => $student->group_id])->with('message', 'Студент успешно сохранен.');
    }

    public function destroy(Student $student)
    {
        $this->studentsService->delete($student);
        return redirect()->route('cms.students.index')->with('message', 'Студент успешно удален.');
    }
}
