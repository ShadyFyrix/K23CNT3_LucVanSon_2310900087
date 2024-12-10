<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .card {
            text-align: center; /* Center-align all text inside the card */
        }
        .form-group {
            text-align: left; /* Optional: Align input labels to the left */
        }
    </style>
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 my-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('session.submit') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="fullName">FullName:</label>
                                <input type="text" name="fullName" id="fullName" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" id="password">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            @if(Session::has('error'))
                            <div class="alert alert-danger mt-3">
                                {{ Session::get('error') }}
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

