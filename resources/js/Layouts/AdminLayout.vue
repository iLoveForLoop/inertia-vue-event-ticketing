<script setup>
import AdminSidebar from '../Components/Sidebars/AdminSidebar.vue'
import AdminHeader from '@/Components/Sidebars/AdminHeader.vue';
import { ref } from 'vue';

const currentPage = ref('Dashboard')

</script>

<template>
    <div class="flex min-h-screen items-start bg-white-500 pt-6 sm:justify-start sm:pt-0 ">
        <AdminSidebar />
        <div class="flex flex-col w-full p-4">
            <AdminHeader />
            <slot />
        </div>
    </div>
</template>

<style></style>
