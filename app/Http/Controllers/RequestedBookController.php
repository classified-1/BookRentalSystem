<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\RequestedBook;
use Illuminate\Http\Request;

class RequestedBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function approve(Request $request)
    {
        $reqid = RequestedBook::find($request->reqid);
        $reqid->status = 1;
        $reqid->save();
        return redirect(url('booksrequest'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'book_id' => 'required',
            'user_id' => 'required',
        ]);
        $a = RequestedBook::create($data);
        Alert::success('Request Submitted Successfully. View Dashboard for Book Approval Status');
        return redirect(url('/'));
    }

    public function returnBook(Request $request)
    {
        $reqid = RequestedBook::find($request->reqid);
        $reqid->status = -1;
        $reqid->save();
        Alert::success('Book Returned Successfully');
        return redirect(url('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestedBook  $requestedBook
     * @return \Illuminate\Http\Response
     */
    public function show(RequestedBook $requestedBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestedBook  $requestedBook
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestedBook $requestedBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestedBook  $requestedBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestedBook $requestedBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestedBook  $requestedBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestedBook $requestedBook)
    {
        //
    }
}
