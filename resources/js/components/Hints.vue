<template>
	<ul class="px-2" is="transition-group" name="wobble">
		<li v-if="!hints.length" class="md:mb-2 mb-1 p-2 shadow-md bg-black-40">No Hints Available</li>
		<li
			class="md:mb-2 mb-1 p-2 shadow-md bg-black-40"
			v-for="hint in hints"
			:key="hint.id"
		>{{ hint.text }}</li>
	</ul>
</template>
<script>
export default {
	props: {
		token: { required: true },
		question_id: { required: true }
	},
	data() {
		return {
			hints: []
		};
	},
	methods: {
		getQuestionHints(options = {notify: true}) {
			window.axios
				.get("api/question/" + this.question_id + "/hints/", {
					params: {
						api_token: this.token
					}
				})
				.then(res => {
					if(this.hints.length < res.data.length && options.notify) {
						flash("New Hints arrived! take a look..");
                    }
                    this.hints = res.data;
				})
				.catch(err => {
					this.hints = [];
				});
		}
	},
	created() {
		this.getQuestionHints({notify: false});
		setInterval(() => {
			this.getQuestionHints();
		}, 60000);
	}
};
</script>
<style>
.wobble-enter-active {
	animation: wobble 0.5s linear forwards;
}
@keyframes wobble {
	0% {
		transform: translateX(-20%) rotate(-5deg);
	}
	50% {
		transform: translateX(20%) rotate(5deg);
	}
	66% {
		transform: translateX(-20%) rotate(-2deg);
	}
	84% {
		transform: translateX(20%) rotate(2deg);
	}
	100% {
		transform: translateX(0);
	}
}
</style>
