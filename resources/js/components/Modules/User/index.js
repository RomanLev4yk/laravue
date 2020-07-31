window.Vue = require('vue');

import Profile from './Profile'
import UserLogin from './Login'

[ Profile, UserLogin ]
  .forEach(Component => {
        Vue.component(Component.name, Component)
    })

export default {
        routes: [

        ]
    };
