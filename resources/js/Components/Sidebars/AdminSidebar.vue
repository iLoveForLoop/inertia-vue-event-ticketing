<script setup>
import { House, Users, Calendar, Ticket } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';


</script>

<template>
    <div class="h-screen w-2/12 admin-theme text-white p-5 poppins shadow-md">
        <ul class="flex flex-col gap-9">
            <li class="flex gap-5 cursor-pointer">
                <span class="text-4xl mb-1 lobster text-purple-600">Tick!t</span>

            </li>
            <li>
                <Link class="flex gap-5 cursor-pointer" href="/admin" preserve-state>
                <House />Dashboard</Link>
            </li>
            <li>
                <Link class="flex gap-5 cursor-pointer" href="/admin/users" preserve-state>
                <Users /> Users</Link>

            </li>
            <li>
                <Link class="flex gap-5 cursor-pointer" href="/admin/events" preserve-state>
                <Calendar /> Events</Link>

            </li>
            <li>
                <Link class="flex gap-5 cursor-pointer" href="/admin/tickets" preserve-state>
                <Ticket /> Tickets</Link>

            </li>
        </ul>
    </div>
</template>


<style scoped></style>
