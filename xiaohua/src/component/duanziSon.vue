<template id="duanziSon">
	<div>
		<div class="DZ_list">
			<div class="DZ_top">
				<img class="DZ_tx" :src="str2.usersrc"/>
				<span class="DZ_title">{{str2.username}}</span>
			</div>
			<p>{{str2.con}}</p>
			<div class="DZ_foot">
				<span class="DZ_left"><img :src="str"/><span>{{str2.zan}}</span></span>
				<span class="DZ_right"><img src="src/img/zan.gif"/>1234</span>
			</div>
		</div>
		<div class="DZ_tab">
			<router-link :to='"/duanziSon"+c'>
				<button :@click='last' class="DZ_last"><img class="DZS_shang" src="src/img/shang.gif"/>上一条</button>
			</router-link>
			<router-link :to='"/duanziSon"+b'>
				<button :@click='next' class="DZ_next">下一条<img src="src/img/xia.gif"/></button>
			</router-link>
		</div>
		<div class="DZ_pinglun">
			<img class="DZ_PL" src="src/img/pinglun.gif"/><span class="DZ_num">(3)</span><br />
			<div style="border-bottom:1px solid #ccc;padding-bottom:0.20rem" v-for='(item1,key) in str2.comment'>
				<div class="DZS_xinxi">
					<div class="DZS_left">
						<img src="../img/tou.gif"/>
						<span>你妹打野</span>
					</div>
					<div class="DZS_right">
						<img src="../img/zan2.gif"/>
						<span>5</span>
					</div>
				</div>
				<p>{{item1}}</p>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		name:'duanziSon',
		data:function(){
			return{
				arr:[],
				str:'src/img/zan.gif',
				flag:true,
				arr1:[],
				a:'',
				b:'',
				c:''
			}
		},
		methods:{
			tap:function(){
				if(this.flag){
					this.str='src/img/zan1.png'
					this.flag=false
				}else{
					this.str='src/img/zan.gif'
					this.flag=true
				}
			}
		},
		computed:{
			str2:function(){
				var i=this.$route.params.id
				return this.arr[i]
			},
			next:function(){
				this.a=this.$route.params.id
				this.b=Number(this.a)+1
			},
			last:function(){
				this.a=this.$route.params.id
				if(this.a>0){
					$('.DZ_last').css({"background":"#fff"})
					$('.DZS_shang').attr("src","src/img/shang.gif")
					this.c=Number(this.a)-1
				}else{
					$('.DZ_last').css({"background":"#eaeaea"})
					this.c=Number(this.a)
					$('.DZS_shang').attr("src","src/img/shang1.gif")
				}
			}
		},
		created:function(){
			var _this=this
			axios.get('./src/js/satin.php')
				.then(function(res){
					_this.arr=res.data
				})
			
		}
	}
</script>

<style>
	.DZ_last{
		width:2.54rem;height: 1rem;float:left;background:#fff;font-size: 0.3rem;
	}
	.DZ_last img{
		width:0.52rem;
	}
	.DZ_next{
		width:3.22rem;height: 1rem;background: #f8a514;float:right;font-size: 0.3rem;
	}
	.DZ_next img{
		width:0.52rem;
	}
	.DZ_tab{
		height: 1rem;background: #e1e1e1;width:100%
	}
	.DZ_pinglun{
		background: #fff;padding: 0.40rem;margin-top:0.20rem
	}
	
	.DZ_PL{
		width:0.86rem;
	}
	.DZ_num{
		font-size: 0.40rem;
	}
	.DZS_left{
		float:left;font-size: 0.3rem;
	}
	.DZS_left img{
		float:left;margin-right:0.20rem;width:0.6rem
	}
	.DZS_left span{
		font-size: 0.3rem;
	}
	.DZS_right{
		float:right;font-size: 0.3rem;
	}
	.DZS_right img{
		width:0.5rem
	}
	.DZS_xinxi{
		width: 100%;height: 0.60rem;margin:0.20rem 0;
	}
	.DZ_pinglun p{
		padding-left:0.80rem;font-size: 0.3rem;
	}
</style>