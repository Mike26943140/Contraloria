<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link :href="'/'">
        <img src="img/logos/logo-menu.png" alt="CONMINOMINA" sizes="" srcset="" class="lg:h-12 md:h-12 sm:h-4" />
    </Link>
</template>

<script>
    export default {
    components: {
      DarkModeButton
    }
  };

  import DarkModeButton from '../../Components/DarkModeButton.vue';
</script>