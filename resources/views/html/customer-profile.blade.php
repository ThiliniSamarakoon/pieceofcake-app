<!DOCTYPE html>
<html>
<head>
    <title>Customer Profile</title>
    <link rel="stylesheet" href="{{ asset('css/styles_customer-profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
<body>
    <div class="profile-form">
        <div class="profile-icon">
             <i class="fas fa-user-circle"></i>
        </div>
        <form action="{{ route('customer.profile.submit') }}" method="post">
          @csrf
            <div class="form-group">
                <label for="email">Enter your Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your Email..."  required>
            </div>
            <button type="submit">Enter</button>
        </form>
    </div>

</body>
</html>
