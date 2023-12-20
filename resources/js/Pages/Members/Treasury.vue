<template>
    <Layout>
        <div class="bg-[#888888] p-10 h-screen">
            <h1 class="text-3xl font-bold mb-4">Tesouraria</h1>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                        <button class="bg-black hover:bg-[#333] text-white font-bold py-2 px-4 rounded my-3">Nova movimentação</button>

                        <!-- table -->
                        <table class="w-full posts-table border">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="py-2 border">Valor</th>
                                    <th class="py-2 border">Motivo</th>
                                    <th class="py-2 border">Beneficiário</th>
                                    <th class="py-2 border">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-gray-200">
                                    <td class="py-1 pl-2 border border-gray-300">R$ 200,00</td>
                                    <td class="py-1 pl-2 border border-gray-300">Pagamento conta de luz da SEDE</td>
                                    <td class="py-1 pl-2 border border-gray-300">MOHAWKS</td>
                                    <td class="py-1 pl-2 border border-gray-300">05/12/2023</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="py-1 pl-2 border border-gray-300">R$ 50,00</td>
                                    <td class="py-1 pl-2 border border-gray-300">Pagamento conta de água da SEDE</td>
                                    <td class="py-1 pl-2 border border-gray-300">MOHAWKS</td>
                                    <td class="py-1 pl-2 border border-gray-300">05/12/2023</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="py-1 pl-2 border border-gray-300">R$ 450,00</td>
                                    <td class="py-1 pl-2 border border-gray-300">Compra da feira para a confraternização</td>
                                    <td class="py-1 pl-2 border border-gray-300">MOHAWKS</td>
                                    <td class="py-1 pl-2 border border-gray-300">17/12/2023</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="flex justify-center pt-5">~~ Vai ser um DataTable ~~</p>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../../LayoutMembers.vue'

export default {
    components: {
        Layout,
    }
}
</script>