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

        // $data = Wim::all();

        // // Data Untuk Chart
        // $categories = [];

        // foreach($data as $wim){
        //     $categories[] = $wim->OverWeight;
        // }

        $datawim = DB::table('wim','wim.IsWeightOver')->where('IsWeightOver','>',0)->count();
        $datawim2 = DB::table('wim','wim.DoesLicencePlateExist')->where('DoesLicencePlateExist','>',0)->count();
        $datalidar = DB::table('lidar','lidar.IsDimensionOver')->where('IsDimensionOver','>',0)->count();
        $datalengkap = $datawim + $datawim2 + $datalidar;

        return view('admin.index', compact('datawim','datalidar', 'datawim2','datalengkap'));
    }

    public function dashuser()
    {

        // $sumber ='https://masak-apa-tomorisakura.vercel.app/api/recipes';
        // $konten = file_get_contents($sumber);
        // $data = json_decode($konten, true);
        return view('user_front.index');
        // return view('user_front.index');
    }

    public function dashdevice()
    {
        return view('device.index');
    }

    public function losarang()
    {
        // $sumber ='https://masak-apa-tomorisakura.vercel.app/api/recipes';
        // $konten = file_get_contents($sumber);
        // $data = json_decode($konten, true);
        // return view('losarang.index', compact('data'));
        // return view('losarang.index');

        // if (request()->start_date || request()->end_date) {
        //     $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        //     $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        //     $datawim = Wim::whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(10);
        // } else {
        //     $datawim = Wim::with('lidar')->paginate(10);
        // }

        // $datawim = DB::table('wim')
        //     ->join('lidar', 'lidar.id', '=', 'wim.id')
        //     ->get();

        // $datalidar = lidar::with('wim')->paginate(10);

        // $datawim = Wim::with('lidar')->paginate(10);
        if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = DB::table('wim')
                    ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
                    ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
                    'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
                    'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
                    'OverWeight','LimitWeight','OverWeight','WeighingDateTime','Image')
                    ->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(10);
        } else {

        $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','Image')
            ->latest()->paginate(10);
        }

        return view('losarang.losarang', compact('datawim'));


    }

    public function kulwaru()
    {
        // $sumber ='https://masak-apa-tomorisakura.vercel.app/api/recipes';
        // $konten = file_get_contents($sumber);
        // $data = json_decode($konten, true);
        // return view('kulwaru.index', compact('data'));
        // return view('kulwaru.index');
        $data = Wim::latest()->paginate(10);
        return view('kulwaru.kulwaru', compact('data'));
    }

}


