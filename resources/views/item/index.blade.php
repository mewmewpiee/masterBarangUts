@extends('layouts.app')

@section('content')

    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-lg-6">
                <h3>Items List</h3>
            </div>
            <div class="col-lg-6">
                <a href="{{ route('items.create') }}" class="btn btn-secondary float-end">Input Items</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Item Description</th>
                            <th>Unit Items</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->item_code }}</td>
                            <td>{{ $item->item_name }}</td>
                            <td>{{ $item->item_price }}</td>
                            <td>{{ $item->item_description }}</td>
                            <td>{{ $item->unit->unit_name }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('items.edit', ['item' => $item->id]) }}" class="btn btn-outline-warning btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                    <form action="{{ route('items.destroy', ['item' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
