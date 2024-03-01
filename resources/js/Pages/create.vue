
<script>

import { useForm } from '@inertiajs/inertia-vue3'
import { router } from '@inertiajs/inertia-vue3'

    const form = useForm({
        name:null,
        email:null,
        phone:null,
});

function submit(){
     router.post('/create', form)
}
</script>

<template>
    <form @submit.prevent="submit">
        <div class="container">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" v-model="form.name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" v-model="form.email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone</label>
                <input type="text" v-model="form.phone" class="form-control" id="phone">
            </div>
        </div>
        <button type="submit">Salvar</button>
    </form>
</template>

