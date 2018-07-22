@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Categories: 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Materials: 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Register Users: 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Visit today: 0</span></p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <a href="#" class="btn btn-block btn-default">Add new Category</a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">First Categories</h4>
                        <p class="list-group-item-text">Number of Materials</p>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="#" class="btn btn-block btn-default">Add new Material</a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">First Materials</h4>
                        <p class="list-group-item-text">Categorie</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection