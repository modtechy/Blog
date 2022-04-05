@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Post') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('blogs.update', $blog->id) }}">
                            {{-- {{ method_field('PUT') }} --}}
                            @method('put')
                            @csrf

                            <div class="row mb-3">
                                <label for="title" class="col-form-label">{{ __('Title') }}</label>
                                <div>
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" required autocomplete="title" autofocus value="{{ $blog->title }}">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-form-label">{{ __('Description') }}</label>
                                    <div>
                                        <textarea id="description" rows="6" class="form-control @error('description') is-invalid @enderror" name="description"
                                            required autocomplete="description">{{ $blog->description }}</textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <input hidden value="{{ $blog->image }}" name="image" />
                                </div>

                                <div class="row mb-0">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
