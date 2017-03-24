@component('layouts.elements.body')
@slot('title') Tutor @endslot
@slot('description') Administdação de Tutores @endslot

<a href="{{ route('tutor.create') }}" class="btn btn-default">Adicionar</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Endereço</th>
            <th>Numero</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tutors as $tutor)
        <tr>
            <td>{{ $tutor->id }}</td>
            <td>{{ $tutor->nome }}</td>
            <td>{{ $tutor->sobrenome }}</td>
            <td>{{ $tutor->endereco }}</td>
            <td>{{ $tutor->numero }}</td>
            <td>{{ $tutor->bairro }}</td>
            <td>{{ $tutor->cidade }}</td>
            <td>{{ $tutor->telefone }}</td>
            <td>
                <!--a href="{{ route('tutor.show', $tutor->id) }}" class="btn btn-default btn-xs">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a-->
                <a href="{{ route('tutor.edit', $tutor->id) }}" class="btn btn-xs btn-default">editar</a>
                <form action="{{ route('tutor.destroy', $tutor->id) }}" class="form-horizontal" method="post" style="display: inline-block">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="remover" class="btn btn-xs btn-default">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endcomponent