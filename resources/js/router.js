import { createRouter, createWebHistory } from "vue-router";
import AllCollections from '@/Pages/Collection/AllCollections.vue';
import MyCollection from '@/Pages/Collection/MyCollection.vue';
import EditCollection from '@/Pages/Collection/EditCollection.vue';

const routes = [
    {
        path: "/all-collection",
        name: AllCollections,
        component: AllCollections
    },
    {
        path: "/my-collection",
        name: MyCollection,
        component: MyCollection
    },
    {
        path: "/edit-collection",
        name: EditCollection,
        component: EditCollection
    },
]

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
})

export default router;