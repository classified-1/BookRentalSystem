<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Category;

class IndexController extends Controller
{
    // public function index()
    // {
    //     if (Auth::user()->hasRole('Student')) {
    //         $all_book = Book::with('Category')->get();
    //         return view('userdash', compact('all_book'));
    //     } elseif (Auth::user()->hasRole('admin')) {
    //         return view('dashboard');
    //     }
    // }
}
