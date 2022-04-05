@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Post') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('blogs.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="title" class="col-form-label">{{ __('Title') }}</label>
                                <div>
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" required autocomplete="title" autofocus>

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
                                            required autocomplete="description"> </textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <input hidden value="no-image" name="image" />
                                </div>

                                <div class="row mb-0">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
