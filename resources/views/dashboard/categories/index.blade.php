@extends('templates.layouts.dashboard')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Categories</h1>
        <a href="/dashboard/categories/create" class="btn btn-primary shadow-sm mt-sm-0 mt-3">
            <i class="fa-solid fa-plus"></i> Add Categories
        </a>
    </div>

    @if (session()->has('success'))
        <div class="ms-5">
            <div class="alert alert-success alert-dismissible fade show mx-5" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close py-3" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 1rem">No.</th>
                            <th>Category Name</th>
                            <th class="text-center" style="width: 9rem">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($categories->count())
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}.</td>
                                    <td>{{ $category->name }}</td>
                                    <td class="text-center">
                                        <a href="/dashboard/categories/{{ $category->slug }}"
                                            class="btn btn-primary text-white py-0 px-2" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Detail">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning text-white py-0 px-2"
                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                        <form action="/dashboard/categories/{{ $category->slug }}" method="post"
                                            class="d-inline show_confirm">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger text-white py-0 px-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center text-bold fs-5">
                                    <strong>Sorry, The Article is Not Found.</strong>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
