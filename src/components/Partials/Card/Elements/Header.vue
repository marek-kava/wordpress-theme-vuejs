<template>
	<div class="Header pb-0">
		<CardTitle v-bind:title="title"/>
	</div>
</template>

<script>
    import CardTitle from "./Title";

    export default {
        components: {
            CardTitle
        },
				props: ['title']
    }
</script>

<style scoped lang="scss">
	.Header {
		border-radius: .25rem .25rem 0 0;
		padding: .75rem 1.25rem;
		margin-bottom: 0;
		background-color: #fff;
		border-bottom: 0 solid transparent;
	}
</style>