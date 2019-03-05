@extends('admin.admin_page')
@section('content')
<!-- / Add New Post Form -->

<div class=" col-md-12">
    <form method="post" action="/admin/store">
        @csrf
        <div class="form-group">
            <label for="name">Vardas</label>
            <input type="text" class="form-control" id="name"  placeholder="Vardas" name="name">
        </div>
        <div class="form-group">
            <label for="lastname">Pavardė</label>
                <input type="text" class="form-control" id="lastname" placeholder="Pavardė" name="lastName">
        </div>
        <div class="form-group">
            <label for="special">Specializacija</label>
                <input type="text" class="form-control" id="special" placeholder="Specializacija" name="specialization">
        </div>
        <div class="form-group">
            <label for="picture">Nuotrauka</label>
            <input type="text" class="form-control" id="picture" name="picture" placeholder="Nuotraukos URL">
        </div>
        <div class="form-group">
            <label for="serviceName">Serviso pavadinimas</label>
            <input type="text" class="form-control" id="serviceName" aria-describedby="emailHelp" placeholder="Serviso pavadinimas" name="serviceName">
        </div>
        <div class="form-group">
            <label for="city">Miestas</label>
            <input type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="Mietsas" name="city">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
