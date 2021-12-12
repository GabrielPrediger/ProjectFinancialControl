<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Http\Requests\CidadeRequest;

class CidadeController extends Controller
{
	public function index() {
		$cidades = Cidade::orderBy('nome')->paginate(5);
		return view('cidade.index', ['cidades'=>$cidades]);
	}

	public function create() {
		return view('cidade.create');
	}

	public function store(CidadeRequest $request) {
		$novo_cidade = $request->all();
		Cidade::create($novo_cidade);

		return redirect()->route('cidade');
	}

	public function destroy($id) {
		try {
		    Cidade::find($id)->delete();
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
		$cidade = Cidade::find($id);
		return view('cidade.edit', compact('cidade'));
	}

	public function update(CidadeRequest $request, $id) {
		Cidade::find($id)->update($request->all());
		return redirect()->route('cidade');
	}
}

