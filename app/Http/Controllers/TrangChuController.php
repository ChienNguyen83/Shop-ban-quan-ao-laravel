<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\SanPham;

class TrangChuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $danhmuc = DanhMuc::all();
        $data = array();
        foreach ($danhmuc as $value) {
            $madm = $value->MaDM;
            $tendm = $value->TenDM;
            $sp = DB::table('SanPham')->where('MaDM',$madm)->orderBy('TenSP', 'desc')->paginate(8);
            foreach ($sp as $value) {
                $value->Gia = SanPham::getGiaSPbyMa($value->MaSP);
            }
            array_push($data,[
                'MaDM'=>$madm,
                'TenDM'=>$tendm,
                'SP'=>$sp
            ]);
            // foreach ($sp as $value1) {
            //     array_push($data, [
            //      'MaDM'=>$madm,
            //      'TenDM'=>$tendm,
            //      'sp'=>$value1,
            //     ]);
            // }
        }
        //         echo '<pre>';
        // print_r($data);
        // $data1 = array();
        // array_push($data1, ['data'=>$data]);
 
        return view ('home',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
