<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Articulo;

class Articulos extends Component
{
    public $articulos, $descripcion, $cantidad, $id_articulo;
    public $modal = false;
    public function render()
    {
        $this->articulos = Articulo::all();
        return view('livewire.articulos');
    }


    public function crear()
    {
        $this->limpiar();
        $this->openModal();
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {

        $this->modal = false;
    }
    public function limpiar()
    {
        $this->descripcion = '';
        $this->cantidad = '';
        $this->id_producto = '';
    }
    public function guardar()
    {
        Articulo::updateOrCreate(
            ['id' => $this->id_articulo],
            [
                'descripcion' => $this->descripcion,
                'cantidad' => $this->cantidad
            ]
        );
        // session()->flash('message',
        // $this->id_producto ? 'Actualizacion exitosa' : 'Guardado correctamente');
        $this->cerrarModal();
        // $this->limpiar();
    }
}