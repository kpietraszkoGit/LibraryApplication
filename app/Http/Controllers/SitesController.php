<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagesRequest;
use App\Models\Site;
use Illuminate\Http\Request;


class SitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sites = Site::orderBy('id','DESC')->simplePaginate(10);
        return view('sites.index', compact('sites'));
    }

    public function add()
    {
        return view('sites.add');
    }

    public function save(PagesRequest $request)
    {
        $site = new Site();
        $site->title = $request->input('title');
        $site->description = $request->input('description');
        $site->save();
        return view('save');
    }

    public function show(Site $site)
    {
        return view('sites.show', compact('site'));
    }

    public function edit(Site $site)
    {
        return view('sites.edit', compact('site'));
    }

    public function update(PagesRequest $request, Site $site)
    {
        $site->title = $request->input('title');
        $site->description = $request->input('description');
        $site->update();
        return view('sites.update', compact('site'));
    }

    public function delete(Site $site)
    {
        $site->delete();
        return view('sites.delete', compact('site'));
    }
}
