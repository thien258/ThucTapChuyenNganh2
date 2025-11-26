@extends('layout/admin')
@section('body')
<div class="card-footer small text-mutted">
    <h3>category</h3>
    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">last</th>
                <th scope="col">handle</th>
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
                <td>otto</td>
                <td>@gc</td>

                <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
   <td><a href=" {{ route('admin.category.edit',['category'=>$object->id]) }}  "><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
                <td><a href="{{route('admin.category.destroy',['category'=>$object->id])}}" title="Delete {{$object->name}}" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('category-delete-{{ $object->id }}').submit() :0;" class="btn btn-danger"><i class="far fa-trash-alt"></i>
                              <form action="{{ route('admin.category.destroy', ['category' => $object->id]) }}" method="post" id="category-delete-{{ $object->id }}">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                              </form>
                          </a></td>
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