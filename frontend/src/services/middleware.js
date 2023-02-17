import Cookie from 'js-cookie';

export default {
    auth(to, from, next) {
        const token = Cookie.get('_login_token');
        if (to.name !== 'login' && !token) next({ name: 'login' })
        else next()
    },
}