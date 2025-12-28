<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Laravel OTP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Reset Password</h2>
                <p class="text-gray-500 mt-2">Enter the OTP sent to your email and set a new password.</p>
            </div>

            @if($errors->any())
                <div class="mb-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="mb-4 p-3 bg-green-100 border-l-4 border-green-500 text-green-700 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 text-sm">
                    {{ session('error') }}
                </div>
            @endif

        <form  class="space-y-4" method="POST" action="{{ route('password.reset') }}">
            @csrf

                {{-- <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">6-Digit OTP Code</label>
                    <input type="text" name="otp" maxlength="6" required 
                        placeholder="0 0 0 0 0 0"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200 text-center text-xl tracking-[0.5em] font-bold placeholder-gray-300">
                </div> --}}
            <div>
                <input type="hidden" name="email" value="{{ $email }}">
            </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">New Password</label>
                    <input type="password" name="password" required 
                        placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required 
                        placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200">
                </div>

                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform active:scale-[0.98]">
                    Update Password
                </button>
            </form>

            <div class="mt-8 text-center">
                {{-- <p class="text-sm text-gray-600">
                    Didn't get the code? 
                    <a href="{{ route('send.otp.view') }}" class="text-blue-600 hover:underline font-medium">Resend OTP</a>
                </p> --}}
            </div>
        </div>
    </div>

</body>
</html>