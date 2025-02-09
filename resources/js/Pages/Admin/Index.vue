<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { onMounted } from 'vue';
import { useAdminStore } from '@/stores/useAdminStore';

const store = useAdminStore()

onMounted(() => {
    store.setCurrentPage('Dashboard')
})

defineProps({
    qrcode: {
        type: String
    }
})




</script>

<template>
    <AdminLayout>
        <h1>Admin dashboard</h1>
        <div v-html="qrcode"></div>
    </AdminLayout>
</template>


<style></style>
