<template>
    
    <section class="TodoPage">
        <div class="container mt-3 mt-sm-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Type new task</label>
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="New todo"
                                v-model="newTodo"
                                @keydown.enter="addTodo"
                                v-on:change="checkIfValid"
                            >
                            <div class="input-group-append">
                                <Button
                                    :text="`Save`"
                                    :type="`primary`"
                                    @click="addTodo"
                                />
                            </div>
                            <span class="form-text text-error">{{error}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <TodoTable :TODOS="TODOS"/>
        </div>
    </section>
</template>
<script>
    import {mapGetters} from "vuex";
    import Button from '@/components/Partials/Button.vue'
    import TodoTable from '@/components/Partials/TodoTable.vue'

    export default {
        components: {
            Button,
            TodoTable
        },
        data() {
            return {
                newTodo: null,
                error: null
            }
        },
        methods: {
            addTodo() {
                if (this.checkIfValid()) {
                    this.$store.dispatch("PUSH_TODO", {text: this.newTodo, completed: false});
                    this.newTodo = null;
                }

            },
            checkIfValid() {
                if (this.newTodo === null || this.newTodo === '') {
                    this.error = 'This field cannot be empty';
                    return false;
                }
                this.error = null;
                return true;
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
    
    .text-error {
        color: #ff0000;
    }
    
    .form-text {
        display: block;
        margin-top: 0.25rem;
        font-size: 0.9rem;
        width: 100%;
    }
    
    .input-group {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        width: 100%;
    }
    
    .form-control {
        position: relative;
        flex: 1 1 0%;
        min-width: 0;
        margin-bottom: 0;
        display: block;
        width: 100%;
        padding: 0.6rem 1rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #e2e5ec;
        border-radius: 4px;
    }

</style>
