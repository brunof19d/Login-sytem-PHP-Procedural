<?php require __DIR__ . '/../src/controller/make-login.php'; ?>

<div class="container mt-5 border bg-light">
    <form method="POST" class="m-5 p-5">

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="email@email.com" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="********" required>
        </div>

        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>

    </form>
</div>
