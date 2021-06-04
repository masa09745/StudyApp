/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from "vue";
import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import ExamListComponent from "./components/ExamListComponent";
import ExamCreateComponent from "./components/ExamCreateComponent";
import ExamShowComponent from "./components/ExamShowComponent";
import ExamEditComponent from "./components/ExamEditComponent";
import SubjectIndexComponent from "./components/SubjectIndexComponent";

window.Vue = require('vue').default;

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/exams',
            name: 'exam.list',
            component: ExamListComponent
        },
        {
            path: '/exams/create',
            name: 'exam.create',
            component: ExamCreateComponent
        },
        {
            path: '/exams/:examId',
            name: 'exam.show',
            component: ExamShowComponent,
            props: true
        },
        {
            path: '/exams/:examId/edit',
            name: 'exam.edit',
            component: ExamEditComponent,
            props: true
        },
        {
            path: '/exams/:examId/subjects',
            name: 'subject.index',
            component: SubjectIndexComponent,
            props: true
        }

    ]
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
