@extends('layout2.app')

@section('content')
<div class="wrapper">
    <div class="card text-center" style="width:800px; margin-top:-200px">
        <div class="card-header">Add a Place of residence</div>
        <div class="card-body">
            <form action="/places" method="POST">
                @csrf
            <div class="form-group row">
                <label for="place" class="col-lg-4 col-form-label">Residence name</label>
                <div class="col-lg-8">
                    <input type="text" name="place" class="form-control" placeholder="Residence name">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="place" class="col-lg-4 col-form-label">Resident/Non-resident</label>
                </div>
                <div class="col-sm">
                        <input class="form-check-input" type="radio" name="radio" id="1" value="1">
                        <label class="form-check-label" for="radio">Resident</label>
                </div>
                <div class="col-sm">
                    <input class="form-check-input" type="radio" name="radio" id="2" value="2">
                        <label class="form-check-label" for="radio">Non-Resident</label>
                </div>
        </div>
        
            <button class="btn btn-primary">ADD</button>
        </form>
        </div>
    </div>
</div>
@endsection