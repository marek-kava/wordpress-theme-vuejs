<template>
	<h2 class="Title">{{title}}</h2>
</template>

<script>
    export default {
			props: ['title']
		}
</script>

<style scoped lang="scss">
	.Title {
		font-size: 1.5rem;
		font-weight: 300;
		color: #495057;
		margin: 0;
		padding-top: 1rem;
	}
</style>