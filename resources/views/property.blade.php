@section('title', 'Property')
<x-layout>
    <h1>Propiedad {{ $property->id }}</h1>
    <main>
            <div class="dark-table" role="region" tabindex="0">
                <table>
                <thead>
                    <tr>
                        <th colspan="2">Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Título</td>
                        <td>{{ $property->title }}</td>
                    </tr>
                    <tr>
                        <td>Descripción</td>
                        <td>{{ $property->description }}</td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td>{{ $property->address }}</td>
                    </tr>
                    <tr>
                        <td>Ciudad</td>
                        <td>{{ $property->city }}</td>
                    </tr>
                    <tr>
                        <td>Precio</td>
                        <td>{{ $property->price }}</td>
                    </tr>
                    <tr>
                        <td>Tipo</td>
                        <td>{{ $property->type }}</td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>{{ $property->status }}</td>
                    </tr>
                    <tr>
                        <td>Fecha de creación</td>
                        <td>{{ $property->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Fecha de actualización</td>
                        <td>{{ $property->updated_at }}</td>
                    </tr>
                </tbody>
                        </table>
            </div>
    </main>
</x-layout>