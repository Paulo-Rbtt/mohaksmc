<template>
    <div id="app">
        <div class="flex h-screen gb-gray-100">
            <div class="bg-[#242424] flex flex-col justify-between py-5">
                <div class="flex justify-center">
                    <span class="text-4xl font-bold text-white">M.H.M.C.</span>
                </div>
                <ul class="list-none">
                    <li><a href="/dashboard" class="text-white block p-4 text-sm hover:bg-[#303030]">Dashboard</a></li>
                    <li><a href="/info" class="text-white block p-4 text-sm hover:bg-[#303030]">Informações Gerais</a></li>
                    <li><a href="/agenda" class="text-white block p-4 text-sm hover:bg-[#303030]">Agenda</a></li>
                    <li><a href="/register" class="text-white block p-4 text-sm hover:bg-[#303030]">Cadastrar novo Membro</a></li>
                    <li><a href="/tesouraria" class="text-white block p-4 text-sm hover:bg-[#303030]">Tesouraria</a></li>
                </ul>
                <div class="h-[150px] flex justify-center items-center my-2">
                    <img src="../../public/images/Cranio.png" alt="Brasão" class="h-full">
                </div>
            </div>
            <div class="flex-1">
                <slot />
            </div>
        </div>
    </div>
</template>

<script>
import OverlayPanel from 'primevue/overlaypanel';

export default {
    data() {
        return {};
    },
    components: {
        OverlayPanel,
    },
    methods: {
        // toggleDropdown(event) {
        //     this.$refs.op.toggle(event)
        // },
    },
}
</script>