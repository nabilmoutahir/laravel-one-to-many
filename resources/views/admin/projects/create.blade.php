@extends('layouts.app')

@section('content')

<div class="container">


  <form action="{{ route('admin.projects.store')}}" method="POST" class="row d-flex">
    @csrf

    <div class="col-6">


      <div class="col-12">
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

      <div class="col-12">
          <label class="form-label" for="title">Title</label>
          <input class="form-control" type="text" name="title" id="">
      </div>

      <div class="col-12">
          <label for="content">Content</label>
          <textarea class="form-control" rows="12" type="text" name="content" id="content">
          </textarea>
      </div>

      <div class="col-3 pt-3">
          <button class="btn btn-primary">Save!</button>
      </div>
    </div>
  </form>


</div>

@endsection