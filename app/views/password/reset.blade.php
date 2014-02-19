<form action="{{ action('RemindersController@postReset') }}" method="POST">
    <input type="hidden" name="token" value="{{ $token }}">
    Email:<input type="email" name="email">
    </br>
    Password:<input type="password" name="password">
    </br>
    Password Confirm:<input type="password" name="password_confirmation">
    </br>
    <input type="submit" value="Reset Password">
</form>