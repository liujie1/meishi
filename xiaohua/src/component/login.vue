<template id="login">
	<div class="qsz" id='qsz'>
		<p>用户名:<input type="text" id="" placeholder="请输入账号" v-model="user" /></p>
		<p>密码:<input type="password" id="" placeholder="请输入密码" v-model="psd"/></p>
		<p><button @click=tap1()>登录</button></p>
		
	</div>
</template>

<script>
	export default{
		name:'login',
		data(){
			return{
				user:'',
				psd:''
			}
		},
		methods:{
			tap1(){
				var user=this.user;
				var serct=this.psd;
				var _this=this;
				$.ajax({
					type:"post",
					url:"./src/js/login.php",
					async:true,
					data:{
						'user':user,
						'serct':serct
					},
					success:function(data) {
						_this.$router.push("/jingxuan");
					}
				})
			}
		}
	}
</script>

<style>
.qsz{width:90%;height:3rem;margin-left:5%;font-size:0.24rem;clear:both}
.qsz p{height:1rem;text-align:center;line-height:1rem;width:100%;}
.qsz p input{float:right;margin-top:0.1rem;height:0.5rem;border:0;border-bottom:1px solid #000;background:none;}
.qsz p button{width:4rem;height:70%;border-radius:0.15rem;border:0;background:indianred}
</style>