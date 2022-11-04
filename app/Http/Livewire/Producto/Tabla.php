<?php

namespace App\Http\Livewire\Producto;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;


class Tabla extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';
    
    public $search, $paginate=5; 
    public $sort ='id', $direction='desc';  
    
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {        
        $productos = Producto::where('nombre','like','%'.$this->search.'%')
                                ->orWhere('codigo','like','%'.$this->search.'%')
                                ->orderBy($this->sort,$this->direction)
                                ->paginate($this->paginate);
        return view('livewire.producto.tabla',compact('productos'))->with('i', 0);;
    }

    public function order($sort){
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }            
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }       
    }
}
