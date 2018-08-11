@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Create Category @endslot
            @slot('parent') Main @endslot
            @slot('active') Categories @endslot


        @endcomponent

        <hr/>

        <form action="{{route('admin.category.store')}}" class="form-horizontal" method="post">
            {{csrf_field()}}
        </form>

    </div>

@endsection