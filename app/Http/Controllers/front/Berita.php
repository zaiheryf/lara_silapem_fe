<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\MasterTempatWisataModel;

class Berita extends Controller
{
    public function index(Request $request){
        $data=array();
        $u1 = request()->segment(1);
		$u2 = request()->segment(2);
        if($u2==''){
            $pages='web.berita.index';
        }else{
            
            if($u2=='acara-gathering-wirausaha-muda'){
                $data['img_posting']="front/images/berita/berita.jpg";
                $data['tanggal_posting']="25/10/2023";
                $data['isi_posting']="<p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>";
            }
            if($u2=='pelaksanaan-gather-okp-2023'){
                $data['img_posting']="front/images/berita/berita.jpg";
                $data['tanggal_posting']="25/10/2023";
                $data['isi_posting']="<p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>";
            }
            if($u2=='bazar-umkm-subang-2023'){
                $data['img_posting']="front/images/berita/berita.jpg";
                $data['tanggal_posting']="25/10/2023";
                $data['isi_posting']="<p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>";
            }
            
            $key=str_replace("-"," ",$u2);
            $data['judul']=strtoupper($key);
            $pages='web.berita.detail';
            
        }


        return view($pages, $data);
    }
}
