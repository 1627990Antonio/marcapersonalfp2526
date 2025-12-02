<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

$proyectos = Proyecto::table('proyectos')->get();

class ProyectosController extends Controller
{
    public function getIndex()
    {
        return view('proyectos.index')
            ->with('proyectos', Proyecto::table('proyectos')->get());
    }

    public function getShow($id)
    {
        return view('proyectos.show')
            ->with('proyecto', self::$arrayProyectos[$id])
            ->with('id', $id);
    }

    public function getCreate()
    {
        return view('proyectos.create');
    }

    public function getEdit($id)
    {
        return view('proyectos.edit')
            ->with('proyecto', self::$arrayProyectos[$id])
            ->with('id', $id);
    }

}
