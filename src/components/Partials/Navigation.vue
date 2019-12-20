<template>
	<nav class="Navigation">
		<ul class="list">
			<li class="item">Blog</li>
			<li class="item">Sing In</li>
		</ul>
	</nav>
</template>

<style scoped lang="scss">

	.Navigation {
		margin-left: auto;

		&> .list {
			margin: 0;
			list-style-type: none;

			display: flex;
			flex-direction: row;

			&> .item {
				margin-left: 1rem;

				&:first-child {
					margin-left: 0;
				}
			}
		}
	}

</style>