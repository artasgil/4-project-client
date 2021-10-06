<h1>Clients index</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Company ID</th>
        <th>Image URL</th>

    </tr>
    @foreach ($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td><a href="{{route('clients.show', [$client])}}">{{ $client->name }} </a></td>
            <td>{{ $client->surname }}</td>
            <td>{{ $client->username }}</td>
            <td>{{ $client->company_id }}</td>
            <td><a href="{{ $client->image_url }}"> {{ $client->image_url }}</a></td>
            <td><a href="{{route('clients.edit',[$client])}}">Edit</a></td>
            <td>
                <form method="POST" action="{{route('clients.destroy', [$client])}}">
                @csrf
                <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
    @endforeach
</table>
