<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pessoas;
use App\Http\Requests\PessoasRequest;

class PessoasController extends Controller
{
    public function index(){
        $pessoas = Pessoas::orderBy('valor')->paginate(5);
        return view('pessoas.index', ['pessoas' => $pessoas]);
    }

    public function create() {
        return view('pessoas.create');
    }

    public function store(PessoasRequest $request) {
        $nova_saida = $request->all();
        Pessoas::create($nova_saida);

        return redirect()->route('pessoas');
    }

    public function destroy($id) {
		try {
		    Pessoas::find($id)->delete();
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
        $pessoas = Pessoas::find($id);
        return view('pessoas.edit', compact('pessoas'));
    }

    public function update(PessoasRequest $request, $id) {
        Pessoas::find($id)->update($request->all());
        return redirect()->route('pessoas');
    }
}
