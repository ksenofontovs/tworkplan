<?php

namespace App\Http\Controllers\Cms\Reports;

use App\Http\Controllers\Cms\Reports\Requests\MakeReportRequest;
use App\Http\Controllers\Controller;
use App\Services\Reports\ReportsService;
use App\Http\Requests\Request;

class ReportsController extends Controller
{

    private ReportsService $reportsService;

    public function __construct(ReportsService $reportsService)
    {
        $this->reportsService = $reportsService;
    }

    public function index(Request $request)
    {
        $this->reportsService->viewShareDependence();

        return view('cms.reports.index');
    }

    public function make(MakeReportRequest $request)
    {
        $this->reportsService->make($request->toArray());

        return view('cms.reports.make');
    }
}
