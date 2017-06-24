<template id="register" >
	<div class="qzz">
		<p >用户名:
			<input type="text" placeholder="请输入账号" v-model="username" />
		</p>
		<p prop="password">设置密码:
			<input type="password" placeholder="请输入密码" v-model="password"/>
		</p>
		<p prop="checkPassword">确认密码:
			<input type="password" placeholder="请再次密码" v-model="checkPassword"/>
		</P>
		<p><button @click="tap()">注册</button></P>
	</div>
</template>

<script>
	export default{
		name:'register',
		data(){
			return {
	                username: '',
	                password: '',
	                checkPassword: ''
	       	}
		},
		methods:{
			tap(){
				var user=this.username;
				var serct=this.password;
				var que_serct=this.checkPassword;
				var _this=this;
				$.ajax({
					type:"post",
					url:"./src/js/regist.php",
					async:true,
					data:{
						'user':user,
						'serct':serct,
						'que_serct':que_serct
					},
					success:function(data) {
						alert("恭喜你注册成功！！！")
						_this.$router.push("/dlzc/login");
					}
				})
			}
		}
	}
</script>

<style>
.qzz{width:90%;height:4rem;margin-left:5%;font-size:0.24rem;clear:both;}
.qzz p{height:1rem;text-align:center;line-height:1rem;width:100%;}
.qzz p input{float:right;margin-top:0.1rem;height:0.5rem;border:0;border-bottom:1px solid #000;background:none;}
.qzz p button{width:4rem;height:70%;border-radius:0.15rem;border:0;background:indianred}
</style>