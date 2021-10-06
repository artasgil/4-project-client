<form method="POST" action="{{route('clients.update',[$Client])}}">
    Name: <input type="text" name="client_name" value="{{$Client->name}}">
    Surname: <input type="text" name="client_surname" value="{{$Client->surname}}">
    Username: <input type="text" name="client_username" value="{{$Client->username}}">
    Company ID: <input type="text" name="client_company_id" value="{{$Client->company_id}}">
    Image URL: <input type="text" name="client_image_url" value="{{$Client->image_url}}">


    @csrf

    <button type = "submit">Edit</button>
    </form>
