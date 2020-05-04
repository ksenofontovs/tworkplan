<?php

namespace App\Http\Controllers\Cms\Groups;

use App\Http\Controllers\Cms\Groups\Requests\StoreGroupRequest;
use App\Http\Controllers\Cms\Groups\Requests\UpdateGroupRequest;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Services\Groups\GroupsService;
use View;

class GroupsController extends  Controller
{

    private GroupsService $groupsService;

    public function __construct(GroupsService $groupsService)
    {
        $this->groupsService = $groupsService;
    }


    public function index()
    {
        View::share([
            'groups' => $this->groupsService->search([]),
        ]);

        return view('cms.groups.index');
    }

    public function create()
    {
        return view('cms.groups.create');
    }

    public function store(StoreGroupRequest $request)
    {
        $this->groupsService->create($request->getFormData());
        return redirect()->route('cms.groups.index')->with('message', 'Группа успешно добавлена.');
    }

    public function show(Group $group)
    {
        View::share([
            'group' => $group,
        ]);
        return view('cms.groups.show');
    }

    public function edit(Group $group)
    {
        View::share([
            'group' => $group,
        ]);
        return view('cms.groups.edit');
    }

    public function update(UpdateGroupRequest $request, Group $group)
    {
        $this->groupsService->update($group, $request->getFormData());
        return redirect()->route('cms.groups.index')->with('message', 'Группа успешно сохранена.');
    }

    public function destroy(Group $group)
    {
        $this->groupsService->delete($group);
        return redirect()->route('cms.groups.index')->with('message', 'Группа успешно удалена.');
    }
}
