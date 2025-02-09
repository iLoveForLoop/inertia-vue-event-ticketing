<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { onMounted } from 'vue';
import { useAdminStore } from '@/stores/useAdminStore';

const store = useAdminStore()

onMounted(() => {
    store.setCurrentPage('Tickets')
})
</script>

<template>
    <AdminLayout>

    </AdminLayout>
</template>

<style></style>
