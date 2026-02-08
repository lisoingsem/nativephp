<template>
  <AppLayout>
    <div class="p-6 space-y-6">
      <header>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Features</h1>
        <p class="text-gray-500 mt-2">Explore native capabilities.</p>
      </header>

      <div class="space-y-4">
        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
          <div>
            <h3 class="font-semibold">Haptics</h3>
            <p class="text-xs text-gray-500">Vibrate device</p>
          </div>
          <button @click="vibrate" class="px-4 py-2 bg-gray-900 text-white rounded-lg text-sm font-medium active:bg-gray-700 transition">
            Test
          </button>
        </div>

        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
            <div>
              <h3 class="font-semibold">Notification</h3>
              <p class="text-xs text-gray-500">Show local notification</p>
            </div>
            <button @click="notify" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium active:bg-blue-700 transition">
              Send
            </button>
          </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import { router } from '@inertiajs/vue3';

const vibrate = () => {
    // In a real NativePHP app, checking for the bridge availability is good practice.
    // For now, we'll hit an endpoint to trigger it from the PHP side.
    router.post('/native/vibrate');
};

const notify = () => {
    router.post('/native/notify');
};
</script>
