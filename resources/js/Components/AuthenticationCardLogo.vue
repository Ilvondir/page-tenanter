<script setup>
import {Link} from '@inertiajs/vue3';
</script>

<template>
    <Link :href="'/'">
        <img :src="$page.props.full_size_logo_url" alt="Logo" class="w-64">
    </Link>
</template>
