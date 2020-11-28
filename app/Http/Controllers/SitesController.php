<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagesRequest;
use App\Models\Site;
use Illuminate\Http\Request;


class SitesController extends Controller
{
    //zabezpieczenie kontrolera zeby tylko użytkownik zalogowany mógł coś zrobić
    public function __construct()
    {
        $this->middleware('auth');//sprawdza czy jestesmy zalogowani jeśli nie to nas wyrzuci to forumlarza logowania
    }

    public function index()
    {
        //pobieranie z bazy danej rekordy
        //$sites = Site::all();//pobieranie danych z bazy do zmiennej sites

        $sites = Site::orderBy('id','DESC')->simplePaginate(10);//odwrócenie kolejności zwaracania danych z bazy danej(najnowesze wpisy na samej górze) i wyświetlanie tylko 6 rekordów na stronie
        return view('sites.index', compact('sites'));//2 sposób 'sites.index'-jest to szablon na którym pojawia się dane z bazy
            //['sites' => $sites//1 sposób
        //]);
    }

    //tworzenie tabeli i bedziemy cos do niej dodawac
    public function add()
    {
        return view('sites.add');
    }

    //tworzenie nowej akcji dla formularza, pobieranie danych z formularza i wysylanie je do bazy danej
    //public function save(Request $request)
    public function save(PagesRequest $request)
    {
        //dd($request->all());
        //Metoda 1
        //Site::create($request->all());//1 metoda przesylu danych z formularza do bazy danej

        //Metoda 2
        $site = new Site();
        $site->title = $request->input('title');
        $site->description = $request->input('description');
        $site->save();
        return view('save');
        //return redirect()->route('sites.save');//to jest dodane, 1 metoda
    }

    public function show(Site $site)//typujemy
    {
        return view('sites.show', compact('site'));
    }

    public function edit(Site $site)//typujemy
    {
        return view('sites.edit', compact('site'));
    }

    public function update(PagesRequest $request, Site $site) //lub Sites
    {
        $site->title = $request->input('title');
        $site->description = $request->input('description');
        $site->update();
        return view('sites.update', compact('site'));
    }

    public function delete(Site $site) //lub Sites
    {
        $site->delete();
        //return redirect()->route('sites.index');
        return view('sites.delete', compact('site'));
    }
}
