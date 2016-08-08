<?php namespace Astra-Web\Http\Controllers;

use Astra-Web\Http\Controllers\Controller;
use Astra-Web\Fileentry;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class FileEntryController extends Controller {
    public function getIndex()
    {
        $fileentries = Fileentry::all();

        return view('fileentries.list', ['fileentries'=>$fileentries]);
    }

    public function getList()
    {
        Session::put('search', Input::has('ok') ? Input::get('search') : (Session::has('search') ? Session::get('search') : ''));
        Session::put('field', Input::has('field') ? Input::get('field') : (Session::has('field') ? Session::get('field') : 'title'));
        Session::put('sort', Input::has('sort') ? Input::get('sort') : (Session::has('sort') ? Session::get('sort') : 'asc'));
        $fileentries = Fileentry::where('original_filename', 'like', '%' . Session::get('search') . '%')->paginate(10);
        //->orderBy(Session::get('field'), Session::get('sort'))->paginate(10);

        return view('fileentries.list', ['fileentries' => $fileentries]);
    }

    public function getCreate()
    {
        return view('fileentries.form')->render();
    }

    public function postCreate()
    {
        $file = Request::file('filefield');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        $entry = new Fileentry();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;

        $entry->save();

        return ['url' => 'fileentries/list'];
    }

    public function getDelete($id)
    {
        $file = Fileentry::where('id',$id)->first();
        Storage::disk('local')->delete($file->filename);
        Fileentry::destroy($id);
        return Redirect('fileentry/list');
    }


	public function get($filename){


		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('local')->get($entry->filename);

		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);

	}
}
