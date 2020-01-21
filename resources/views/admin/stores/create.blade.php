<h1>Criar Loja</h1>

<form action="/admin/stores/store" method="post">
    <div>
        <label for="name">Loja</label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="description">Descrição</label>
        <input type="text" name="description">
    </div>

    <div>
        <label for="phone>Telefone</label>
    <input type=" text" name="phone">
    </div>

    <div>
        <label for="mobile_phone">WhatsApp</label>
        <input type="text" name="mobile_phone">
    </div>

    <div>
        <label for="slug">Slug</label>
        <input type="text" name="slug">
    </div>

    <div>
        <label for="user">Usuario</label>
        <select name="user" id="user">
            @foreach($users  as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Criar Loja</button>
    </div>

</form>
