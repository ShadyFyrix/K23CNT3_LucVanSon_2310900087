<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 my-3">
                <h1>Registration Form</h1>
                @if (isset($data))
                    <div class="alert alert-success">
                        <h4>Registration Successful!</h4>
                        <p>Here is the data you submitted:</p>
                        <ul>
                            @foreach ($data as $key => $value)
                                <li><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ is_array($value) ? implode(', ', $value) : $value }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('registration.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID:</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}">
                        @error('user_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                        <small class="form-text text-muted">Optional.</small>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country:</label>
                        <select class="form-control" id="country" name="country">
                            <option value="">Please select a country</option>
                            <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
                            <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                            <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>UK</option>
                        </select>
                        @error('country')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="zip_code" class="form-label">ZIP Code:</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ old('zip_code') }}">
                        @error('zip_code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sex" class="form-label">Sex:</label><br>
                        <input type="radio" name="sex" value="Male" {{ old('sex') == 'Male' ? 'checked' : '' }}> Male
                        <input type="radio" name="sex" value="Female" {{ old('sex') == 'Female' ? 'checked' : '' }}> Female
                        @error('sex')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="language" class="form-label">Language:</label><br>
                        <input type="checkbox" name="language[]" value="English" {{ is_array(old('language')) && in_array('English', old('language')) ? 'checked' : '' }}> English
                        <input type="checkbox" name="language[]" value="Non English" {{ is_array(old('language')) && in_array('Non English', old('language')) ? 'checked' : '' }}> Non English
                        @error('language')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="about" class="form-label">About:</label>
                        <textarea class="form-control" id="about" name="about">{{ old('about') }}</textarea>
                        <small class="form-text text-muted">Optional.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
