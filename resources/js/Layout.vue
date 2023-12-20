<template>
    <div id="app">
        <div class="bg-[#252525] text-white h-[80px] fixed w-full z-10">
            <div class="h-full flex items-center justify-between px-20">
                <div>
                    <span class="text-4xl font-bold">M.H.M.C</span>
                </div>
                <div class="flex gap-10">
                    <a href="/#" class="hover:text-[#a0a0a0]">Home</a>
                    <div class="relative inline-block text-left">
                        <div class="text-white hover:text-[#a0a0a0]">
                            <button @click="toggleDropdown" type="button" class="inline-flex gap-x-1.5">
                                O Clube
                                <svg class="-mr-1 h-6 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <OverlayPanel ref="opdd">
                            <div class="mt-2 w-40 rounded-md bg-[#292929] shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="py-1">
                                    <a href="/#colete" class="text-gray-300 block px-4 py-2 text-sm hover:bg-[#383838]">O Colete</a>
                                    <a href="/#comando" class="text-gray-300 block px-4 py-2 text-sm hover:bg-[#383838]">O Comando</a>
                                </div>
                            </div>
                        </OverlayPanel>
                    </div>
                    <a href="https://www.instagram.com" target="_blank" class="hover:text-[#a0a0a0]">Instagram</a>
                    <a href="https://wa.me/5584981704393?text=Ol%C3%A1.+Vim+pelo+site+e+quero+saber+como+posso+ser+da+fam%C3%ADlia+MOHAWKS%21" target="_blank" class="hover:text-[#a0a0a0]">Contato</a>
                </div>
                <div>
                    <a href="/restrict" class="px-5 py-3 border rounded hover:bg-white hover:text-[#252525] font-bold text-sm">Área Restrita</a>
                </div>
            </div>
        </div>
        <slot />
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
        toggleDropdown(event) {
            this.$refs.opdd.toggle(event)
        },
    },
}
</script>