<template>
    <div>
        <b-button v-b-modal.modal-1>Launch demo modal</b-button>

        <b-modal id="modal-1" title="BootstrapVue">
            <p class="my-4">Hello from modal!</p>
        </b-modal>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">CEP</th>
            <th scope="col">Estado</th>
            <th scope="col">Cidade</th>
            <th scope="col">Bairro</th>
            <th scope="col">Endereço</th>
            <th scope="col">Número</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">João</th>
            <td>joão@email.com</td>
            <td>11 9 9999-9999</td>
            <td>00000-000</td>
            <td>São Paulo</td>
            <td>Taboão da Serra</td>
            <td>Maria Rosa</td>
            <td>Jose Maciel Neto</td>
            <td>215</td>
            <td>Editar | Excluir</td>
        </tr>
        <tr>
            <th scope="row">João</th>
            <td>joão@email.com</td>
            <td>11 9 9999-9999</td>
            <td>00000-000</td>
            <td>São Paulo</td>
            <td>Taboão da Serra</td>
            <td>Maria Rosa</td>
            <td>Jose Maciel Neto</td>
            <td>215</td>
            <td>Editar | Excluir</td>
        </tr>
        <tr>
            <th scope="row">João</th>
            <td>joão@email.com</td>
            <td>11 9 9999-9999</td>
            <td>00000-000</td>
            <td>São Paulo</td>
            <td>Taboão da Serra</td>
            <td>Maria Rosa</td>
            <td>Jose Maciel Neto</td>
            <td>215</td>
            <td>Editar | Excluir</td>
        </tr>

        </tbody>
    </table>
</template>

<script>
export default {
    name: "Home"
}
</script>

<style scoped>

</style>
