@section('title', 'Properties')
<x-layout>
    <h1>{{__('Properties')}}</h1>
    <main>
        <div class="table-wrapper dark-table" role="region" tabindex="0">
            <table>
                <caption>Listado de Propiedades</caption>
                <thead>
                    <tr>
                        <th>{{__('id')}}</th>
                        <th>{{__('title')}}</th>
                        {{--<th>description</th>--}}
                        <th>{{__('address')}}</th>
                        <th>{{__('city')}}</th>
                        <th>{{__('price')}}</th>
                        <th>{{__('type')}}</th>
                        <th>{{__('status')}}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
                        <td>{{ $property->title }}</td>
                        {{-- <td>{{ $property->description }}</td> --}}
                        <td>{{ $property->address }}</td>
                        <td>{{ $property->city }}</td>
                        <td>{{ $property->price }}</td>
                        <td>{{ $property->type }}</td>
                        <td>{{ $property->status }}</td>
                        <td><a href="{{ env('BASE_URL') }}/properties/{{ $property->id }}" class="button">{{__('See Details')}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
</x-layout>