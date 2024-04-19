@section('title', 'Contact')
<x-layout>
    <h1>Contact</h1>
    <main>
        <section>
            <div class="container">
                <form class="form-container" action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" placeholder="Name" value="test test">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input id="subject" name="subject" type="text" placeholder="Subject" value="test test">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="Email" value="test@test.com">
                    </div>
                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea id="content" name="content" placeholder="Message">test test</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Send</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</x-layout>
