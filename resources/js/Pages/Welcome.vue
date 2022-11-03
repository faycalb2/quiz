<script>
import Layout from '../Layouts/Layout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: { Layout, Link }
}
</script>

<template>
    <Head title="Welcome" />

    <Layout>

        <div v-if="$page.props.auth.user">
            <h1 class="text-center">Welcome user</h1>
            <div class="py-8 flex justify-between">
                <p>Take new quiz</p>
                <Link :href="route('quiz.index')">View your current quizzes</Link>
            </div>
        </div>

        <h1 class="text-center" v-else>Register or Login to start taking quizzes!</h1>

    </Layout> 
</template>
