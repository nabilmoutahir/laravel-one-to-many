@extends('layouts.app')

@section('content')

<div class="container">






  <label for="type_id" class="form-label">Type</label>
  <select name="type_id" id="type_id" class="form-select @error('type_id') is-invalid @enderror">
    <option value="">Non categorizzato</option>
    @foreach ($types as $type)
      <option value="{{ $type->id }}" @if (old('type_id') == $type->id) selected @endif>
        {{ $type->label }}
      </option>
    @endforeach
  </select>
  @error('type_id')
    <div class="invalid-feedback">
      {{-- {{ $message }} --}}
    </div>
  @enderror







  
</div>

@endsection