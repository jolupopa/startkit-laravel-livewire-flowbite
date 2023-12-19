<div>
    <select wire:model="type">
        <option value="alquiler">Alquiler</option>
        <option value="venta">Venta</option>
        <option value="proyectos">Proyectos</option>
    </select>

    <input type="text" wire:model="location" placeholder="Nombre del lugar">

    @if($type === 'proyectos')
        <select wire:model="category">
            <option value="edificacion">Edificación</option>
            <option value="saneamiento">Saneamiento</option>
            <option value="electrico">Eléctrico</option>
            <option value="carreteras">Carreteras</option>
        </select>

        <input type="text" wire:model="priceRange" placeholder="Rango de precios">
    @else
        <select wire:model="category">
            <option value="casas">Casas</option>
            <option value="departamentos">Departamentos</option>
            <option value="terrenos">Terrenos</option>
            <option value="oficinas">Oficinas</option>
            <!-- Agrega otras categorías según tus necesidades -->
        </select>
    @endif

    <button wire:click="search">Buscar</button>

</div>
