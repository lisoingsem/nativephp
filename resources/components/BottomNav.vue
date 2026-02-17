<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Home, LayoutGrid, Settings, User } from 'lucide-vue-next';
import { useCurrentUrl } from '@/composables/useCurrentUrl';
import { dashboard } from '@/routes';

const { isCurrentUrl } = useCurrentUrl();

const navItems = [
    { title: 'Home', href: dashboard(), icon: Home },
    { title: 'Browse', href: '#', icon: LayoutGrid },
    { title: 'Profile', href: '/profile', icon: User },
    { title: 'Settings', href: '/settings', icon: Settings },
];
</script>

<template>
    <nav class="hidden">
        <Link
            v-for="item in navItems"
            :key="item.title"
            :href="item.href"
            class="flex flex-col items-center justify-center gap-1 transition-colors"
            :class="
                isCurrentUrl(item.href)
                    ? 'text-primary'
                    : 'text-muted-foreground hover:text-foreground'
            "
        >
            <component :is="item.icon" class="h-5 w-5" />
            <span class="text-[10px] font-medium">{{ item.title }}</span>
        </Link>
    </nav>
</template>

<style scoped>
.pb-safe {
    padding-bottom: env(safe-area-inset-bottom);
}
</style>
