<script setup lang="ts">
import Hero from '@/Components/Dashboard/Hero.vue';
import Jobs from '@/Components/Dashboard/Jobs.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps<{
    jobs: Object
}>();
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <!-- Hero -->
        <Hero />
        <Jobs :jobs="jobs" />

        <!-- Job List -->
        <div class="bg-white">
            <div class="container py-5">
                <!-- TODO: Add job list here -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>
