<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Http\Requests\PaisRequest;

class PaisController extends Controller
{
	public function index() {
		$paises = Pais::orderBy('nome')->paginate(5);
		return view('pais.index', ['paises'=>$paises]);
	}

	public function create() {
		return view('pais.create');
	}

	public function store(PaisRequest $request) {
		$novo_pais = $request->all();
		Pais::create($novo_pais);

		return redirect()->route('pais');
	}

	public function destroy($id) {
		try {
		    Pais::find($id)->delete();
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
		$pais = Pais::find($id);
		return view('pais.edit', compact('pais'));
	}

	public function update(PaisRequest $request, $id) {
		Pais::find($id)->update($request->all());
		return redirect()->route('pais');
	}
}

