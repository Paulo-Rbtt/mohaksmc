import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import PrimeVue from 'primevue/config';
import Ripple from 'primevue/ripple';
import StyleClass from 'primevue/styleclass';

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(PrimeVue, { ripple: true }) // , {unstyled: true}
            .directive('ripple', Ripple)
            .directive('styleclass', StyleClass)
            .mount(el);
    },
});

