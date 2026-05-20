<link rel="stylesheet" href="reset.css"/>
<link rel="stylesheet" href="login.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&family=Montserrat:wght@800&display=swap" rel="stylesheet">
<body>
    <form method="POST" action="loginProcess.php">
        <fieldset>
            <h1 id="title">Login</h1>
            <p class="typeBox">
                <label>Email</label><br/>
                <input type="email" name="email" placeholder="Email" required>
            </p>
            <p class="typeBox">
                <label>Password</label><br/>
                <input type="password" name="password" placeholder="Password" required>
            </p>
            <?php if(isset($_GET['error'])): ?>
                <p style="color: red;">Error: Invalid email or password.</p><br/>
            <?php endif; ?>
            <button type="submit">Login</button>
            <p class="form-footer">
                <a href="index.php">Return to Home</a>
            </p>
        </fieldset>
    </form>
</body>
