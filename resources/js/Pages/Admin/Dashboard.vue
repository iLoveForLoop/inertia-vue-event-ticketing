<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { usePage } from '@inertiajs/vue3';

const { props } = usePage()
</script>

<template>
    <AdminLayout>
        <h1>Admin dashboard</h1>
        <div v-html="props.qr"></div>
    </AdminLayout>
</template>


<style></style>
