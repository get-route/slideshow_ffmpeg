import './bootstrap';
import { createApp } from 'vue';
import IndexComponents from "./components/frontend/comments/IndexComponents.vue";
const app = createApp({
    components:{
        IndexComponents,
    }
});



app.mount('#comment-form');
