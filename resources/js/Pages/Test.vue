<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue"


const props = defineProps({
    events: {
        type: Array

    }
})

</script>

<template>
    <AdminLayout>
        {{ $page.props.global }}
        <p v-for="event in events" :key="event.id">
            {{ event.name }}
        </p>
    </AdminLayout>

</template>

<style></style>
