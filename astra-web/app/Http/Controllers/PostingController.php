<?php namespace Astra-Web\Http\Controllers;

use Astra-Web\Http\Requests;
use Astra-Web\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Astra-Web\postings;
use Astra-Web\Fileentry;

class PostingController extends Controller {

    public function getIndex()
    {
        return view('posting.form');
    }

    public function getList()
    {
        Session::put('search', Input::has('ok') ? Input::get('search') : (Session::has('search') ? Session::get('search') : ''));
        Session::put('p_field', Input::has('field') ? Input::get('field') : (Session::has('p_field') ? Session::get('p_field') : 'title'));
        Session::put('sort', Input::has('sort') ? Input::get('sort') : (Session::has('p_sort') ? Session::get('sort') : 'asc'));
        $posting = postings::where(Session::get('p_field') ? Session::get('p_field'): 'title', 'like', '%' . Session::get('search') . '%')
                    ->orderBy(Session::get('p_field'), Session::get('sort'))->paginate(10);

        return view('posting.list', ['postings' => $posting]);
    }

    public function getCreate()
    {
        $files = Fileentry::all();
        return view('posting.form')->with(['files'=>$files])->render();
    }

    public function postCreate()
    {
        $posting = new postings();
        $posting->title = Input::get('title');
        $posting->description = Input::get('description');
        $posting->file_id = Input::get('file');
        $posting->save();
        return ['url' => 'posting/list'];
    }

    public function getDelete($id)
    {
        postings::destroy($id);
        return Redirect('posting/list');
    }

}
