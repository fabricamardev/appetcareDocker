@component('layouts.elements.body')
@slot('title') Tutor @endslot
@slot('description') Inclusão de tutor  @endslot

    <form action="{{ route('tutor.store') }}" class="form-horizontal" method="post">
        @include('pages.tutor.form')
    </form>

    <a href="{{ route('tutor.index') }}" class="btn btn-xs btn-default">voltar</a>
@endcomponent