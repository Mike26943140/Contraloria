<template>
    <div class="bg-white dark:bg-dark-cmi-2 text-cmi dark:text-white flex justify-between items-center px-4 py-2 shadow-lg fixed top-0 w-full z-10">
        <div class="flex justify-start items-center">
            <div class="hidden dark:block">
                <DarkLogoMenu />
            </div>
            <div class="block dark:hidden">
                <LogoMenu />
            </div>
            <button @click="toggleVerticalMenu" class="p-2 ml-4">
                <svg viewBox="0 0 24 24" width="25" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier"> 
                        <path d="M4 18L20 18" class="stroke-cmi dark:stroke-white" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M4 12L20 12" class="stroke-cmi dark:stroke-white" stroke-width="2" stroke-linecap="round"></path> 
                        <path d="M4 6L20 6" class="stroke-cmi dark:stroke-white" stroke-width="2" stroke-linecap="round"></path> 
                    </g>
                </svg>
            </button>
        </div>
        <div class="flex items-center">
            <DarkModeButton />

            <button class="p-2">
                <svg viewBox="0 0 24 24" width="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M10.88 2.603A.75.75 0 0 1 11.614 2h.77a.75.75 0 0 1 .735.603l.143.712a1.5 1.5 0 0 0 .75 1.02l.3.165a5.586 5.586 0 0 1 3.239 4.47l.54 4.864c.101.905.564 1.732 1.283 2.291l.354.275a1.5 1.5 0 0 1 .534 1.548L20.25 18a1.32 1.32 0 0 1-1.281 1H15a3 3 0 1 1-6 0H5.03a1.32 1.32 0 0 1-1.28-1l-.013-.052A1.5 1.5 0 0 1 4.27 16.4l.354-.275a3.375 3.375 0 0 0 1.282-2.291l.54-4.865A5.586 5.586 0 0 1 9.688 4.5l.3-.164a1.5 1.5 0 0 0 .75-1.021l.142-.712z" class="fill-cmi dark:fill-white"></path>
                    </g>
                </svg>
            </button>
            <!-- <button class="p-2">
                {{$page.props.auth.user.name}}
            </button> -->

            <div class="relative inline-block text-left">
                <div>
                    <button @click="toggleDropdown" class="inline-flex justify-center w-full rounded-md border-0 p-2 bg-white text-sm font-medium text-cmi">
                        {{ $page.props.auth.user.name }} {{ $page.props.auth.user.lastname }}
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    </div>
                    <div v-if="isOpen" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Perfil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" @click="$inertia.post(route('logout'))">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>






  
<script>
    export default {
        methods: {
            toggleVerticalMenu() {
                this.$emit('toggleVerticalMenu');
            },
            toggleDropdown() {
                this.isOpen = !this.isOpen;
            },
            emitLogout() {
                this.$emit('logout');
        }
        },
        props: {
            isDarkMode: {
                type: Boolean,
                required: true
            }
        },
        components: {
          DarkModeButton,
          LogoMenu,
          DarkLogoMenu,
        },
        data() {
          return {
            isDarkMode: false,
            isOpen: false,
          };
        }
    };

    import DarkModeButton from '../../Components/DarkModeButton.vue';
    import LogoMenu from './logo-menu.vue';
    import DarkLogoMenu from './logo-menu-dark.vue';

</script>