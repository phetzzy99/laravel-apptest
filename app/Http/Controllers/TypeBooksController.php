<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBooks; //import model Typebooks use

class TypeBooksController extends Controller
{
    public function index() {
        //$typebooks = TypeBooks::all();
        $typebooks = TypeBooks::orderBy('id', 'desc')->get();
        $count = TypeBooks::count();

        return view('typebooks.index',[
            'typebooks' => $typebooks,
            'count' => $count
        ]); // ส่งไปทีj views โฟลเดอร์ typebooks ไฟล์ index.blade.php
    }

    public function destroy($id) {
        TypeBooks::destroy($id);
        return back();
    }
}
