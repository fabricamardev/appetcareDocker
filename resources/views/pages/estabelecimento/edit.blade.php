@component('layouts.elements.body')
@slot('title') Estabelecimento @endslot
@slot('description') Edição de estabelecimentos @endslot

    <form action="{{ route('estabelecimento.update', $estabelecimento->id) }}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('pages.estabelecimento.form')
    </form>

    <a href="{{ route('estabelecimento.index') }}" class="btn btn-xs btn-default">voltar</a>
@endcomponent