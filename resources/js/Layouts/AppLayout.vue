<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>
        <Head :title="title" />

        <!-- <Banner /> -->
        <div :class="{ 'dark': isDarkMode }">
            <HorizontalMenu @toggleVerticalMenu="toggleVerticalMenu" @toggleDarkMode="toggleDarkMode" />
            <VerticalMenu :isVisible="isVerticalMenuVisible" />
            <div class="pt-16 pl-64">
                <!-- Contenido de la aplicación -->
            </div>
        </div>
    </div>
</template>

<script>
    import HorizontalMenu from '../Components/Menu/menu-horizontal.vue';
    import VerticalMenu from '../Components/Menu/menu-vertical.vue';

    export default {
        components: {
            HorizontalMenu,
            VerticalMenu
        },
        data() {
            return {
            isDarkMode: false,
            isVerticalMenuVisible: true
            };
        },
        methods: {
            toggleDarkMode() {
                this.isDarkMode = !this.isDarkMode;
                if (this.isDarkMode) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            },
            toggleVerticalMenu() {
                this.isVerticalMenuVisible = !this.isVerticalMenuVisible;
            },
            logout() {
                this.$router.post(this.$route('logout'));
            }
        }
    };
</script>
