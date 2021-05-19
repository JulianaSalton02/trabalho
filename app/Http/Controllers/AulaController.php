<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Hora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Dia;

class AulaController extends Controller
{
    public function __construct()
    {
        if(!Session::has("aulas")) {
            Session::put("aulas", []);
        }
    }
    public function index()
    {
        return view(
            "aula.index",
            [
                "materias"=> Aula::addSelect([
                    'dia' => Dia::select('descricao')->whereColumn('id', 'aula.dia'),
                    'hora' => Hora::select('hora')->whereColumn('id','aula.idhora')
                ])->get(),
            ]
        );
    }

    public function create()
    {
        return view(
            "aula.create",
            [
                "dias" => Dia::All(),
                "horas" => Hora::all()
            ]
        );
    }

    public function edit($id)
    {
        $aula = Aula::findOrFail($id);

        return view(
            "aula.edit",
            [
                "dias" => Dia::all(),
                "horas" => Hora::all(),
                "aula" => $aula
            ]
        );
    }

    public function update($id, Request $request)
    {
        $aula = Aula::find($id);
        $aula->descricao = $request->descricao;
        $aula->dia = $request->dia;
        $aula->idhora = $request->horario;
        $aula->save();
        return redirect("aulas");
    }

    public function store(Request $request)
    {
        $aula = new Aula();
        $aula->descricao = $request->descricao;
        $aula->dia = $request->dia;
        $aula->idhora = $request->horario;
        $aula->idusuario = Auth::user()->id;
        $aula->save();

        return redirect("aulas");
    }

    public function destroy(Aula $aula)
    {
        $aula->delete();

        return redirect("aulas");
    }

    protected function getDias()
    {
        return [
            'Segunda-feira',
            'Terça-feira',
            'Quarta-feira',
            'Quinta-feira',
            'Sexta-feira'
        ];
    }

    protected function getHoras()
    {
        return [
            '19:00',
            '21:00'
        ];
    }
}
