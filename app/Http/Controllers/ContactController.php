<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
     return view('contacts.index');
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        return view('contacts.show');
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
