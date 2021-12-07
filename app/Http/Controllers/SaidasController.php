<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saidas;
use App\Http\Requests\SaidasRequest;

class SaidasController extends Controller
{
    public function index(){
        $saidas = Saidas::orderBy('valor')->paginate(5);
        return view('saidas.index', ['saidas' => $saidas]);
    }

    public function create() {
        return view('saidas.create');
    }

    public function store(SaidasRequest $request) {
        $nova_saida = $request->all();
        Saidas::create($nova_saida);

        return redirect()->route('saidas');
    }

    public function destroy($id) {
		try {
		    Saidas::find($id)->delete();
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
        $Saidas = Saidas::find($id);
        return view('saidas.edit', compact('saidas'));
    }

    public function update(SaidasRequest $request, $id) {
        Saidas::find($id)->update($request->all());
        return redirect()->route('saidas');
    }
}
