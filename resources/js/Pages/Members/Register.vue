<template>
    <Layout>
        <div class="bg-[#888888] p-10 h-screen">
            <h1 class="text-3xl font-bold mb-4">Cadastro de Membros</h1>

            <form @submit.prevent="cadastrarMembro">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="nome" class="block text-sm font-medium text-gray-800">Nome:</label>
                    <input v-model="membro.nome" type="text" id="nome" name="nome" placeholder="Nome de Guerra" class="mt-1 p-2 w-full border rounded">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="id" class="block text-sm font-medium text-gray-800">ID:</label>
                        <input v-model="membro.id" type="text" id="id" name="id" placeholder="Id de Acesso" class="mt-1 p-2 w-full border rounded">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-800">Senha:</label>
                        <input v-model="membro.senha" type="password" id="password" name="password" placeholder="Senha de Acesso" class="mt-1 p-2 w-full border rounded">
                    </div>
                </div>
            </div>
            

            <div class="mb-4">
                <label for="moto" class="block text-sm font-medium text-gray-800">Moto:</label>
                <input v-model="membro.moto" type="text" id="moto" name="moto" placeholder="ex: VULCAN S 650 ou CRF 1100L (MODELO CILINDRADA)" class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="endereco" class="block text-sm font-medium text-gray-800">Endereço:</label>
                    <input v-model="membro.endereco" type="text" id="endereco" name="endereco" placeholder="ex: Rua Entra pra Fora, 222" class="mt-1 p-2 w-full border rounded">
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label for="bairro" class="block text-sm font-medium text-gray-800">Bairro:</label>
                        <input v-model="membro.bairro" type="text" id="bairro" name="bairro" placeholder="ex: Capim Macio" class="mt-1 p-2 w-full border rounded">
                    </div>

                    <div>
                        <label for="cidade" class="block text-sm font-medium text-gray-800">Cidade:</label>
                        <input v-model="membro.cidade" type="text" id="cidade" name="cidade" placeholder="ex: Natal" class="mt-1 p-2 w-full border rounded">
                    </div>

                    <div>
                        <label for="estado" class="block text-sm font-medium text-gray-800">Estado:</label>
                        <input v-model="membro.estado" type="text" id="estado" name="estado" placeholder="ex: RN" class="mt-1 p-2 w-full border rounded">
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label for="grupo_sanguineo" class="block text-sm font-medium text-gray-800">Grupo Sanguíneo:</label>
                <input v-model="membro.grupo_sanguineo" type="text" id="grupo_sanguineo" name="grupo_sanguineo" placeholder="ex: AB+" class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="data_entrada" class="block text-sm font-medium text-gray-800">Data de Entrada:</label>
                <input v-model="membro.data_entrada" type="date" id="data_entrada" name="data_entrada" class="mt-1 p-2 w-full border rounded">
            </div>

            <!-- Adicione outros campos conforme necessário -->

            <button type="submit" class="bg-black text-white p-2 rounded hover:bg-[#333]">Cadastrar Membro</button>
            </form>
            <p class="flex justify-center">~~ Vai ter mais campos, de acordo com o nosso form de papel ~~</p>
        </div>
    </Layout>
</template>

<script>
import Layout from '../../LayoutMembers.vue'

export default {
    data() {
        return {
            membro: {
                nome: '',
                id: '',
                senha: '',
                moto: '',
                endereco: '',
                bairro: '',
                cidade: '',
                estado: '',
                grupo_sanguineo: '',
                data_entrada: '',
            },
        };
    },
    components: {
        Layout,
    },
    methods: {
        cadastrarMembro() {
            console.log('Dados do membro:', this.membro)
        }
    }
}
</script>