import VueRouter from 'vue-router'




let routes=[{

		path:'/',
		component:require('./components/test'),
		name:'start'
			},
		{
			path:'/surname',
			component:require('./components/surname'),
			name:'sname'


		}

];



export default new VueRouter({


routes

});









