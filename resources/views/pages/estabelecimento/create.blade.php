@component('layouts.elements.body')
@slot('title') Estabelecimento @endslot
@slot('description') Inclusão de estabelecimento  @endslot

    <form action="{{ route('estabelecimento.store') }}" class="form-horizontal" method="post">
        @include('pages.estabelecimento.form')
    </form>

    <a href="{{ route('estabelecimento.index') }}" class="btn btn-xs btn-default">voltar</a>
@endcomponent