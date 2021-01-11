<div>
    <h1>Login</h1>
    <form action="{{ route('do-login') }}" method="post">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Login">
    </form>
    <a href="{{ route('show-register') }}">Don't have a account?</a>
</div>
