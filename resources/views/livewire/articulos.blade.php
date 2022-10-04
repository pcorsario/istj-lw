<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <button wire:click="crear()" class="bg-purple-900 rounded-md hover:bg-amber-500 hover:text-purple-900 py-2 px-4 my-3 font-bold text-white">Nuevo</button>
 
            @if ($modal)
            @include('livewire.crear')
            @endif
 
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-green-900 text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">DESCRIPTION</th>
                        <th class="px-4 py-2">CANTIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articulos as $producto)
                        <tr>
                            <td class="bg-amber-300 border px-4 py-2">{{ $producto->id }}</td>
                            <td class="bg-amber-300 border px-4 py-2">{{ $producto->descripcion }}</td>
                            <td class="bg-amber-300 border px-4 py-2">{{ $producto->cantidad }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
