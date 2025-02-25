<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-cmi border border-transparent hover:border hover:border-cmi font-semibold text-xs text-white tracking-widest hover:bg-white hover:text-cmi active:bg-cmi transition ease-in-out duration-150">
        <slot />
    </button>
</template>
