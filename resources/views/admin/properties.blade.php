@section('title', 'Properties')
<x-layout>
    <h1>Properties</h1>
    <main>
        <div class="table-wrapper dark-table" role="region" tabindex="0">
            <table>
                <caption>Listado de Propiedades (Para Administrador)</caption>
                <br>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>address</th>
                        <th>city</th>
                        <th>price</th>
                        <th>type</th>
                        <th>status</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    

                @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
                        <td>{{ $property->title }}</td>
                        <td>{{ $property->description }}</td>
                        <td>{{ $property->address }}</td>
                        <td>{{ $property->city }}</td>
                        <td>{{ $property->price }}</td>
                        <td>{{ $property->type }}</td>
                        <td>{{ $property->status }}</td>
                        <td>{{ $property->created_at }}</td>
                        <td>{{ $property->updated_at }}</td>
                        <td class="buttons-wrapper">
                            <a href="{{ env('BASE_URL') }}/properties/{{ $property->id }}" class="button">Ver detalles</a>
                            <a href="" class="button">Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
</x-layout>