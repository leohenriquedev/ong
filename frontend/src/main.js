import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
// import { BootstrapVue, BootstrapVueIcons } from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';


const app = createApp(App);
app.use(router);
// app.use(BootstrapVue);
// app.use(BootstrapVueIcons);

app.mount('#app');

// createApp(App).use(router).mount('#app');

