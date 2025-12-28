<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masjid Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#16a34a',
                        darkbg: '#0f172a',
                        darkcard: '#020617'
                    }
                }
            }
        }
    </script>
</head>

<body class="h-screen bg-darkbg text-gray-200">

<!-- HEADER -->
<header class="w-full py-4 text-center border-b border-white/10">
    <h1 class="text-3xl font-bold text-primary tracking-wide">
        Masjid Management System
    </h1>
    <p class="text-sm text-gray-400 mt-1">
        Organize • Manage • Serve the Ummah
    </p>
</header>

<!-- MAIN -->
<div class="flex h-[calc(100vh-120px)]">

    <!-- LEFT : MOSQUE IMAGE SLIDER -->
    <div class="hidden md:block w-1/2 relative overflow-hidden">
<div id="slider" class="flex transition-transform duration-1000 ease-in-out">
    <img src="{{ asset('build/assets/images/my_mosque.jpg') }}" alt="masjid"
        class="w-full h-full object-cover">
    <img src="https://images.pexels.com/photos/35173828/pexels-photo-35173828.jpeg"
         class="w-full h-full object-cover">

    <img src="https://images.pexels.com/photos/29584595/pexels-photo-29584595.jpeg"
         class="w-full h-full object-cover">

    <img src="https://images.pexels.com/photos/17361241/pexels-photo-17361241.jpeg"
         class="w-full h-full object-cover">
</div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="absolute bottom-10 left-10">
            <h2 class="text-2xl font-bold text-white">
                Welcome to the House of Allah
            </h2>
            <p class="text-gray-300 mt-2 max-w-md">
                A modern platform to manage prayer times, donations, events and community services.
            </p>
        </div>
    </div>

    <!-- RIGHT : AUTH PANEL -->
    <div class="w-full md:w-1/2 flex items-center justify-center bg-darkcard">
        <div class="w-full max-w-md p-8 rounded-xl shadow-2xl bg-black/30 backdrop-blur">

            <h2 class="text-2xl font-semibold text-center mb-6">
                Sign in to your account
            </h2>

            <!-- Email -->

                <form action="{{ route('user.login') }}" method="POST">
                    @csrf
            <div class="mb-4">
                <label class="block mb-1 text-gray-400">Email</label>
                <input type="email"
                name="email"
                       class="w-full px-4 py-2 rounded-lg bg-transparent border border-white/20 focus:border-primary focus:ring-primary focus:ring-1 outline-none"
                       placeholder="you@example.com">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block mb-1 text-gray-400">Password</label>
                <input type="password"
                name="password"
                       class="w-full px-4 py-2 rounded-lg bg-transparent border border-white/20 focus:border-primary focus:ring-primary focus:ring-1 outline-none"
                       placeholder="••••••••">
            </div>
            <div class="mb-4">
                <h1>
                    <a href="{{ route('send.email') }}">
                        <span class="text-md  text-primary hover:underline">Forget your password?</span>
                    </a>
                </h1>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4 mb-6">
                <button type="submit" class="w-1/2 bg-primary hover:bg-green-700 py-2 rounded-lg font-medium">
                    Sign In
                </button>
                </form>
                <a href="{{ route('auth.reg') }}" class="w-1/2 border border-primary text-primary hover:bg-primary/10 py-2 rounded-lg font-medium">
                    Sign Up
                </a>
            </div>

            <div class="text-center text-gray-400 mb-4">
                or continue with
            </div>

            <!-- Social Login -->
            <div class="flex justify-center gap-4">
                <a href="{{ route('social.redirect' , 'google') }}">
                <button class="w-1/2 flex items-center justify-center gap-2 ">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5">
                    Google
                </button>
                </a>

                <a href="{{ route('social.redirect' , 'github') }}">
                <button class="w-1/2 flex items-center justify-center gap-2 ">
                    <img src="https://www.svgrepo.com/show/512317/github-142.svg" class="w-5 h-5 invert">
                    GitHub
                </button>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="w-full py-3 text-center text-sm text-gray-500 border-t border-white/10">
    © 2025 Masjid Management System. All rights reserved.
</footer>

<!-- SLIDER SCRIPT -->
<script>
    let index = 0;
    const slider = document.getElementById('slider');
    const total = slider.children.length;

    setInterval(() => {
        index = (index + 1) % total;
        slider.style.transform = `translateX(-${index * 100}%)`;
    }, 4500);
</script>

</body>
</html>
