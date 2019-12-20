<template>
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">

				</div>
			</div>
		</div>
	</section>
</template>

<script>
    export default {}
</script>

<style scoped lang="scss">
	.Card {

		margin-bottom: 2rem;
		box-shadow: 0 0 0.875rem 0 rgba(53, 64, 82, .05);

		position: relative;
		display: flex;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 0 solid transparent;
		border-radius: .25rem;

		.CardHeader {
			border-radius: .25rem .25rem 0 0;
			padding: .75rem 1.25rem;
			margin-bottom: 0;
			background-color: #fff;
			border-bottom: 0 solid transparent;
		}

		.Title {
			font-size: 1rem;
			font-weight: 600;
			color: #495057;
			margin: 0;
		}

		.CardBody {
			flex: 1 1 auto;
			min-height: 1px;
			padding: 1.25rem;
		}

	}

</style>
