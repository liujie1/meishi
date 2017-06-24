<template id='list' >

<div>
	
	<ul style="background: #e1e1e1;">
		
		<li style="margin: .08rem;background: #fff;padding: .10rem;">
	  	
	  		<h3 style='font-size:.20rem;color: #000;'><span style="font-size: .14rem;">用户：</span?>{{str.name}}</h3>
		  	<p class='con'>{{str.describe}}</p>
		    <div><img :src="str.img" /></div>
		    <div class='zan'><img :src='src' class='zan1' @click='tap'/><span class="num">{{str.zan}}</span></div>
		    <div class='btn'>
				<router-link :to="'/jingxuan/'+d"><mt-button size="small" class='lf' @click='click1'><img src='src/img/b.png' />上一条</mt-button></router-link>
				<router-link :to="'/jingxuan/'+c"><mt-button size="normal" class='rg' @click='click2'>下一条<img src='src/img/a.jpg' /></mt-button></router-link>
			</div>
			<!--<ul>
				<div><img src='src/img/pinglun.png'/><span>(2)</span></div>
				<li>
					<dl>
						<dt><img :src={{str.pinglun.img1}}/></dt>
						<dd><span>{{str.pinglun.nm}}</span><p><img src='src/img/zan2.png'/>2</p></dd>
						<dd>{{str.pinglun.mess}}</dd>
					</dl>
				</li>
				<div class='bottom'>没有更多评论了哦</div>
			</ul>-->
	  	</li>
	</ul>
	

</div>
</template>

<script>
	export default{
		name:'list',
		data(){
			return{
				arr:[],
				src:'src/img/zan.gif',
				flag:true,
				b:'',
				a:"",
				c:'',
				d:""
			}
		},
		methods:{
			
			tap:function(){
				if(this.flag){
					this.src='src/img/zan1.png'
					
					
					this.flag=false
					
				}else{
					this.src='src/img/zan.gif'
					this.flag=true
				}
			}
		},
		computed:{
			str:function(){
				var i=this.$route.params.id
				return this.arr[i]
			},
			click1:function(){
				this.a=this.$route.params.id
				this.d=Number(this.a)>0?Number(this.a)-1:0
				console.log(this.$route.params.id)
			},
			click2:function(){
				this.b=this.$route.params.id
				this.c=Number(this.b)+1
				console.log(this.c)
				console.log(typeof(this.c))
			}
		},
		mounted:function(){
			var _this=this
			axios.get('src/json/selected.json').then(function(res){
				_this.arr=res.data
			})
		}
	}
</script>

<style scoped>
	.btn{
		height: .65rem;line-height: .65rem;width: 100%;
	}
	.lf{
		background: #e9e9e9;width: 2.30rem;height: .50rem;margin-right: .20rem;	
	}
	.rg{
		background: #f7a513;width: 2.70rem;height: .50rem;
	}
	.zan{
		height: .40prem;line-height: .40rem;border-top:1px solid #ddd
	}
	.zan img{
		vertical-align: middle;
	}
	.zan span{
		font-family: "楷体";font-size: .14rem;margin-left: .10rem;color: #000;
	}
	.con{
		height: .40rem;font:.3rem/.40rem "楷体";color:#000;
	}
</style>