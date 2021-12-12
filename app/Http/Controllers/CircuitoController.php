<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circuito;
use App\Http\Requests\CircuitoRequest;

class CircuitoController extends Controller
{
    public function index(){
        $circuitos = Circuito::orderBy('nome')->paginate(5);
        return view('circuito.index', ['circuitos' => $circuitos]);
    }

    public function create() {
        return view('circuito.create');
    }

    public function store(CircuitoRequest $request) {
        $novo_circuito = $request->all();
        Circuito::create($novo_circuito);

        return redirect()->route('circuito');
    }

    public function destroy($id) {
		try {
		    Circuito::find($id)->delete();
			$ret = array('status'=>200, 'msg'=>"null");
		} catch (\Illuminate\Database\QueryException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		} 
		catch (\PDOException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		return $ret;
	}

    public function edit($id) {
        $circuito = Circuito::find($id);
        return view('circuito.edit', compact('circuito'));
    }

    public function update(CircuitoRequest $request, $id) {
        Circuito::find($id)->update($request->all());
        return redirect()->route('circuito');
    }
}
