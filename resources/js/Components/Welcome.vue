<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        {{ $page.props.user.permissions }}
    </div>
</template>
