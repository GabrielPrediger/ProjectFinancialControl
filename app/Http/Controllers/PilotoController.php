<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piloto;
use App\Http\Requests\PilotoRequest;

class PilotoController extends Controller
{

    public function index(Request $filtro) {
		$filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null) {
            $pilotos = Piloto::orderBy('nome')->paginate(5);
        } else
            $pilotos = Piloto::where('nome', 'like', '%'.$filtragem.'%')
        					->orderBy("nome")
        					->paginate(5)
        					->setpath('piloto?desc_filtro='+$filtragem);

		return view('piloto.index', ['pilotos'=>$pilotos]);
	}
        

    public function create() {
        return view('piloto.create');
    }

    public function store(PilotoRequest $request) {
        $novo_piloto = $request->all();
        Piloto::create($novo_piloto);

        return redirect()->route('piloto');
    }

    public function destroy($id) {
		try {
		    Piloto::find($id)->delete();
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
        $piloto = Piloto::find($id);
        return view('piloto.edit', compact('piloto'));
    }

    public function update(PilotoRequest $request, $id) {
        Piloto::find($id)->update($request->all());
        return redirect()->route('piloto');
    }
}
