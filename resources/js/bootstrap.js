import axios from 'axios';
import {Inertia} from '@inertiajs/inertia';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['Accept-Language'] = localStorage.getItem('locale') ?? 'pl';

Inertia.on('before', event => {
    event.detail.visit.options.headers = {
        ...event.detail.visit.options.headers,
        'Accept-Language': localStorage.getItem('locale') ?? 'pl',
    };
});
