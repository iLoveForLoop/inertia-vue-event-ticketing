<script setup>
import AdminSidebar from '../Components/Sidebars/AdminSidebar.vue'


</script>

<template>
    <div class="flex min-h-screen items-start bg-white-500 pt-6 sm:justify-start sm:pt-0 ">
        <AdminSidebar />
        <div class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg ">
            <slot />
        </div>
    </div>
</template>

<style></style>
