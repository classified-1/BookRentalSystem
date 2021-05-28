<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Category;

class DashboardController extends Controller
{

    public function index()
    {
        if (Auth::user()->hasRole('Student')) {
            return view('userdash/includes/BooksBorrowed');
        } elseif (Auth::user()->hasRole('admin')) {
            $all_book = Book::with('Category')->get();
            return view('admindash/includes/viewbook', compact('all_book'));
        }
    }
    public function main()
    {
        if (Auth::user()->hasRole('Student')) {
            $all_book = Book::with('Category')->get();
            return view('index', compact('all_book'));
        } elseif (Auth::user()->hasRole('admin')) {
            $all_book = Book::with('Category')->get();
            return view('index', compact('all_book'));
        }
    }

    /////////Users Roles and Routes////////////
    public function requestedbook()
    {
        if (Auth::user()->hasRole('Student')) {
            return view('userdash/includes/requestedbook');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('admindash/includes/viewbook');
        }
    }

    public function history()
    {
        if (Auth::user()->hasRole('Student')) {
            return view('userdash/includes/history');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('admindash/includes/viewbook');
        }
    }

    /////////Admin Roles and Routes////////////
    public function addbook()
    {
        if (Auth::user()->hasRole('Student')) {

            return view('userdash');
        } elseif (Auth::user()->hasRole('admin')) {
            $category_id = Category::all();
            return view('admindash/includes/addbook', compact('category_id'));
        }
    }

    public function booksrequest()
    {
        if (Auth::user()->hasRole('Student')) {

            return view('userdash');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('admindash/includes/booksrequest');
        }
    }
}
