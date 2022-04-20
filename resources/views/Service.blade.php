@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="card-body">
    <form>
        <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control" id="exampleFormControlFile1">
        </div>
      </form>
</div>

@endsection