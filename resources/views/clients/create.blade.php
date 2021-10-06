<form method="POST" action="{{route('clients.store')}}">
Name: <input type="text" name="client_name">
Surname: <input type="text" name="client_surname">
Username: <input type="text" name="client_username">
Company ID: <input type="text" name="client_company_id">
Image_url: <input type="text" name="client_image_url">

@csrf

<button type = "submit">Add</button>
</form>
