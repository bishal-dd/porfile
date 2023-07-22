<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisitorModel;
use Illuminate\Support\Carbon;

class dashboard extends Controller
{
    public function dashboard()
    {
        $currentMonth = Carbon::now()->format("m");
        $monthlyVisitors = VisitorModel::whereMonth("visited_at", $currentMonth)
            ->distinct("ip_address")
            ->count("ip_address");
        $currentYear = Carbon::now()->format("Y");
        $yearlyVisitors = VisitorModel::whereYear("visited_at", $currentYear)
            ->distinct("ip_address")
            ->count("ip_address");
        $data = VisitorModel::get();
        $number = count($data);
        $uniqueVisitors = VisitorModel::distinct("ip_address")->count(
            "ip_address"
        );

        return view(
            "admin/dashboard",
            compact(
                "number",
                "uniqueVisitors",
                "monthlyVisitors",
                "yearlyVisitors"
            )
        );
    }
}
