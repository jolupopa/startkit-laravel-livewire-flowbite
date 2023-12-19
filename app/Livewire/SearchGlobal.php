<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;

class SearchGlobal extends Component
{

    public $country;
    public $department;
    public $province;
    public $district;
    public $zone;
    public $category;
    public $results;



    public $type; // Opción de alquiler, venta o proyectos
    public $location; // Nombre del lugar o ubicación geográfica
    public $category; // Categoría de proyectos, casas, departamentos, etc.
    public $priceRange; // Rango de precios

    public function searchProperties()
    {
        // Iniciamos la consulta con Eloquent
        properties = Property::query();

        // Aplicamos los filtros de búsqueda según los parámetros proporcionados
        if($this->country) {
            properties->whereHas('location', function($query) {
                query->where('country', $this->country);
            });
        }

        if($this->department) {
            properties->whereHas('location', function($query) {
                query->where('department', $this->department);
            });
        }

        if($this->province) {
            properties->whereHas('location', function($query) {
                query->where('province', $this->province);
            });
        }

        if($this->district) {
            properties->whereHas('location', function($query) {
                query->where('district', $this->district);
            });
        }

        if($this->zone) {
            properties->whereHas('location', function($query) {
                query->where('zone', $this->zone);
            });
        }

         // Aplicamos los filtros de búsqueda para las categorías
        if($this->category) {
            properties->where('category', $this->category);
        }

                // Resto del código para aplicar otros filtros de búsqueda basados en la ubicación (se mantiene sin cambios)
        // ...


        // Finalizamos la consulta y obtenemos los resultados de la búsqueda
        this->results = properties->get();
    }


    public function render()
    {
        return view('livewire.search-global');
    }

    public function search()
    {
        // Aquí puedes implementar la lógica de búsqueda según los parámetros seleccionados
        // por ejemplo, consultas a una base de datos, llamadas a una API, etc.
    }
}
