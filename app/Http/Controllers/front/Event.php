<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\MasterTempatWisataModel;

class Event extends Controller
{
    public function index(Request $request){
        $data=array();
        $u1 = request()->segment(1);
		$u2 = request()->segment(2);
        if($u2==''){
            $pages='web.event.index';
        }else{
            
            if($u2=='seleksi-wirausaha-muda-2023'){
                $data['img_posting']="front/images/events/event1.jpg";
                $data['tanggal_posting']="25/10/2023";
                $data['isi_posting']="<p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>";
            }
            if($u2=='seleksi-pemuda-pelopor-2023'){
                $data['img_posting']="front/images/events/event1.jpg";
                $data['tanggal_posting']="25/10/2023";
                $data['isi_posting']="<p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>";
            }
            if($u2=='webinar-okp-2023'){
                $data['img_posting']="front/images/events/event1.jpg";
                $data['tanggal_posting']="25/10/2023";
                $data['isi_posting']="<p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p><p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>";
            }
            $key=str_replace("-"," ",$u2);
            $data['judul']=strtoupper($key);
            $pages='web.event.detail';
            
        }


        return view($pages, $data);
    }
}
