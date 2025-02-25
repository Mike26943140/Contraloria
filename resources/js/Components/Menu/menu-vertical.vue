<template>
    <div :class="{ 'hidden': !isVisible }" class="bg-cmi dark:bg-dark-cmi-2 text-white w-64 h-full fixed left-0 top-16 shadow-lg">
        <ul>
            <li class="cursor-pointer" v-for="section in sections" :key="section.name" @click="toggleSubMenu(section.name)">
                <div v-if="itemRoute[3] === section.route" class="flex items-center cursor-default bg-cmi-light p-3">
                    <i :class="[section.icon, 'text-white', 'mr-2']"></i>
                    {{ section.name }}
                </div>
                <div v-else class="flex items-center bg-transparent p-3">
                    <i :class="[section.icon, 'text-white', 'mr-2']"></i>
                    {{ section.name }}
                </div>
                <ul v-if="section.name === activeSection" class="">
                    <li class="pl-8 py-2 bg-white text-cmi hover:bg-gray-300" v-for="subItem in section.subItems" :key="subItem">{{ subItem.name }}</li>
                </ul>
            </li>
        </ul>
    </div>
</template>
  
<script>
    export default {
        props: {
            isVisible: {
            type: Boolean,
            default: true
            }
        },
        data() {
            return {
                rutaActual: window.currentRoute,
                activeSection: null,
                sections: [
                    { icon: 'fas fas-cog', name: 'Dashboard', route:'dashboard', link:'', subItems: [{name: 'Opción 1', link:''} , {name: 'Opción 2', link:''}] },
                    { icon: 'fas fas-cog', name: 'Configuración', route:'configuracion', link:'', subItems: [{name: 'Opción 1', link:''} , {name: 'Opción 2', link:''}] },
                    { icon: 'fas fas-folder', name: 'Archivo', route:'archivo', link:'', subItems: [{name: 'Opción 1', link:''} , {name: 'Opción 2', link:''}] },
                    { icon: 'fas fas-cogs', name: 'Procesos', route:'procesos', link:'', subItems: [{name: 'Opción 1', link:''} , {name: 'Opción 2', link:''}] },
                    { icon: 'fas fas-chart-bar', name: 'Reportes', route:'reportes', link:'', subItems: [{name: 'Opción 1', link:''} , {name: 'Opción 2', link:''}] },
                    { icon: 'fas fas-sign-out-alt', name: 'Cerrar Sesión', route:'logout', link:'', subItems: [] }
                ],
                itemRoute: [],
            };
        },
        methods: {
            toggleSubMenu(sectionName) {
                this.activeSection = this.activeSection === sectionName ? null : sectionName;
            },
            esRutaActual(ruta) {
                return this.rutaActual.includes(ruta);
            }
        },
        mounted() {
            this.itemRoute = this.rutaActual.split('/');
        }
    };
</script>

<style scoped>
.active {
    font-weight: bold;
    color: green;
}
</style>