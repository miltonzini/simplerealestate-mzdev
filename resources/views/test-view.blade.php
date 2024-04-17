@section('title', 'Test View')
<x-layout>
    <h1>Test view</h1>
    <main>
        <section>
            <div class="container">
                <h3>Información traída desde las variables en routes/web:</h3>
                <p><strong>Nombre: </strong> {{ $name }}</p>
                <p><strong>Apellido: </strong> {{ $lastName }}</p>
                <p><strong>Edad: </strong> {{ $age }}</p>
            </div>
        </section>
    </main>
</x-layout> 