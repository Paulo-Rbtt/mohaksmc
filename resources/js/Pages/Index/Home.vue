<template>
    <Layout>
        <div class="flex flex-col items-center justify-center gap-10 h-[100vh]" style="background: url(https://img.freepik.com/premium-photo/asphalt-road-texture-with-car-wheel-marks-tarmac-road-surface-top-view_1962-1163.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
            <img src="../../../../public/images/cranio.png" alt="Brasão" class="mt-[60px] h-[500px]">

            <div>
                <button class="px-5 py-3 font-bold text-white text-2xl border rounded hover:bg-white hover:text-black">Venha ser um MOHAWKS</button>
            </div>
        </div>

        <Colete id="colete" />
        <Comando id="comando" />
    </Layout>
</template>

<script>
import Layout from '../../Layout.vue'
import Colete from './Colete.vue'
import Comando from './Comando.vue'

export default {
    data() {
        return {}
    },
    components: {
        Layout,
        Colete,
        Comando,
    },
    methods: {}
}
</script>