@extends ('layout')

@section('content')
<h1>Edit restaurant</h1>
<div class="col-md-6">
    <form method="post" action="/edit">
    @csrf
        <div class="form-group">
            <label>ID</label>
            <input type="number" name="id" value="{{$data->id}}" class="form-control" placeholder="Enter id">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{$data->email}}" class="form-control" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label>Adress</label>
            <input type="text" name="adress" value="{{$data->adress}}"class="form-control" placeholder="Enter adress">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop