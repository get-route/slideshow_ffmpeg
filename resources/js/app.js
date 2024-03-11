import './bootstrap';
import { createApp } from 'vue';
import store from './store';
import RedactorIndex from "./components/frontend/redactor/RedactorIndex.vue";
import AdminCommentComponent from "./components/admin/AdminCommentComponent.vue";
import AdminMetricComponent from "./components/admin/AdminMetricComponent.vue";
import AdminTagComponent from "./components/admin/AdminTagComponent.vue";
import CatalogComponents from "./components/frontend/catalog/CatalogComponents.vue";
import TablesComponent from "./components/cabinet/TablesComponent.vue";
import FormComponents from "./components/frontend/comments/FormComponents.vue";
import AdminUsersComponent from "./components/admin/AdminUsersComponent.vue";
import SocButComponents from "./components/social/SocButComponents.vue";
import IndexVideoComponent from "./components/frontend/video/IndexVideoComponent.vue";
import Vue3ColorPicker from "vue3-colorpicker";
import "vue3-colorpicker/style.css";
import CKEditor from '@mayasabha/ckeditor4-vue3';
const app = createApp({
    components:{
        RedactorIndex,
        AdminMetricComponent,
        AdminTagComponent,
        AdminCommentComponent,
        TablesComponent,
        FormComponents,
        AdminUsersComponent,
        SocButComponents,
        IndexVideoComponent,
        CatalogComponents,
    }
});

app.use(Vue3ColorPicker)
app.use(store);
app.use(CKEditor);


app.mount('#app');
