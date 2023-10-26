<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterTempatWisataModel;

class Destinasi extends Controller
{
    public function index(){
        $tempatwisata = MasterTempatWisataModel::where('status', '=', 'Publish')->paginate(6);
        $data = [
            "title"=>"Home",
            "tempatwisata" => $tempatwisata
        ];
        return view('web.destinasi.index', $data);
    }

    public function search(Request $request)
    {
        $data = "";
        if ($request) {
            $input = \Arr::except($request->all(), array('_token', '_method'));

            $data = MasterTempatWisataModel::select('*');
            if (isset($input['search'])) {
                $data = $data->where('nama', 'like', '%' . $input['search'] . '%');
            }
            $data->where('status', '=', 'Publish');
            $data = $data->paginate(6);
            //return view('web.destinasi.index', ['tempatwisata' => $data]);
            $pages['tempatwisata']=$data;
            $pages='web.destinasi.index';
            return view('template_front.content', ['konten' => $pages]);
        }else{
            $pages='web.destinasi.index';
            return view('template_front.content', ['konten' => $pages]);
        }

    }

}
