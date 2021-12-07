<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entradas;

class EntradasController extends Controller
{

    public function index(Request $filtro) {
		$filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null) {
            $entradas = Entradas::orderBy('valor')->paginate(5);
        } else
            $entradas = Entradas::where('nome', 'like', '%'.$filtragem.'%')
        					->orderBy("valor")
        					->paginate(5)
        					->setpath('entradas?desc_filtro='+$filtragem);

		return view('entradas.index', ['entradas'=>$entradas]);
	}
        

    public function create() {
        return view('entradas.create');
    }

    public function store(EntradasRequest $request) {
        $nova_entrada = $request->all();
        Entradas::create($nova_entrada);

        return redirect()->route('entradas');
    }

    public function destroy($id) {
		try {
		    Entradas::find($id)->delete();
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
        $entradas = Entradas::find($id);
        return view('entradas.edit', compact('entradas'));
    }

    public function update(EntradasRequest $request, $id) {
        Entradas::find($id)->update($request->all());
        return redirect()->route('entradas');
    }
}
