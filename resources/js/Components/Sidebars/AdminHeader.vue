<script setup>
import { UserRound } from 'lucide-vue-next';
import { useAdminStore } from '@/stores/useAdminStore';
import { computed } from 'vue';

const store = useAdminStore()



</script>

<template>
    <div class="flex justify-between items-center min-w-full admin-theme p-6 rounded-md shadow-lg">
        <h1 class="text-xl text-white">{{ store.currentPage }}</h1>
        <UserRound color="white" size="27" />
    </div>
</template>

<style scoped></style>
