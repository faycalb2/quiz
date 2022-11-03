<script>
    import Layout from '../../Layouts/Layout.vue';
    import { Head } from '@inertiajs/inertia-vue3';

    export default {
        props: {quizzes: Object},
        components: { Layout }
    }
</script>

<template>
    <Head title="Dashboard" />

    <Layout> 
        <h1 class="text-center">Available Quizzes:</h1>
        <ul v-for="quiz in quizzes" class="flex justify-between">
            <li>{{ quiz.name }}</li>
        </ul>
    </Layout>
</template>
