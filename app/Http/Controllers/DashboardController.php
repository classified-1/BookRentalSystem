<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Category;


class DashboardController extends Controller
{

    /////Take u to dashboard Either Admin or Students/user///
    public function index()
    {
        if (Auth::user()->hasRole('Student')) {
            return view('userdash/includes/BooksBorrowed');
        } elseif (Auth::user()->hasRole('admin')) {
            $all_book = Book::with('Category')->get();
            return view('admindash/includes/viewbook', compact('all_book'));
        }
    }


    /////Take u to Home Page///
    public function main()
    {
        if (Auth::user()->hasRole('Student')) {
            $all_book = Book::with('Category')->get()->take(20);
            $all_category = Category::all();
            return view('index', compact('all_book', 'all_category'));
        } elseif (Auth::user()->hasRole('admin')) {

            $all_book = Book::with('Category')->get()->take(20);
            $all_category = Category::all();
            return view('index', compact('all_book', 'all_category'));
        }
    }

    ////////All Book Page with AJAX search////////
    public function allBook()
    {
        if (Auth::user()->hasRole('Student')) {
            return view('allBook');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('allBook');
        }
    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('books')
                    ->where('BookName', 'like', '%' . $query . '%')
                    ->orWhere('AuthorName', 'like', '%' . $query . '%')
                    ->get();
            } else {
                $data = DB::table('books')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
                    <div class="item">
        <img src="' .  "storage/" . $row->BookName . '"  id="bookimg">
        <div class="addDashboardDiv"><a href="#" class="addDashboardLink">
          <i class="fas fa-plus-circle" class="tooltip" title="Add Book to Dashboard" style="font-size:30px"></i></a></div>
      </div>              
        ';
                }
            } else {
                $output = '
       <h3 class="text-info mt-5" style="position:relative;left:30%">
        Sorry! No Such 📕 with this Name 
       </h3>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
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
