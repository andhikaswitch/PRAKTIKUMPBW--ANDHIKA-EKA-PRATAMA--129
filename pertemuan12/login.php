<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="src/output.css" rel="stylesheet">
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen text-gray-800">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md border border-gray-100">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Masuk kedalam sistem</h2>
        
        <?php if (isset($_GET['message'])): ?>
            <div class="bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4 mb-6 rounded-md text-sm">
                <?= htmlspecialchars($_GET['message']) ?>
            </div>
        <?php endif; ?>

        <form method="post" action="proses_login.php" class="space-y-5">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama pengguna :</label>
                <input type="text" name="username" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kata sandi :</label>
                <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" required>
            </div>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
                Login
            </button>
        </form>
    </div>

</body>
</html>