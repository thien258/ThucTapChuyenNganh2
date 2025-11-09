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
            <tr>
                <th scope="row">1</th>
                <td>GUCCI</td>
                <td>60000</td>
                <td>@gc</td>

                <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
                <td><a href=""><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Versace</td>
                <td>500000</td>
                <td>@ve</td>
                <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
                <td><a href=""><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Chanel</td>
                <td>123456</td>
                <td>@cn</td>
                <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
                <td><a href=""><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection