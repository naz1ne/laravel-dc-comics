@extends('layouts.app')

@section('content')

<div class="container mb-5">
      <h1 class="py-5">Create a new Comics</h1>
      @include('partials.errors')
      <form action="{{route('comics.store')}}" method="post" class="card p-3">
            @csrf

            <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="titleHlper" value="{{old('title')}}">
                  <small id="titleHlper" class="text-muted">Add the comic title here</small>
            </div>
            <div class="mb-3">
                  <label for="thumb" class="form-label">comic Image</label>
                  <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="" aria-describedby="thumbHlper" value="{{old('thumb')}}">
                  <small id="thumbHlper" class="text-muted">Add the comic thumb here</small>
            </div>
            <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4">{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                  <label for="series" class="form-label">Series</label>
                  <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="" aria-describedby="seriesHlper" value="{{old('series')}}">
                  <small id="seriesHlper" class="text-muted">Add the comic series here</small>
            </div>
            <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="" aria-describedby="priceHlper" value="{{old('price')}}">
                  <small id="priceHlper" class="text-muted">Add the comic price here</small>
            </div>
            <div class="mb-3">
                  <label for="sale_date" class="form-label">Sale Date</label>
                  <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="" aria-describedby="sale_dateHlper" value="{{old('sale_date')}}">
                  <small id="sale_dateHlper" class="text-muted">Add the comic sale date here</small>
            </div>
            <div class="mb-3">
                  <label for="type" class="form-label">Type</label>
                  <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="" aria-describedby="typeHlper" value="{{old('type')}}">
                  <small id="typeHlper" class="text-muted">Add the comic type here</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

      </form>
</div>

@endsection