@section('title', 'Home')
<x-layout>
    <h1>Home</h1>
    <main>
        <section>
            <div class="container">
                <h3>Links internos (Público):</p>
                <ul>
                    <li><a href="{{ route('home') }}" class="button button-sm">Home</a></li>
                    <li><a href="{{ route('about') }}" class="button button-sm">About</a></li>
                    <li><a href="{{ route('properties') }}" class="button button-sm">Properties</a></li>
                    <li><a href="{{ route('contact') }}" class="button button-sm">Contact</a></li>
                    <li><a href="{{ route('login') }}" class="button button-sm">Login</a></li>
                </ul>


                <h3>Links internos (Admin):</p>
                <ul>
                    <li><a href="{{ route('dashboard') }}" class="button button-sm">Admin Dashboard</a></li>
                    <li><a href="{{ route('admin-properties') }}" class="button button-sm">Properties List</a></li>
                </ul>

                <h3>Rutas de prueba:</p>
                <ul>
                    <li><a href="{{ route('test-view') }}" class="button button-sm">Test view: "/test-view"</a></li>
                    <li><a href="{{ route('test-string') }}" class="button button-sm">Test String: "/test-string/{string}"</a></li>
                </ul>
            </div>
        </section>
    </main>
</x-layout>