<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rakitan;
class RakitController extends Controller
{
    public function index() {
        //home(
        $data = Rakitan::orderBy('created_at', 'desc')->get();
        return view('home',["data" =>$data]);
    }

    public function addrakitan() {
        //tambah rakitan
        return view('add');
    }

    public function handleaddrakitan(Request $request) {
        //api handle add
        $total = 0;
        foreach ($request->data as $data) {
           $price = str_replace(",","",explode("- Harga: IDR ",$data)[1] ?? 0);
            $total = $total +  $price;
        }
 
        Rakitan::create([
            "name" => $request->name,
            "data" => json_encode($request->data),
            "total" => $total
        ]);
        return redirect('/');
    }
}
