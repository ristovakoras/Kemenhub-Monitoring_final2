<?php

namespace App\Http\Controllers;

use App\Models\Wim;
use App\Models\Lidar;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class DashboardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // return view('home');
    }

    public function dashadmin()
    {

        $datawim = DB::table('wim','wim.IsWeightOver')->where('IsWeightOver','>',0)->count();
        $datawim2 = DB::table('wim','wim.DoesLicencePlateExist')->where('DoesLicencePlateExist','>',0)->count();
        $datalidar = DB::table('lidar','lidar.IsDimensionOver')->where('IsDimensionOver','>',0)->count();
        $datalengkap = $datawim + $datawim2 + $datalidar;

        return view('admin.index', compact('datawim','datalidar', 'datawim2','datalengkap'));
    }

    public function dashuser()
    {

;
        return view('user_front.index');
    }

    public function dashdevice()
    {
        return view('device.index');
    }

    public function losarang(Request $request)
    {

        if ($request->has('search')) {
            $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image')->where('LicencePlate', 'LIKE','%' .$request->search.'%')->paginate(5);

        } else if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = DB::table('wim')
                    ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
                    ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
                    'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
                    'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
                    'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image')
                    ->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(500);
        } else {

        $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image')
            ->latest()->paginate(10);
        }

        return view('losarang.losarang', compact('datawim'));


    }

    public function kulwaru(Request $request)
    {

        if ($request->has('search')) {
            $datawim = Wim::latest()->where('LicencePlate', 'LIKE','%' .$request->search.'%')->paginate(5);

        } else if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = Wim::latest()->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(100);
        } else {

        $datawim = Wim::latest()->paginate(10);
        }
        return view('kulwaru.kulwaru', compact('datawim'));
    }


    public function dashboarduser()
    {


        $datawim = DB::table('wim','wim.IsWeightOver')->where('IsWeightOver','>',0)->count();
        $datawim2 = DB::table('wim','wim.DoesLicencePlateExist')->where('DoesLicencePlateExist','>',0)->count();
        $datalidar = DB::table('lidar','lidar.IsDimensionOver')->where('IsDimensionOver','>',0)->count();
        $datalengkap = $datawim + $datawim2 + $datalidar;

        return view('user_front.index', compact('datawim','datalidar', 'datawim2','datalengkap'));
    }

    public function losaranguser(Request $request)
    {

        if ($request->has('search')) {
            $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image')->where('LicencePlate', 'LIKE','%' .$request->search.'%')->paginate(5);

        } else if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = DB::table('wim')
                    ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
                    ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
                    'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
                    'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
                    'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image')
                    ->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(500);
        } else {

        $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image')
            ->latest()->paginate(10);
        }

        return view('user_front.losaranguser.losaranguser', compact('datawim'));

    }

    public function kulwaruuser(Request $request)
    {

        if ($request->has('search')) {
            $datawim = Wim::latest()->where('LicencePlate', 'LIKE','%' .$request->search.'%')->paginate(5);

        } else if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = Wim::latest()->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(100);
        } else {

        $datawim = Wim::latest()->paginate(10);
        }
        return view('user_front.kulwaruuser.kulwaruuser', compact('datawim'));
    }

}


