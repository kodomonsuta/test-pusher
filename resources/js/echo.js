import Echo from 'laravel-echo';
import Pusher from 'pusher-js';
window.Pusher = Pusher;
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '52592080f8da23896051',
    cluster: 'ap1',
    forceTLS: false
});
