<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        <script>
            (function() {
                const appearance = '{{ $appearance ?? "system" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    if (prefersDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            })();
        </script>

        {{-- Inline style to set the HTML background color based on our theme in app.css --}}
        <style>
            html {
                background-color: oklch(1 0 0);
            }

            html.dark {
                background-color: oklch(0.145 0 0);
            }
        </style>

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/app.ts', "resources/pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        <native:top-bar :title="config('app.name', 'Laravel')" />

        <native:bottom-nav>
            <native:bottom-nav-item id="dashboard" icon="dashboard" label="Dashboard" :url="route('dashboard')" :active="request()->routeIs('dashboard')" />
            <native:bottom-nav-item id="profile" icon="person" label="Profile" :url="route('profile.edit')" :active="request()->routeIs('profile.edit', 'appearance.edit', 'user-password.edit', 'two-factor.show')" />
        </native:bottom-nav>

        <native:side-nav>
            <native:side-nav-header :title="config('app.name', 'Laravel')" :subtitle="auth()->user()?->email" icon="person" />
            <native:side-nav-item id="dashboard" label="Dashboard" icon="dashboard" :url="route('dashboard')" :active="request()->routeIs('dashboard')" />
            <native:side-nav-group heading="Settings">
                <native:side-nav-item id="profile" label="Profile" icon="person" :url="route('profile.edit')" :active="request()->routeIs('profile.edit')" />
                <native:side-nav-item id="appearance" label="Appearance" icon="palette" :url="route('appearance.edit')" :active="request()->routeIs('appearance.edit')" />
                <native:side-nav-item id="password" label="Password" icon="lock" :url="route('user-password.edit')" :active="request()->routeIs('user-password.edit')" />
            </native:side-nav-group>
        </native:side-nav>

        @inertia
    </body>
</html>
