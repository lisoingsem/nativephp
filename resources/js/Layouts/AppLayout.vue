<template>
  <div class="flex flex-col h-screen bg-gray-50 text-gray-900 font-sans">
    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto pb-safe pt-safe">
      <slot />
    </main>

    <!-- Bottom Navigation -->
    <nav class="bg-white border-t border-gray-200 pb-safe">
      <div class="flex justify-around items-center h-16">
        <Link href="/" class="flex flex-col items-center justify-center w-full h-full text-gray-500 hover:text-blue-600 focus:text-blue-600" :class="{ 'text-blue-600': $page.url === '/' }">
          <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
          <span class="text-xs">Home</span>
        </Link>
        <Link href="/features" class="flex flex-col items-center justify-center w-full h-full text-gray-500 hover:text-blue-600 focus:text-blue-600" :class="{ 'text-blue-600': $page.url === '/features' }">
          <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          <span class="text-xs">Features</span>
        </Link>
      </div>
    </nav>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
