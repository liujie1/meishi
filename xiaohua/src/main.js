import Vue from 'vue'
import App from './App.vue'

//第一步
import Mint from 'mint-ui';
Vue.use(Mint);


//第二步
import 'mint-ui/lib/style.css';
//第三步配置style-loader 同时安装style-loader

import VueRouter from 'vue-router'

Vue.use(VueRouter)


import VueResource from 'vue-resource'
Vue.use(VueResource)


import jingxuan from './component/jingxuan.vue'

import video from './component/video.vue'
import duanzi from './component/duanzi.vue'
import duanziSon from './component/duanziSon.vue'
import search1 from './component/search1.vue'
import list from './component/list.vue'
import grgl from './component/grgl.vue'
import dlzc from './component/dlzc.vue'
import login from './component/login.vue'
import register from './component/register.vue'
var route=[
	{path:'/jingxuan',component:jingxuan},

	
	{path:'/video',component:video},
	{path:'/duanzi',component:duanzi},
	{path:'/duanziSon:id',component:duanziSon},
	{path:'/jingxuan/:id',component:list},
	
	
	{path:'/grgl',component:grgl},
	{path:'/dlzc',component:dlzc,
		"children":[
			{path:'/dlzc/login',component:login},
			{path:'/dlzc/register',component:register},
			{path:'',redirect:'/dlzc/login'}
		]
	},
	
	
	
	{path:"/search1",component:search1},
	
	{path:'*',redirect:'/jingxuan'}
	
]

var router=new VueRouter({
	routes:route
})


new Vue({
  el: '#app',
  router:router,
  render: h => h(App)
})
