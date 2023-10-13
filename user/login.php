<div class="paper">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="login-username">Username:</label>
        <input type="text" id="login-username" name="login-username" required>

        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="login-password" required>

        <button type="submit" class="login-button">Login</button>
    </form>
    <form action="index.php" method="POST">
        <input type="hidden" name="form_type" value="register">
        <button type="submit" class="form-switch-button">Switch to Register</button>
    </form>
</div>