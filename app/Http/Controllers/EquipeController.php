<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use App\Http\Requests\EquipeRequest;

class EquipeController extends Controller
{
    public function index(){
        $Equipe = Equipe::orderBy('nome')->paginate(5);
        return view('equipe.index', ['equipe' => $Equipe]);
    }

    public function create() {
        return view('equipe.create');
    }

    public function store(EquipeRequest $request) {
        $nova_equipe = $request->all();
        Equipe::create($nova_equipe);

        return redirect()->route('equipe');
    }

    public function destroy($id) {
		try {
		    Equipe::find($id)->delete();
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
        $Equipe = Equipe::find($id);
        return view('equipe.edit', compact('equipe'));
    }

    public function update(EquipeRequest $request, $id) {
        Equipe::find($id)->update($request->all());
        return redirect()->route('equipe');
    }
}
