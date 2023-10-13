<div class="paper">
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="registration-button">Register</button>
    </form>
    <form action="index.php" method="POST">
        <input type="hidden" name="form_type" value="login">
        <button type="submit" class="form-switch-button">Switch to Login</button>
    </form>
</div>