<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login</h2>

        <!-- Social Login -->
        <div class="flex flex-col space-y-3 mb-5">
            <a href="{{ route('social.redirect' , 'github') }}" class="flex items-center justify-center border rounded-lg py-2 hover:bg-gray-100 transition">
                <i class="fab fa-github mr-2"></i> Login with GitHub
            </a>
            <a href="{{ route('social.redirect' , 'google') }}" class="flex items-center justify-center border rounded-lg py-2 hover:bg-gray-100 transition">
                <i class="fab fa-google mr-2"></i> Login with Google
            </a>
        </div>

        <div class="text-center text-gray-400 mb-5">OR</div>

        <!-- Email/Password Login -->
        <form action="{{ route('user.login') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Email</label>
                <input type="email" name="email" placeholder="example@gmail.com"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700">Password</label>
                <input type="password" name="password" placeholder="********"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <a href="{{ route('send.email') }}">
                    <span class="text-md text-blue-500 hover:underline">Forgot your password?</span>
                </a>
            </div>
            <div class="flex items-center">
                <input type="checkbox" name="remember" class="mr-2">
                <label class="text-gray-700 font-medium">Remember Me</label>
            </div>

            <div>
                <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors">
                    Login
                </button>
            </div>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Don't have an account? <a href="{{ route('auth.reg') }}" class="text-blue-500 hover:underline">Register</a>
        </p>
    </div>

</body>
</html>
