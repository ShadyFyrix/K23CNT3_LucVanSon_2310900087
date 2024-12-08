<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <h2 class="text-center">Reservation Request</h2>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Reservation Form -->
    <form method="POST" action="{{ route('reservation.submit') }}">
        @csrf

        <!-- General Information Section -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="arrival_date" class="form-label">Arrival Date</label>
                <input type="text" class="form-control" id="arrival_date" name="arrival_date" value="{{ old('arrival_date') }}">
                @error('arrival_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <div class="col-md-6 mb-3">
                <label for="nights" class="form-label">Nights</label>
                <input type="number" class="form-control" id="nights" name="nights" value="{{ old('nights') }}">
                @error('nights') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="adults" class="form-label">Adults</label>
                <input type="number" class="form-control" id="adults" name="adults" value="{{ old('adults', 1) }}">
                @error('adults') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <div class="col-md-6 mb-3">
                <label for="children" class="form-label">Children</label>
                <input type="number" class="form-control" id="children" name="children" value="{{ old('children', 0) }}">
                @error('children') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    
        <!-- Preferences Section -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="room_type" class="form-label">Room Type</label>
                <select class="form-control" id="room_type" name="room_type">
                    <option value="Standard" {{ old('room_type') == 'Standard' ? 'selected' : '' }}>Standard</option>
                    <option value="Business" {{ old('room_type') == 'Business' ? 'selected' : '' }}>Business</option>
                    <option value="Suite" {{ old('room_type') == 'Suite' ? 'selected' : '' }}>Suite</option>
                </select>
                @error('room_type') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <div class="col-md-6 mb-3">
                <label for="bed_type" class="form-label">Bed Type</label>
                <select class="form-control" id="bed_type" name="bed_type">
                    <option value="King" {{ old('bed_type') == 'King' ? 'selected' : '' }}>King</option>
                    <option value="Double Double" {{ old('bed_type') == 'Double Double' ? 'selected' : '' }}>Double Double</option>
                </select>
                @error('bed_type') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="smoking" class="form-label">Smoking</label>
                <input type="checkbox" id="smoking" name="smoking" {{ old('smoking') ? 'checked' : '' }}>
                @error('smoking') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    
        <!-- Contact Information Section -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3">Submit Reservation</button>
        <button type="reset" class="btn btn-secondary">Clear</button>

        <!-- Validation Error Messages -->
        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>    
</div>

<!-- Bootstrap JS and dependencies (optional, for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
