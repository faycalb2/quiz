<script>
   export default {
    propos: {
        quizzes: Object
    }
   } 
</script>

<template>
    <div class="p-8">
        <h1>Quizzes</h1>
        <ul>
            <li v-for="quiz in $page.props.quizzes">
                {{ quiz.name }}
            </li>
        </ul>
    </div>
</template>