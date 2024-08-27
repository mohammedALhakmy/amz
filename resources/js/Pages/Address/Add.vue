<template>
    <Head title="Address"/>
    <AuthenticatedLayout>
        <div class="mt-8"></div>
        <div class="w-[500px] mx-auto text-2xl font-extrabold">
            <div class="">Add a new Address</div>
            <form action="">
                <div class="text-[15px] -mb-1.5 font-extrabold">Country</div>
            </form>
        </div>
    </AuthenticatedLayout>

</template>

<script setup>
import PlusIcon from 'vue-material-design-icons/Plus.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link } from '@inertiajs/vue3';
import {toRefs} from "vue";
import MapMarkerOutlineIcon from "vue-material-design-icons/MapMarkerOutline.vue";
const props =  defineProps({product:Object});
const { product } = toRefs(props)
</script>

<style scoped>

</style>
