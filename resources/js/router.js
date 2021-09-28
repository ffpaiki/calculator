import VueRouter from "vue-router";
import Calculator from "./pages/Calculator.vue";

const routes = [
    {
        path: "/calculator",
        component: Calculator,
        name: "calculator"
    }
];

const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
