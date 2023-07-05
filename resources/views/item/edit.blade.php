@extends('layouts.app')

@section('content')

<body>
    <form action="{{ route('items.update', ['item' => $item->id])}}" method="POST">
        @csrf
        @method('put')
        <div class="row justify-content-center my-5">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Edit Items</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="itemCode" class="form-label">Item Code</label>
                        <input class="form-control @error('itemCode') is-invalid @enderror" type="text" name="itemCode" id="itemCode"
                            value="{{ $errors->any() ? old('itemCode') : $item->item_code }}" placeholder="Enter Item Code">
                        @error('itemCode')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="itemName" class="form-label">Item Name</label>
                        <input class="form-control @error('itemName') is-invalid @enderror" type="text" name="itemName" id="itemName"
                            value="{{ $errors->any() ? old('itemName') : $item->item_name }}" placeholder="Enter Item Name">
                        @error('itemName')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="itemPrice" class="form-label">Item Price</label>
                        <input class="form-control @error('itemPrice') is-invalid @enderror" type="text" name="itemPrice" id="itemPrice"
                            value="{{ $errors->any() ? old('itemPrice') : $item->item_price }}" placeholder="Enter Item Price">
                        @error('itemPrice')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="itemDescription" class="form-label">Item Description</label>
                        <input class="form-control @error('itemDescription') is-invalid @enderror" type="text" name="itemDescription" id="itemDescription"
                            value="{{ $errors->any() ? old('itemDescription') : $item->item_description }}" placeholder="Enter Item Description">
                        @error('itemDescription')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="unit" class="form-label">Unit Items</label>
                        <select name="unit" id="unit" class="form-select">
                            @php
                                $selected = "";
                                if ($errors->any())
                                    $selected = old('unit');
                            @endphp
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}" {{ $selected == $unit->id ? 'selected' : '' }}>{{ $unit->unit_code.' - '.$unit->unit_name }}</option>
                            @endforeach
                        </select>
                        @error('position')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('items.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i>Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
