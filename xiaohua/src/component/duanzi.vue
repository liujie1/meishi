<template id="duanzi">
	<div>
		<div class="DZ_list" v-for='(item,key) in arr'>
			<div class="DZ_top">
				<img class="DZ_tx" :src="item.usersrc"/>
				<span class="DZ_title">{{item.username}}</span>
			</div>
			<router-link :to='"/duanziSon"+key' >
				<p>{{item.con}}</p>
			</router-link>
			<div class="DZ_foot">
				<span class="DZ_left"><img class="change" :src='src' :myid="item.ID"/><span class="num">{{item.zan}}</span></span>
				
				<span class="DZ_right">
					<div class="jiathis_style fen">
						<a class="jiathis_button_qzone"></a>
						<a class="jiathis_button_tsina"></a>
						<a class="jiathis_button_tqq"></a>
						<a class="jiathis_button_weixin"></a>
						<a class="jiathis_button_renren"></a>
						<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
						<a class="jiathis_counter_style"></a>
					</div>
				</span>
				
			</div>
		</div>

	</div>
</template>

<script>
	
	export default{
		name:'duanzi',
		data(){
			return{
				arr:[],
				src:'src/img/zan.gif',
				flag:true
			}
		},
		methods:{
			
		},
		mounted:function(){
			var _this=this
			axios.get('./src/js/satin.php').then(function(res){
				_this.arr=res.data
				console.log(_this.arr)
			})
		},
		updated(){
			var _this=this
			$(".change").on('tap',function(){
				if(_this.flag==true){
					this.src='src/img/zan1.png'
					
					var myid=$(this).attr('myid')
					var zhi=$(this).parent().find('.num').html()
					$.ajax({
						type:"post",
						url:"./src/js/stain-dianzan.php",
						async:true,
						data:'myid='+myid+'&zhi='+zhi,
						success:function(data) {
							console.log(data);
						}
					})

					$(this).parent().find('.num').html(Number($(this).parent().find('.num').html())+1)
					
				}else{
					
				}
			})
		}
	}
</script>
<style >
	.DZ_list{
		width:5.26rem;background: #fff;padding: 0.20rem 0.40rem;margin-bottom:0.20rem
	}
	.DZ_tx{
		width:0.60rem;float:left;margin-right:0.20rem
	}
	.DZ_title{
		line-height: 0.60rem;
	}
	.DZ_list p{
		font-size: 0.3rem;margin:0.20rem 0;line-height: 0.56rem;border-bottom:1px solid #e1e1e1;
		color:#000
	}
	.DZ_foot{
		line-height: 0.80rem;height: 0.40rem;
	}
	.DZ_left{
		float:left;line-height: 0.40rem;
	}
	.DZ_left img{
		float:left;width:0.40rem;
	}
	.DZ_right{
		float:right;line-height: 0.40rem;
	}
	.DZ_right img{
		float:left;width:0.40rem;
	}
</style>