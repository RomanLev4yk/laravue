window.Vue = require('vue');

import UserLogin from './Login'

[ UserLogin ]
  .forEach(Component => {
        Vue.component(Component.name, Component)
    })

export default {
        routes: [

        ]
    };
