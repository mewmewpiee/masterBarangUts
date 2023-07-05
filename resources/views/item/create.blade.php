@extends('layouts.app')

@section('content')

<body>
    <form action="{{ route('items.store') }}" class="needs-validation" method="POST" novalidate="">
        @csrf
        <div class="row justify-content-center my-5">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Input Items</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="itemCode" class="form-label">Item Code</label>
                        <input class="form-control @error('itemCode') is-invalid @enderror" type="text"
                            name="itemCode" id="itemCode" value="{{ old('itemCode') }}" placeholder="Enter Item Code"
                            required="">
                        @error('itemCode')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="itemName" class="form-label">Item Name</label>
                        <input class="form-control  @error('itemName') is-invalid @enderror" type="text"
                            name="itemName" id="itemName" value="{{ old('itemName') }}" placeholder="Enter Item Name"
                            required="">
                        @error('itemName')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="itemPrice" class="form-label">Item Price</label>
                        <input class="form-control  @error('itemPrice') is-invalid @enderror" type="number"
                            name="itemPrice" id="itemPrice" value="{{ old('itemPrice') }}"
                            placeholder="Enter Item Price" required="">
                        @error('itemPrice')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="itemDescription" class="form-label">Item Description</label>
                        <input class="form-control  @error('itemDescription') is-invalid @enderror" type="text"
                            name="itemDescription" id="itemDescription" value="{{ old('itemDescription') }}"
                            placeholder="Enter Item Description" required="">
                        @error('itemDescription')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="unit" class="form-label">Unit Items</label>
                        <select name="unit" id="unit" class="form-select">
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}" {{ old('unit') == $unit->id ? 'selected' : '' }}>
                                    {{ $unit->unit_code . ' - ' . $unit->unit_name }}</option>
                            @endforeach
                        </select>
                        @error('unit')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('items.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i>Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
