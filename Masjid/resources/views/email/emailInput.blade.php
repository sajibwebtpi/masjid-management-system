<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">
            Forgot Password
        </h2>

        <!-- success message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- error message -->
        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('send.otp') }}" method="POST">
            @csrf

            <label class="block mb-2 text-sm font-medium text-gray-700">
                Email Address
            </label>

            <input 
                type="email" 
                name="email"
                required
                placeholder="Enter your email"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >

            <button 
                type="submit"
                class="w-full mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Send OTP
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-4">
            Remember password?
            <a href="/login" class="text-blue-600 hover:underline">
                Login
            </a>
        </p>
    </div>

</body>
</html>
