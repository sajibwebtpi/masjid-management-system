<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masjid Management Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gradient-to-br from-gray-950 via-gray-900 to-black text-gray-200">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-black/50 backdrop-blur-xl border-r border-white/10 hidden md:block">
        <div class="p-6 text-2xl font-bold text-green-400 tracking-wide">
            🕌 Masjid MS
        </div>

        <nav class="px-4 space-y-2 text-sm">
            <a href="#" class="block px-4 py-2 rounded-lg bg-green-600/20 text-green-400">
                Dashboard
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/5">
                Users
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/5">
                Roles & Permissions
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/5">
                Prayer Times
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/5">
                Donations
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/5">
                Reports
            </a>
        </nav>
    </aside>

    <!-- Main Area -->
    <div class="flex-1 flex flex-col">

        <!-- Topbar -->
        <header class="flex items-center justify-between px-6 py-4 bg-black/40 border-b border-white/10">
            <h1 class="text-lg font-semibold tracking-wide">
                Dashboard Overview
            </h1>

            <div class="flex items-center gap-4 text-sm">
                <span class="text-gray-400">
                    Welcome, {{ auth()->user()->name }}
                </span>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit"
        class="px-4 py-1 rounded-lg bg-red-500/10 text-red-400 hover:bg-red-500/20">
        Logout
    </button>
</form>

            </div>
        </header>

        <!-- Content -->
        <main class="p-6 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

            <!-- Card -->
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-[1.02] transition">
                <p class="text-sm text-gray-400">Total user</p>
                <h2 class="text-3xl font-bold text-green-400 mt-2">{{ $totalUser }}</h2>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-[1.02] transition">
                <p class="text-sm text-gray-400">Total Donations</p>
                <h2 class="text-3xl font-bold text-green-400 mt-2">৳ 85,000</h2>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-[1.02] transition">
                <p class="text-sm text-gray-400">Daily Prayers</p>
                <h2 class="text-3xl font-bold text-green-400 mt-2">{{ $DailyPrayers }}</h2>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:scale-[1.02] transition">
                <p class="text-sm text-gray-400">Committee Members</p>
                <h2 class="text-3xl font-bold text-green-400 mt-2">{{ $CommitteeMembers }}</h2>
            </div>

        </main>

        <!-- Footer -->


    </div>
</div>
        <footer class="text-center text-xs text-gray-500 py-4 border-t border-white/10">
            © 2025 Masjid Management System. All rights reserved.
        </footer>
</body>
</html>
