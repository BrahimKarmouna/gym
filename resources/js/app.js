import {createApp} from 'vue'

import App from './App.vue'
import { Quasar } from 'quasar'
// Import icon libraries
import '@quasar/extras/material-icons/material-icons.css'
import '@quasar/extras/material-symbols-outlined/material-symbols-outlined.css'
import '@quasar/extras/fontawesome-v5/fontawesome-v5.css'
import '@quasar/extras/bootstrap-icons/bootstrap-icons.css'
import 'quasar/src/css/index.sass'
const app = createApp(App)
import router from '../router/index'; // Import the router


app.use(Quasar, {
    plugins: {
      Notify: {
        position: 'top',
        textColor: 'white',
        color: 'positive'
      }


    }, // import Quasar plugins and add here
  })

app.use(router)
app.mount("#app")

