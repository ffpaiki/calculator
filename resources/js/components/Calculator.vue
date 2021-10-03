<template>
    <div
        class="grid items-start border bg-putih border-abu-terang w-px-1 w-740 h-406 place-items-center"
    >
        <div>
            <div class="w-56 mb-2 text-center font-varela text-abu-gelap pt-7">
                Enter the numbers
            </div>
            <div>
                <input
                    type="text"
                    name="number1"
                    class="w-56 pt-2 pb-2 pl-2 my-1 border border-abu-terang"
                    placeholder="number 1"
                    v-model="form.number1"
                />
                <p>{{ form.error_number1 }}</p>
            </div>
            <div>
                <input
                    type="text"
                    name="number2"
                    class="w-56 pt-2 pb-2 pl-2 my-1 border border-abu-terang"
                    placeholder="number 2"
                    v-model="form.number2"
                />
                <p>{{ form.error_number2 }}</p>
            </div>
            <div>
                <input
                    type="button"
                    value="Sum"
                    class="w-56 py-2 my-3 bg-merah text-putih"
                    @click="calculate()"
                />
            </div>
        </div>
        <div class="w-10/12 h-px bg-merah"></div>
        <div>
            <div class="w-56 mb-2 text-center text-abu-gelap pt-7">
                Results
            </div>
            <div>
                <input
                    type="text"
                    name="result"
                    class="w-56 pt-2 pb-2 pl-2 my-1 border border-abu-terang"
                    v-model="result"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            form: {
                number1: 0,
                number2: 0,
                error_number1: null,
                error_number2: null
            },
            result: 0
        };
    },
    props: ["errors"],
    methods: {
        calculate: function() {
            axios
                .post("/api/calculator", this.form)
                .then(response => {
                    this.result = response.data.result;
                })
                .catch(error => {
                    console.error(1);
                    this.result = error.response.data.e.number1;
                    this.form.error_number2 = response.data.e.number2;
                });
            // console.log(this.form.number1);
            // console.log(this.form.number2);
        }
    }
};
</script>

<style></style>
