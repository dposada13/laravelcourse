<?php

namespace App\Http\Controllers;

use App\Models\fishes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FishController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Data - Fish';
        $viewData['subtitle'] = 'List of Fish';
        $viewData['fish'] = fishes::orderBy('weight', 'asc')->get();

        return view('fish.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create Fish';

        return view('fish.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'species' => 'required',
            'weight' => 'required',
        ]);

        fishes::create($request->only(['name', 'species', 'weight']));

        return back();
    }

    public function statistics()
    {

        // Contar cuántos peces hay de cada especie
        $speciesCount = fishes::select('species', DB::raw('count(*) as total'))
            ->groupBy('species')
            ->get();

        // Obtener el peso más grande encontrado en la base de datos
        $maxWeight = fishes::max('weight');

        // Pasar las estadísticas a la vista
        return view('fish.statistics', [
            'speciesCount' => $speciesCount,
            'maxWeight' => $maxWeight,
        ]);

    }
}
