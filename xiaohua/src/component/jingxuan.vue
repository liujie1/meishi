<template id='jingxuan' style="background: #e1e1e1;">
	<div>
		<mt-swipe :auto="2000" class='j-box'>
		  <mt-swipe-item class='j-a'>
		  	<div class='j-sbox'>
		  		<div class='ab'>熊孩玩拼图动脑又动手！而且奖励是五万大洋！</div>
		  	<img  src='http://image.uc.cn/n/nav/17/30a8aa026a389d071fcd921db4f9430ef.jpeg' />
		  	</div>
		  </mt-swipe-item>
		  <mt-swipe-item class='j-b'>
		  	<div class='j-sbox'>
		  		<div class='ab'>渣男渣女鉴别手册</div>
		  	<img src='http://image.uc.cn/n/nav/17/5938b99dbc4d915c29c066b61832a8ccf.jpeg' />
		  	</div>
		  </mt-swipe-item>
		  
		</mt-swipe>
	<ul style="background: #e1e1e1;">
	  <li v-for="(item,i) in list" style="margin: 0.08rem;background: #fff;padding: .10rem;">
	  	
	  		<h3 style='font-size:.20rem;color: #000;'><span style="font-size: .14rem;">用户：</span?>{{item.name}}</h3>
		  	<p class='con'>{{item.describe}}</p>
		  	
		    <div class='display'>
		    	
		    	<router-link :to='"/jingxuan/"+i'>
		    		<img :src="item.img" class='d-img'/>
		    	</router-link>
		    	
		    	<p class='look'>点击查看全图</p>
		    </div>
		    <div class='zan'><img :src='src' class='zan1'  /><span class="num">{{item.zan}}</span>
		    	<div id="vfot" style="float: right;margin-top:.15rem">
				<div class="jiathis_style fen">
					<a class="jiathis_button_qzone"></a>
					<a class="jiathis_button_tsina"></a>
					<a class="jiathis_button_tqq"></a>
					<a class="jiathis_button_weixin"></a>
					<a class="jiathis_button_renren"></a>
					<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
					<a class="jiathis_counter_style"></a>
				</div>
			</div>

		    </div>
	  	
	   
	  </li>
	</ul>
	</div>
</template>

<script>
export default{
	name:'jingxuan',
	data(){
		return{
			list:[],
//			src:'',
			flag:true,
			src:'src/img/zan.gif'
		}
	},
	
	
	mounted:function(){
		var _this=this
		axios.get('./src/js/jingxuan.php').then(function(res){
			_this.list=res.data;
			//console.log(_this.list)
		})
		/*axios.get('src/json/selected.json').then(function(res){
			_this.list=res.data;
			console.log(_this.list)
		})*/
		this.$emit('to-parent',this.nm)
		
	},
	updated(){
		var _this=this;
	$('.zan1').on('tap',function(){
			console.log(this.src)
			if(_this.flag==true){
				this.src='src/img/zan1.png'
				$(this).parent().find('.num').html(Number($(this).parent().find('.num').html())+1)
				_this.flag=false
			}
////				
//			/*console.log(Number($(this).parent().find('.num').html())+1)
//			console.log(1)*/
		})
		
		for(var i=0;i<$('.d-img').length;i++){
			if($('.d-img').eq(i).height()<250){
				$('.look').eq(i).css('display','none')
			}
		}
		$('.look').on('tap',function(){
			//console.log($(this).parent().find('.d-img').height())
			$(this).parent().css({
				"overflow":"visible",
				"min-height":"2.50rem",
				"height":"auto!important"
				
			})
			$(this).css({"display":"none"})
		
		})
		
		
	}
	
}
</script>

<style scoped>
	.d-img{
		width: 100%;
	}
	.display{
		height: 2.50rem;position: relative;overflow: hidden;
	}
	.look{
		height: .60rem;color: #fff;line-height: .60rem;font-size: .35rem;
		background: rgba(0,0,0,0.5);text-align: center;position: absolute;
		bottom: 0;width: 100%;
	}
	.j-box{
		width: 100%;height: 1.60rem;overflow: hidden;
	}
	.j-a{
		width: 100%;height: 1.60rem;
	}
	.j-b{
		width: 100%;height: 1.60rem;
	}
	.j-sbox{
		width: 100%;height: 1.60rem;position: relative;overflow: hidden;
	}
	.j-a img{
		width: 100%;height: 1.60rem;
	}
	.j-b img{
		width: 100%;height: 1.60rem;
	}
	.ab{
		position: absolute;bottom: 0;height: .30rem;background: rgba(0,0,0,0.4);
		color: #fff;width: 100%;text-align: center;
		line-height: .30rem;font-size: .16rem;
	}
	.zan{
		height: .40rem;line-height: .40rem;border-top:1px solid #ddd
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