<table>
    <thead>
    <tr>
        <td>#</td>
        <td>Loja</td>
        <td>Ações</td>
    </tr>
    </thead>
    <tbody>
    @foreach($stores as $store)
        <tr>
            <td>{{$store->id}}</td>
            <td>{{$store->name}}</td>
            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>

{{$stores->links()}}
