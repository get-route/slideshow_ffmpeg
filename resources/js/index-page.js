import './bootstrap';
import { createApp } from 'vue';
import InfoBlockComponent from "./components/frontend/index/InfoBlockComponent.vue";
const app = createApp({
    components:{
        InfoBlockComponent,
    }
});




app.mount('#block-index');
