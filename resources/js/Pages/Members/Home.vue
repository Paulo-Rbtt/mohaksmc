<template>
    <Layout>
        <div class="bg-[#888888] p-10 h-screen">
            <h1 class="text-3xl font-bold mb-4">Dashboard</h1>

            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold mb-2">Total de Membros</h2>
                </div>

                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold mb-2">Próximos Eventos</h2>
                    <ul>
                        <li>Evento 1 - Data</li>
                        <li>Evento 2 - Data</li>
                    </ul>
                </div>

                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit.</h2>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit.</h2>
                </div>

                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold mb-2">Lorem, ipsum dolor.</h2>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur.</li>
                        <li>Lorem ipsum dolor sit amet consectetur.</li>
                        <li>Lorem ipsum dolor sit amet consectetur.</li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 mb-4">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, accusantium.</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum perspiciatis nesciunt facilis nisi numquam doloribus aspernatur earum assumenda repudiandae possimus, saepe perferendis atque molestias obcaecati?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem hic sequi corporis in dolorem, tempora enim! Ad ab sequi quidem!</p>
                </div>
            </div>

            <div class="grid grid-cols-1">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold flex justify-center">~~ Tem que ver quais informações vão ser mostradas nessa página ~~</h2>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../../LayoutMembers.vue'

export default {
    data() {
        return {}
    },
    components: {
        Layout,
    },
    methods: {},
}
</script>