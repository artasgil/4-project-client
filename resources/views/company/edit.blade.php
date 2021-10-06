<form method="POST" action="{{route('company.update',[$Company])}}">
    Company name: <input type="text" name="company_name" value="{{$Company->name}}">
    Company type: <input type="text" name="company_type" value="{{$Company->type}}">
    Company description: <input type="text" name="company_description" value="{{$Company->description}}">



    @csrf

    <button type = "submit">Edit</button>
    </form>
