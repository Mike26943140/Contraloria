<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link :href="'/'">
        <div class="block dark:hidden">
          <img src="img/logos/conminomina.jpeg" alt="CONMINOMINA" sizes="" srcset="" class="h-24 w-auto" />
        </div>
        <div class="dark:block hidden">
          <img src="img/logos/conminomina-dark.jpeg" alt="CONMINOMINA" sizes="" srcset="" class="h-24 w-auto" />
        </div>
    </Link>
</template>

<script>
    export default {
    props: {
      isDarkMode: {
        type: Boolean,
        required: true
      }
    }
  };
</script>
