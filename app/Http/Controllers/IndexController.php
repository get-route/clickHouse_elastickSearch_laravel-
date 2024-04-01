<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clickhouse\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){

        //Posts::create(['field_two'=>23,'field_one'=>'Привет']);
        $elastic = DB::connection('clickhouse')->getClient();
       $state = $elastic->select("SELECT * FROM my_table");
       return dd($state);

    }
}
