@extends('layout/admin')
@section('body')
<div class="card-footer small text-mutted">
    <h3>category</h3>
    <a href="" class="btn btn-primary">Add</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">price</th>
                <th scope="col">id</th>
                <th scope="col">View</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

            </tr>
        </thead>
        <tbody>
            @forelse($categories as $object)
            <tr>
                <th scope="row">{{ $object->id }}</th>
                <td>{{$object->name}}</td>
                <td>60000</td>
                <td>@gc</td>

                <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
                <td><a href=""><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            @empty
            <tr>
                <td>khong tim thay</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection