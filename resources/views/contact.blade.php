@section('title', 'Contact')
<x-layout>
    <h1>{{__('Contact')}}</h1>
    <main>
        <section>
            <div class="container">
                <form class="form-container" action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{__('Name')}}</label>
                        <input id="name" name="name" type="text" placeholder="{{__('Name')}}" value="{{ old('name') }}">
                        {!! $errors->first('name', '<small class="error">:message</small>') !!}                    
                    </div>
                    <div class="form-group">
                        <label for="subject">{{__('Subject')}}</label>
                        <input id="subject" name="subject" type="text" placeholder="{{__('Subject')}}" value="{{ old('subject') }}">
                        {!! $errors->first('subject', '<small class="error">:message</small>') !!}                    
                    </div>
                    <div class="form-group">
                        <label for="email">{{__('Email')}}</label>
                        <input id="email" name="email" type="email" placeholder="{{__('Email')}}" value="{{ old('email') }}">
                        {!! $errors->first('email', '<small class="error">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label for="content">{{__('Message')}}</label>
                        <textarea id="content" name="content" placeholder="{{__('Message')}}">{{ old('content') }}</textarea>
                        {!! $errors->first('content', '<small class="error">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <button type="submit">{{__('Send')}}</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</x-layout>
