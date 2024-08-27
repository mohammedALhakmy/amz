<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col items-center pt-6">
        <div>
            <Link href="/">
                <img src="/images/logo/AMAZON_LOGO_DARK.png" class="h-12 fill-current text-gray-500" alt="">
            </Link>
        </div>

        <div
            class="w-full max-w-[400px] mt-6 px-6 py-4 bg-white overflow-hidden border-gray-300 border rounded-sm"
        >
            <slot />
        </div>

        <div class="w-[400px]" v-if="$page.url === '/login'">
            <div class="text-center text-sm text-gray-600 font-bold py-4">New to Amazon?</div>
            <div class="w-full border border-gray-500 bg-gray-200 text-sm font-extrabold p-2 hover:bg-gray-300 text-center">
                <Link :href="route('register')">
                    Create Your Amazom account
                </Link>
            </div>
        </div>

    </div>
</template>
