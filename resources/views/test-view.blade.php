@section('title', 'Test View')
<x-layout>
    <h1>Test view</h1>
    <main>
        <section>
            <div class="container">
                <h3>Información traída desde las variables en routes/web:</h3>
                <p><strong>{{__('Name')}}: </strong> {{ $name }}</p>
                <p><strong>{{__('LastName')}}: </strong> {{ $lastName }}</p>
                <p><strong>{{__('Age')}}: </strong> {{ $age }}</p>
            </div>
        </section>
    </main>
</x-layout> 