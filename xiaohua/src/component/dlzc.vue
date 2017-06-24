<template id="dlzc">
	<div>
		<div class="gr-header">
			<div @click="tapr"></div>
		</div>
		<div class='dz-contanier'>
			<router-link to="/dlzc/login" class="dz">登录</router-link>
			<router-link to='/dlzc/register' class="dz">注册</router-link>
			<router-view></router-view>
		</div>
		
</div>	
</template>
<script>
	export default{
	name:"dlzc",
	methods:{
		tapr:function(){
			window.history.back(-1)
		}
	}
}

</script>

<style>
html,body{width:100%;height:100%;}
body{background:#e1e1e1}
.gr-header{ height:0.88rem;width:100%;background: url(../img/gr-header1.jpg) no-repeat top center;background-size:100% 0.88rem;position:relative}
.gr-header div{width:0.5rem;height:0.5rem; background:#fff;position:absolute;top:0.18rem;left:0.18rem;opacity:0.1;}
.dz-contanier{width:80%;margin-left:10%;margin-top:1rem;}
.dz{font-size:0.36rem;text-decoration:none;color:#000;float:left;width:50%;text-align:center;height:0.5rem;line-height:0.5rem;}


</style>