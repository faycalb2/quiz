<script>
    import Layout from '../../Layouts/Layout.vue';
    export default {
        components: { Layout },
        data: () => ({
            name: '',
            quizzes: [
            ]
        }),
        methods: {
            addMore() {
                this.quizzes.push({
                    question: '',
                    answer_1: '',
                    answer_2: '',
                    answer_3: '',
                    answer_4: '',
                    correct: '',
                });
            },
            remove(index) {
                this.quizzes.splice(index, 1);
            },
            submit() {
                const data = {
                    quizzes: this.quizzes
                }
                axios.post(('/quiz'), {
                    name: this.name,
                    quizData: JSON.stringify(data, null, 2)
                });
            }
        },
        
    }
</script>

<template>
    <Layout>
        <div class="p-8">
            <div class="text-center">
                <h1>Create New Quiz</h1>
                <p>Right now, anyone can create quizes!</p>
            </div>

            <form>

                <div class="py-4">
                    <label class="label" for="name">Name</label>
                    <input v-model="name" class="input w-full" type="text" name="name" />
                </div>

                <div class="py-4" v-for="(quiz, index) in quizzes" :key="index">
                    <div>
                        <input v-model="quiz.question" class="input w-full" type="text" :name="`quizzes[${index}][question]`" placeholder="Question" />
                        <input v-model="quiz.answer_1" class="input w-full" type="text" :name="`quizzes[${index}][answer_1]`" placeholder="Answer 1" />
                        <input v-model="quiz.answer_2" class="input w-full" type="text" :name="`quizzes[${index}][answer_2]`" placeholder="Answer 2" />
                        <input v-model="quiz.answer_3" class="input w-full" type="text" :name="`quizzes[${index}][answer_3]`" placeholder="Answer 3" />
                        <input v-model="quiz.answer_4" class="input w-full" type="text" :name="`quizzes[${index}][answer_4]`" placeholder="Answer 4" />
                        <input v-model="quiz.correct" class="input w-full" type="text" :name="`quizzes[${index}][correct]`" placeholder="correct Answer" />
                    </div>
                    <button class="text-red-400" type="button" @click="remove(index)" v-show="index != 0" >- Remove</button>
                </div>

                <button type="button" @click="addMore()">+ Add More</button>

                <!-- Submit -->
        
                <button @click="submit" type="button" class="bg-green-400 p-2 my-4 block">Create Quiz</button>

            </form>

        </div>
    </Layout>
</template>