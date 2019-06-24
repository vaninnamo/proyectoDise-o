<?php

namespace Diseño\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function productos()
    {
        return view('productos');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function nosotros()
    {
        return view('nosotros');
    }
    public function admin()
    {
        return view('admin.index');
    }

    public function asistencia()
    {
        return view('asistencia');
    }

    public function preguntas()
    {
        return view('preguntas');
    }

    public function manuales()
    {
        return view('manuales');
    }
    public function login()
    {
        return view('login');
    }

    public function listarUsu()
    {   
        return view('usuarios.listausu');    
    }
    
    public function usuedit()
    {   
        return view('usuarios.edit');    
    }
    
    public function listareclamos()
    {   
        return view('reclamos.listareclamos');    
    }

    public function reclamoedit()
    {   
        return view('reclamos.reclamoedit');    
    }
    public function reclamover()
    {   
        return view('reclamos.reclamover');    
    }
    public function listaasistencias()
    {   
        return view('asistencias.listaasistencias');    
    }

    public function asistenciaver()
    {   
        return view('asistencias.asistenciaver');    
    }
   
    // Gerente
    public function inforeclamospend()
    {   
        return view('gerente.informes.infoReclamospendientes');    
    }
    
    public function infoproductosmasrec()
    {   
        return view('gerente.informes.infoproductosmasrec');    
    }

    public function inforeclamostipofalla()
    {   
        return view('gerente.informes.inforeclamostipofalla');    
    }

    public function inforeclamossolucion()
    {   
        return view('gerente.informes.inforeclamossolucion');    
    }
    public function adminT()
    {   
        return view('layouts.adminT');    
    }
    public function adminG()
    {   
        return view('layouts.adminG');    
    }
    public function adminSGP()
    {   
        return view('layouts.adminSGP');    
    }
    
    // tecnico
    public function Tlistareclamos()
    {   
        return view('tecnico.reclamos.listareclamos');    
    }

    public function Treclamoedit()
    {   
        return view('tecnico.reclamos.reclamoedit');    
    }
    public function Treclamover()
    {   
        return view('tecnico.reclamos.reclamover');    
    }
}