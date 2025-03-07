<?php

namespace App\Http\Controllers;


use App\models\copyinfo;
use App\models\geoinfo;
use App\models\Indust;
use App\models\info;
use App\models\Patinfo;
use App\Models\Post;
use App\Models\User;
use App\models\UtilInfo;
use App\Notifications\CommentFormNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AllIPController extends Controller
{
    //
    public function index()
    {
        $utilEntries = UtilInfo::take(10000)->where('user_id', Auth::user()->id)->get();
        $patEntries = Patinfo::take(10000)->where('user_id', Auth::user()->id)->get();
        $geoEntries = geoinfo::take(10000)->where('user_id', Auth::user()->id)->get();
        $industEntries = Indust::take(10000)->where('user_id', Auth::user()->id)->get();
        $tradeEntries = info::take(10000)->where('user_id', Auth::user()->id)->get();
        $copyEntries = copyinfo::take(10000)->where('user_id', Auth::user()->id)->get();

        $allEntries = collect();
        $allEntries = $allEntries->merge($utilEntries)
            ->merge($patEntries)
            ->merge($geoEntries)
            ->merge($industEntries)
            ->merge($tradeEntries)
            ->merge($copyEntries)
            ->sortByDesc('created_at')
            ->take(100000);

        return view('AllIPs', ['allEntries' => $allEntries]);
    }

    public function Search(Request $request)
    {
        // Get the search query parameters
        $name = $request->input('name');
        $title = $request->input('title');



        $utilEntries = UtilInfo::query();
        $patEntries = Patinfo::query();
        $geoEntries = geoinfo::query();
        $industEntries = Indust::query();
        $tradeEntries = info::query();
        $copyEntries = copyinfo::query();

        if (!empty($title)) {
            $utilEntries->where('inventiontitle', 'like', '%' . $title . '%')->where('is_complete', $request->type);
            $patEntries->where('inventiontitle', 'like', '%' . $title . '%')->where('is_complete', $request->type);
            $geoEntries->where('inventiontitle', 'like', '%' . $title . '%')->where('is_complete', $request->type);
            $industEntries->where('inventiontitle', 'like', '%' . $title . '%')->where('is_complete', $request->type);
            $tradeEntries->where('inventiontitle', 'like', '%' . $title . '%')->where('is_complete', $request->type);
            $copyEntries->where('inventiontitle', 'like', '%' . $title . '%')->where('is_complete', $request->type);

        }

        if (!empty($name)) {
            $utilEntries->join('users', 'util_infos.user_id', '=', 'users.id')
            ->where('users.name', 'like', '%' . $name . '%')
            ->select('util_infos.*', 'users.name as user_name')->where('is_complete', $request->type);

            $patEntries->join('users', 'patinfos.user_id', '=', 'users.id')
            ->where('users.name', 'like', '%' . $name . '%')
            ->select('patinfos.*', 'users.name as user_name')->where('is_complete', $request->type);

            $geoEntries->join('users', 'geoinfos.user_id', '=', 'users.id')
            ->where('users.name', 'like', '%' . $name . '%')
            ->select('geoinfos.*', 'users.name as user_name')->where('is_complete', $request->type);

            $industEntries->join('users', 'industs.user_id', '=', 'users.id')
            ->where('users.name', 'like', '%' . $name . '%')
            ->select('industs.*', 'users.name as user_name')->where('is_complete', $request->type);

            $tradeEntries->join('users', 'infos.user_id', '=', 'users.id')
            ->where('users.name', 'like', '%' . $name . '%')
            ->select('infos.*', 'users.name as user_name')->where('is_complete', $request->type);

            $copyEntries->join('users', 'copyinfos.user_id', '=', 'users.id')
            ->where('users.name', 'like', '%' . $name . '%')
            ->select('copyinfos.*', 'users.name as user_name')->where('is_complete', $request->type);


        }


        // Fetch the tags based on the search criteria
        $utilEntries = $utilEntries->get();
        $patEntries = $patEntries->get();
        $geoEntries = $geoEntries->get();
        $industEntries = $industEntries->get();
        $tradeEntries = $tradeEntries->get();
        $copyEntries = $copyEntries->get();
        // Return the view with search results
        // dd($copyEntries);
        //  dd($copyEntries );
        $allEntries = collect();
        $allEntries = $allEntries->merge($utilEntries)
            ->merge($patEntries)
            ->merge($geoEntries)
            ->merge($industEntries)
            ->merge($tradeEntries)
            ->merge($copyEntries)
            ->sortByDesc('created_at')
            ->take(100000);

        if ($request->type == 'Pending') {
            return view('admin.allip.pending', ['allEntries' => $allEntries]);

        } elseif ($request->type == 'approved') {
            return view('admin.allip.approved', ['allEntries' => $allEntries]);
        } else {
            return view('admin.allip.denied', ['allEntries' => $allEntries]);
        }

    }

    public function Comment(Request $request)
    {
        // dd('yes');
        $request->validate([
            'content' => 'required|string'
        ]);

        switch ($request->formType) {
            case 1:
                $entry = GeoInfo::where('formType', $request->formType)->find($request->id);
                break;
            case 2:
                $entry = Info::where('formType', $request->formType)->find($request->id);
                break;
            case 3:
                $entry = copyinfo::where('formType', $request->formType)->find($request->id);
                break;
            case 4:
                $entry = Indust::where('formType', $request->formType)->find($request->id);
                break;
            case 5:
                $entry = Patinfo::where('formType', $request->formType)->find($request->id);
                break;
            case 6:
                $entry = UtilInfo::where('formType', $request->formType)->find($request->id);
                break;
            default:
                // Handle default case or throw an error
                break;
        }


        $entry->comment = $request->content;
        $entry->save();
        // Get aplicant of the form
        $aplicant = User::findOrFail($entry->user_id);
        // Send notification to admin's users
        $aplicant->notify(new CommentFormNotification($entry));
        return redirect()->back()->with('success'. 'Comment send successfully');
    }


    public function getData(Request $request)
    {

        // Get the month from the request, or use the current month if not provided
        $month = $request->input('month', Carbon::now()->format('F'));

        // Map month names to numbers
        $monthNumber = Carbon::parse($month)->month;

        // Get the current year
        $year = Carbon::now()->year;

        // Define the statuses we are interested in
        $statuses = ['Pending', 'denied', 'approved'];

        // Initialize the counts array
        $counts = array_fill_keys($statuses, 0);

        // Models to query
        $models = [UtilInfo::class, Patinfo::class, geoinfo::class, Indust::class, info::class, copyinfo::class];

        foreach ($models as $model) {
            foreach ($statuses as $status) {
                $counts[$status] += $model::where('is_complete', $status)
                    ->whereMonth('created_at', $monthNumber)
                    ->whereYear('created_at', $year)
                    ->count();
            }
        }


        // Return data in JSON format
        return response()->json([
            'approvedCount' => json_encode($counts['approved']),
            'pendingCount' => json_encode($counts['Pending']),
            'deniedCount' => json_encode($counts['denied']),
        ]);
    }

    public function getDataPost(Request $request)
    {
        // Get the month from the request, or use the current month if not provided
        $month = $request->input('month', Carbon::now()->format('F'));

        // Map month names to numbers
        $monthNumber = Carbon::parse($month)->month;

        // Get the current year
        $year = Carbon::now()->year;

        // Define the statuses we are interested in
        $statuses = [0, 1];

        // Initialize the counts array
        $counts = array_fill_keys($statuses, 0);

        foreach ($statuses as $status) {
            $counts[$status] += Post::where('active', $status)
                ->whereMonth('created_at', $monthNumber)
                ->whereYear('created_at', $year)
                ->count();
        }



        // Return data in JSON format
        return response()->json([
            'active' => json_encode($counts[1]),
            'inactive' => json_encode($counts[0]),
        ]);
    }

}

