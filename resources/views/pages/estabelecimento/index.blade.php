@component('layouts.elements.body')
@slot('title') Estabelecimento @endslot
@slot('description') Administração de Estabelecimentos @endslot

<a href="{{ route('estabelecimento.create') }}" class="btn btn-default">Adicionar</a>
           
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Razão Social</th>
            <th>Endereço</th>
            <th>Responsável Técnico</th>
            <th>CRMV</th>
            <th>Site</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estabelecimentos as $estabelecimento)
        <tr>
            <td>{{ $estabelecimento->id }}</td>
            <td>{{ $estabelecimento->razao_social }}</td>
            <td>{{ $estabelecimento->endereco }}</td>
            <td>{{ $estabelecimento->responsavel_tecnico }}</td>
            <td>{{ $estabelecimento->crmv }}</td>
            <td>{{ $estabelecimento->site }}</td>
            <td>{{ $estabelecimento->email }}</td>
            <td>{{ $estabelecimento->telefone }}</td>
            <td>
                <!--a href="{{ route('estabelecimento.show', $estabelecimento->id) }}" class="btn btn-default btn-xs">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a-->
                <a href="{{ route('estabelecimento.edit', $estabelecimento->id) }}" class="btn btn-xs btn-default">editar</a>
                <form action="{{ route('estabelecimento.destroy', $estabelecimento->id) }}" class="form-horizontal" method="post" style="display: inline-block">
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