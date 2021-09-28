<template>
    <div
        class="grid items-start border bg-putih border-abu-terang w-px-1 w-740 h-406 place-items-center"
    >
        <div>
            <div class="w-56 mb-2 text-center text-abu-gelap pt-7 font-varela">
                Enter the numbers
            </div>
            <div>
                <input
                    type="text"
                    name="number1"
                    class="w-56 pt-2 pb-2 pl-2 my-1 border border-abu-terang"
                    placeholder="number 1"
                />
            </div>
            <div>
                <input
                    type="text"
                    name="number2"
                    class="w-56 pt-2 pb-2 pl-2 my-1 border border-abu-terang"
                    placeholder="number 2"
                />
            </div>
            <div>
                <input
                    type="button"
                    value="Sum"
                    class="w-56 py-2 my-3 bg-merah text-putih"
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
                    name="number1"
                    class="w-56 pt-2 pb-2 pl-2 my-1 border border-abu-terang"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            result: 0
        };
    },
    methods: {
        calculate: function() {
            axios.post("/api/calculator").then(function(response) {
                this.result = response.data.result;
            });
        }
    }
};
</script>

<style></style>
