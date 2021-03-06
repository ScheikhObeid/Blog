<?php require __DIR__ . "/../post/layout/header.php";?>
<?php if (!empty($error)): ?>
  <p>
    Die Kombination aus Benutzername und Passwort ist falsch.
  </p>
<?php endif; ?>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <h3 class="text-2xl font-bold text-center">Login to your account</h3>
        <form  method="POST" action="login">
            <div class="mt-4">
                <div>
                    <label class="block" for="username">Username<label>
                            <input type="text" name="username" placeholder="Username"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" name="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex items-baseline justify-between">
                <input type="submit" value="Einloggen" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">
                    <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . "/../post/layout/footer.php" ?>