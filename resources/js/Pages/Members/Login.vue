<template>
    <div class="page flex flex-col gap-10 pt-16 items-center h-full-vh bg-[#242424]">
        <img src="../../../../public/images/cranio.png" alt="Brasão" class="h-[200px]">
        <div class="bg-white p-8 rounded-md shadow-md w-[500px] h-[350px]">
            <h1 class="text-2xl font-semibold mb-6 flex justify-center">MEMBROS</h1>
            <form method="post">
                <div class="mb-4">
                    <label for="id" class="block text-sm font-medium">ID</label>
                    <input type="text" id="id" name="id" class="mt-1 p-2 w-full border border-black rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="senha" class="block text-sm font-medium">Senha</label>
                    <input type="password" id="senha" name="senha" class="mt-1 p-2 w-full border border-black rounded-md" required>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-[#646464] text-white py-2 px-5 rounded-md hover:bg-[#404040] flex justify-center">
                        Login
                    </button>
                </div>
            </form>
            <div class="w-full flex justify-center p-1 mt-3 bg-red-300 rounded">
                <span class="text-red-600">Mensagem genérica de erro de credenciais</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            error: '',
        }
    },
}
</script>

<style>
.h-full-vh {
    height: 100vh;
}
</style>