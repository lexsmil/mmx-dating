// @ts-nocheck
import {createApp} from 'vue'
import {createRouter, createWebHashHistory} from 'vue-router'
import {createMmx} from '@vesp/mmx-frontend'
import VueDatePicker from '@vuepic/vue-datepicker'
import App from './mgr/app.vue'
import routes from '~pages'

import './mgr/scss/index.scss'

document.addEventListener('DOMContentLoaded', () => {
  createApp(App)
    .use(createRouter({history: createWebHashHistory(), routes}))
    .use(createMmx({namespace: 'mmx-dating'}))
    .component('VueDatePicker', VueDatePicker)
    .mount('#mmx-dating-root')
})
