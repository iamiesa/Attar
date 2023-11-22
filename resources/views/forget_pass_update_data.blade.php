<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Update User FORM</h2>
                @foreach ($data as $item)
                <form action="{{ route('update_user_password', ['user_id' => $item['user_id']]) }}" method="POST" class="needs-validation" novalidate>
                    @csrf      

                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" value="{{ $item['name'] }}" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="contactno">Contact-no:</label>
                        <input type="text" id="contactno" name="contact"  value="{{ $item['contact'] }}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email-id:</label>
                        <input type="email" id="email" name="email"  value="{{ $item['email'] }}"  class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    @endforeach

                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>
