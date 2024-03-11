import './bootstrap';
import { createApp } from 'vue';
import FormComponents from "./components/frontend/comments/FormComponents.vue";
const app = createApp({
    components:{
        FormComponents,
    }
});



app.mount('#comment');
