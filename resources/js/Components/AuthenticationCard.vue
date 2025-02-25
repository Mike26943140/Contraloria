<template>
    <div :class="{ 'dark': isDarkMode }" class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-dark-cmi">
           
        <DarkModeButton />

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-dark-cmi-2 shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-center">
                <slot name="logo" />
            </div>

            <slot />
        </div>
    </div>
</template>

<script>

import DarkModeButton from './DarkModeButton.vue';

export default {
  components: {
    DarkModeButton
  },
  data() {
    return {
      isDarkMode: false
    };
  }
};
</script>