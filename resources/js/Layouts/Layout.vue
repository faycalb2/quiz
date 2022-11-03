<script setup>
import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <div class="min-h-screen pt-6 sm:pt-0 bg-gray-100">
        <div>
            <header class="flex justify-around w-full sm:max-w-md mx-auto px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <Link href="/">Quiz Site</Link>
                <nav>
                    <ul class="flex">
                        <li v-if="$page.props.auth.user">
                            <Link :href="route('logout')" method="POST">Log out</Link>
                        </li>
                        <template v-else>
                            <li>
                                <Link :href="route('login')" class="ml-4 text-sm text-gray-700 underline">Log in</Link>
                            </li>
                            <li>
                                <Link :href="route('register')" class="ml-4 text-sm text-gray-700 underline">Register</Link>
                            </li>
                        </template>
                        <li>
                            <Link :href="route('quiz.create')" class="ml-4 text-sm text-gray-700 underline">Create Quiz</Link>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="w-full sm:max-w-md mt-6 mx-auto px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>

        <footer class="w-full text-center text-sm sm:max-w-md mt-6 mx-auto px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <p>Copyright 2022 site.com</p>
        </footer>
    </div>
</template>
