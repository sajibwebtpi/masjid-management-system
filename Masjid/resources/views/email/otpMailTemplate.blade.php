{{-- {{ dd($emailSubject, $otp) }} --}}

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-900 text-gray-100 py-10">

<div class="max-w-xl mx-auto bg-gray-800 rounded-xl shadow-lg overflow-hidden">
    <!-- Header -->
    <div class="bg-gradient-to-r from-green-600 to-emerald-500 p-6 text-center">
        <h1 class="text-2xl font-bold text-white">
            Masjid Management System
        </h1>
        <p class="text-sm text-green-100 mt-1">
            Secure OTP Verification
        </p>
    </div>

    <!-- Body -->
    <div class="p-8">
        <p class="text-gray-300 mb-4">
            Assalamu Alaikum,
        </p>
        <p>
            Subject:{{ $emailSubject }}
        </p>

        <p class="text-gray-300 mb-6">
            You are receiving this email because you requested a one-time password (OTP) 
            to verify your account. Please use the OTP below to continue.
        </p>

        <!-- OTP Box -->
        <div class="bg-gray-900 border border-green-500 rounded-lg text-center py-6 mb-6">
            <p class="text-sm text-gray-400 mb-2">Your OTP Code</p>
            <p class="text-4xl font-bold tracking-widest text-green-400">
                {{ $otp }}
            </p>
        </div>

        <p class="text-gray-400 text-sm mb-4">
            ⏰ This OTP is valid for <strong>5 minutes</strong>.  
            Please do not share this code with anyone.
        </p>

        <p class="text-gray-400 text-sm">
            If you did not request this OTP, you can safely ignore this email.
        </p>

        <p class="mt-6 text-gray-300">
            JazakAllahu Khair,<br>
            <span class="font-semibold text-white">Masjid Management Team</span>
        </p>
    </div>

    <!-- Footer -->
    <div class="bg-gray-900 text-center text-xs text-gray-500 py-4">
        © {{ date('Y') }} Masjid Management System. All rights reserved.
    </div>
</div>
```

</body>
</html>
