<template>
	<section class="TodoPage">
		<div class="container mt-3 mt-sm-5" id="app">
			<input placeholder="New todo" v-model="newTodo" @keydown.enter="addTodo">
			<ul>
				<template v-for="todo in TODOS">
					<li v-if="todo != null" :class="{ completed: todo.completed }" :key="todo.id">
						<input type="checkbox" v-model="todo.completed" @click="updateStatus(todo.id)">
						{{ todo.text }}
						<button @click="removeTodo(todo.id)">Remove todo</button>
					</li>
				</template>
			</ul>
			<button @click="removeTodos()">Remove all todos</button>
		</div>
	</section>
</template>

<script>
    import {mapGetters} from "vuex";

    export default {
        data() {
            return {
                newTodo: null
            }
        },
        methods: {
            addTodo() {
                this.$store.dispatch("PUSH_TODO", {text: this.newTodo, completed: false});
                this.newTodo = null;
            },
            updateStatus(id) {
                this.$store.dispatch("CHANGE_STATUS", {id: id});
            },
            removeTodos() {
                this.$store.dispatch("REMOVE_TODOS");
            },
            removeTodo(id) {
                this.$store.dispatch("REMOVE_TODO", {id: id});
                this.$store.dispatch("GET_TODOS");
            }
        },
        computed: {
            ...mapGetters(["TODOS"])
        },
        mounted() {
            this.$store.dispatch("GET_TODOS");
        },
    }
</script>

<style lang="scss">
</style>
