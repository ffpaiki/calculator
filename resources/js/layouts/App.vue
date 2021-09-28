<template>
    <div>
        <div class="h5 bg-merah text-center text-putih py-3">
            CALCULATOR
        </div>

        <div class="grid place-items-center m-14 align-content-center">
            <Calculator></Calculator>
        </div>
    </div>
</template>

<script>
import Calculator from "../components/Calculator.vue";

export default {
    components: { Calculator }
};
</script>

<style></style>
