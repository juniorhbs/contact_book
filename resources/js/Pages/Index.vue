<script setup>
import {Head, Link, useForm} from "@inertiajs/inertia-vue3";
const props = defineProps(['users'])
const form = useForm();

const submit = () => {
    form.delete(route('contact.destroy'));
};
</script>
<template>
        <table >
        <thead>
        <tr>
            <th>Nome de Contato</th>
            <th>E-mail de Contato</th>
            <th>Telefone de Contato</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="user in users" key="user.name">
            <td>{{user.name}}</td>
            <td>{{user.email}}</td>
            <td>{{user.phone}}</td>
            <td><Link :href="route('contact.edit', user.id)">Editar</Link>
                <form @submit.prevent="submit">
                    <button type="submit">
                        Deletar
                    </button>
                </form>
            </td>


        </tr>
        </tbody>
    </table>

</template>


<style>
</style>
