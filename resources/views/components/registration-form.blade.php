<div>
    <!-- Be present above all else. - Naval Ravikant -->
</div><h1>Register</h1>
<form action="{{ route('create-registration') }}" method="post">
    @csrf
    <div>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname">
    </div>
    <div>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password_conformation">Confirm Password</label>
        <input type="password" name="password_conformation" id="password_conformation">
    </div>
    <input type="submit" value="Register">
</form>
<a href="{{ route('show-login') }}">Already have a account?</a>
