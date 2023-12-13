<template>
    <Layout>
        <div class="custom-container">
            <div class="bg-image text-center pt-5">
                <!-- Conteúdo da sua div aqui -->
                BRASÃO AQUI
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../Layout.vue'

export default {
    data() {
        return {}
    },
    components: {
        Layout,
    },
    methods: {}
}
</script>

<style>
body {
    background-color: #686868;
}
.custom-container {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bg-image {
    width: 400px;
    height: 400px;
    background-color: rgb(51, 51, 51);
    color: white;
    box-sizing: border-box;
}
</style>