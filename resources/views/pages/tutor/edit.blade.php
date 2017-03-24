@component('layouts.elements.body')
@slot('title') Tutor @endslot
@slot('description') Edição de tutor  @endslot

    <form action="{{ route('tutor.update', $tutor->id) }}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('pages.tutor.form')
    </form>

    <a href="{{ route('tutor.index') }}" class="btn btn-xs btn-default">voltar</a>
@endcomponent