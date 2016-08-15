<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

use App\Http\Requests;

class MainController extends Controller
{
  public $title = "Tendencias Informaticas";
  public $descr = "Tendencias Informaticas";
   
  // INICIO
  public function index()
  {
    return view('inicio')->with([
      'title' => $this->title." | Inicio",
      'desc'  => $this->descr,
      'slug'  => "inicio"
    ]);
  }     

  // TENDENCIAS
  public function tendencias()
  {
    return view('tendencias')->with([
      'title' => $this->title." | Tendencias ",
      'desc'  => $this->descr,
      'slug'  => "tendencias"
    ]);
  }   

  // RECURSOS
  public function recursos()
  {
    return view('recursos')->with([
      'title' => $this->title." | Recursos ",
      'desc'  => $this->descr,
      'slug'  => "recursos"
    ]);
  }  

  // AUTORES
  public function autores()
  {
    return view('autores')->with([
      'title' => $this->title." | autores ",
      'desc'  => $this->descr,
      'slug'  => "autores"
    ]);
  }   

  
}
