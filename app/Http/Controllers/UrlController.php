<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index($id) {
        $url = Url::select('origin_url')
                ->where('unique_id', $id)
                ->first();

        if(!$url) {
            abort(404);
        }

        return redirect($url->origin_url);
    }

    public function create() {
        return view('url.index');
    }

    public function store(Request $request) {
        $request->validate([
            'url' => 'required|string|active_url'
        ]);

        $randomStr = $this->generateRandomString(6);

        $url = new Url;
        $url->unique_id = $randomStr;
        $url->origin_url = $request->url;

        if($url->save()) {
            return back()
                    ->with('url', env('APP_URL').'/'.$randomStr);
        }

        return back()
                ->with('error', 'Server error.');;
    }

    public function generateRandomString($length) {
        $randomStr = Str::random($length);

        return $this->checkIfExist($randomStr);
    }

    public function checkIfExist($randomStr) {
        if(Url::where('unique_id', $randomStr)->exists()) {
            $newRandomStr = Str::random(6);
            $this->checkIfExist($newRandomStr); 
        }

        return $randomStr;
    }
}
