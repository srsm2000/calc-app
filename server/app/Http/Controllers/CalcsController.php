<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CalcsController extends Controller
{
    public function show($i1, $op, $i2)
    {
        switch ($op) {
            case 'addition':
                $answer = $i1 + $i2;
                break;
            case 'subtraction':
                $answer = $i1 - $i2;
                break;
            case 'multiplication':
                $answer = $i1 * $i2;
                break;
            case 'division':
                $answer = $i1 / $i2;
                break;
            default:
                $answer = "演算子を入れてください";
        }
        return view('calcs.show', ['answer' => $answer]);
    }
}
