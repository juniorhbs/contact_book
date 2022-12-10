<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps(['user'])
const {user} = props
const form = useForm(user);

const submit = () => {
    form.put(route('contact.update', user.id), {
        onFinish: () => form.reset('name', 'email', 'phone', 'zipcode', 'state', 'city', 'district', 'street', 'number'),
    });
};
</script>

<template>
    <div class="relative p-5 flex items-top min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Nome de Contato" />
                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email de Contato" />
                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="phone" value="Telefone de Contato" />
                <TextInput
                    id="phone"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.phone"
                    required
                    autocomplete="username"
                />
                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div class="mt-4">
                <InputLabel for="zipcode" value="Cep" />
                <TextInput
                    id="zipcode"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.address.zipcode"
                    required
                />
                <InputError class="mt-2" :message="form.errors.zipcode" />
            </div>

            <div class="mt-4">
                <InputLabel for="state" value="Estado" />

                <select
                    id="state"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.address.state"
                    required
                >
                    <option disabled value="">Selecione</option>
                    <option>Acre</option>
                    <option>Alagoas</option>
                    <option>Amapá</option>
                    <option>Amazonas</option>
                    <option>Bahia</option>
                    <option>Ceará</option>
                    <option>Distrito Federal</option>
                    <option>Espírito Santo</option>
                    <option>Goiás</option>
                    <option>Maranhão</option>
                    <option>Mato Grosso</option>
                    <option>Mato Grosso do Sul</option>
                    <option>Minas Gerais</option>
                    <option>Paraná</option>
                    <option>Paraíba</option>
                    <option>Pará</option>
                    <option>Pernambuco</option>
                    <option>Piauí</option>
                    <option>Rio de Janeiro</option>
                    <option>Rio Grande do Norte</option>
                    <option>Rio Grande do Sul</option>
                    <option>Rondonia</option>
                    <option>Roraima</option>
                    <option>Santa Catarina</option>
                    <option>Sergipe</option>
                    <option>São Paulo</option>
                    <option>Tocantins</option>
                </select>

                <InputError class="mt-2" :message="form.errors.state" />
            </div>
            <div class="mt-4">
                <InputLabel for="city" value="Cidade" />
                <TextInput
                    id="city"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.address.city"
                    required
                />
                <InputError class="mt-2" :message="form.errors.city" />
            </div>

            <div class="mt-4">
                <InputLabel for="district" value="Bairro" />
                <TextInput
                    id="district"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.address.district"
                    required
                />
                <InputError class="mt-2" :message="form.errors.district" />
            </div>

            <div class="mt-4">
                <InputLabel for="street" value="Endereço" />
                <TextInput
                    id="street"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.address.street"
                    required
                />
                <InputError class="mt-2" :message="form.errors.street" />
            </div>

            <div class="mt-4">
                <InputLabel for="number" value="Numero" />
                <TextInput
                    id="number"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.address.number"
                    required
                />
                <InputError class="mt-2" :message="form.errors.number" />
            </div>



            <div class="flex items-center justify-end mt-4">
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Atualizar
                </PrimaryButton>
            </div>
        </form>

    </div>
</template>
