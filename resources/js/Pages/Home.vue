<template>
  <AppLayout>
    <div class="p-6 space-y-6">
      <header>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">NativePHP</h1>
        <p class="text-gray-500 mt-2">Build native apps with PHP.</p>
      </header>

      <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
        <h2 class="text-xl font-semibold mb-2">Welcome Home</h2>
        <p class="text-gray-600 text-sm leading-relaxed">
          This is your new mobile app, running on NativePHP with Vue and Inertia.
          Try editing this file in <code>resources/js/Pages/Home.vue</code> to see changes instantly.
        </p>
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div class="bg-blue-50 p-4 rounded-xl">
          <div class="text-blue-600 font-bold text-lg">Fast</div>
          <div class="text-blue-400 text-xs">Performance</div>
        </div>
        <div class="bg-purple-50 p-4 rounded-xl">
          <div class="text-purple-600 font-bold text-lg">Native</div>
          <div class="text-purple-400 text-xs">Capabilities</div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>
