<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Theme;
use Validator;
use App\Formula\Pecahan;

class PecahanController extends Controller
{
    public function __construct()
    {
        $this->theme = Theme::uses('default')->layout('login');
    }

    public function index()
    {

        $data = [];

        $this->theme = Theme::uses('default')->layout('login');

        return $this->theme->scope('pecahan', $data)->render();
    }

    public function hitung(Request $req)
    {
        $input = $req->all();

        $rules = array(
            'money' => 'required'
        );

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            $rt['data'] = ['message' => 'Uang tidak boleh kurang dari 100 rupiah', 'data' => []];
        }

        $rt['data'] = ['message' => '', 'data' => []];


        if ($input['money'] < 100)
            $rt['data'] = ['message' => 'Uang tidak boleh kurang dari 100 rupiah', 'data' => []];

        $money = (int) $input['money'];
        $rs = Pecahan::doGet($money);

        $rt['data'] = ['message' => '', 'data' => $rs, 'money' => isset($input['money']) ? $money : ''];


        $this->theme = Theme::uses('default')->layout('login');

        return $this->theme->scope('pecahan', $rt)->render();
    }

}
