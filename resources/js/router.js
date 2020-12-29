import Vue from 'vue'
import VueRouter from 'vue-router'

// ページコンポーネントをインポートする
import Index from './pages/Index.vue'
import BookList from './pages/BookList.vue'
import BookShow from './pages/BookShow.vue'
import Login from './pages/Login.vue'
import ListCreate from './pages/ListCreate.vue'
import SystemError from './pages/error/Systemerror.vue'

import store from './store' 

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter)

// パスとコンポーネントのマッピング
const routes = [
  {
    path: '/',
    component: Index
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
    beforeEnter (to, from, next) {  // ★　追加
      if (store.getters['auth/check']) {
        next('/')
      } else {
        next()
      }
    }
  },
  {
    path: '/BookList',
    name: 'BookList',
    component: BookList
  },
  {
    path: '/BookList/:bookID',
    name: 'BookShow',
    component: BookShow,
    props: true
  },
  {
    path: '/BookList/ListCreate',
    name: 'ListCreate',
    component: ListCreate
  },
  {
    path: '/500',
    name: 'SystemError',
    component: SystemError
  }
]

// VueRouterインスタンスを作成する
const router = new VueRouter({
  mode: 'history',
  routes
})

// VueRouterインスタンスをエクスポートする
// app.jsでインポートするため
export default router