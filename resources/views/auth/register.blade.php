@extends('layouts/app')
@section('title', __('Registration'))
    
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Register</h2>
        <form>
            <div class="mb-3">
                <label for="first-name" class="form-label">{{ __('First Name') }} <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first-name" placeholder="{{ __('Enter your first name') }}" required>
            </div>

            <div class="mb-3">
                <label for="last-name" class="form-label">{{ __('Last Name') }} <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="last-name" placeholder="{{ __('Enter your last name') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email address') }} <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="{{ __('Enter your email address') }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">{{ __('Phone number') }}</label>
                <input type="tel" class="form-control" id="phone" placeholder="{{ __('Enter your phone number') }}">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
@endsection