<template id="search1">
	<div>
	  		
	  		<router-link to="/duanzi">
	  			 <div class="cell1">
		  			 <img src="http://image.uc.cn/s/uae/g/0q/product/rl/v3/daily_rl.png" />
		  			 <h3>每日排行榜</h3>
		  			 <p>每日搞笑段子乐翻天</p>
	  		     </div>
	  		</router-link>
	  		<router-link to="/video">
	  			 <div class="cell1 cell2">
		  			 <img src="http://image.uc.cn/s/uae/g/06/%E5%9B%BE%E6%A0%87_03.png" />
		  			 <h3>表情包</h3>
		  			 <p>来啊，互相伤害啊</p>
	  		   </div>
	  		</router-link>
	  		<router-link to="/jingxuan">
	  			 <div class="cell1">
		  			 <img src="http://image.uc.cn/s/uae/g/view/ab614a0e0f2d994b4128fc6ae183d361" />
		  			 <h3>神回复</h3>
		  			 <p>每天更新10条，神到飞起</p>
	  		   </div>
	  		</router-link>
	  		<router-link to="/video">
	  			 <div class="cell1 cell2">
		  			 <img src="http://image.uc.cn/s/uae/g/view/935fb13a0f4533abbfe6a9ee87c2ca94" />
		  			 <h3>秘密</h3>
		  			 <p>每个人心中都有一个秘密</p>
	  		   </div>
	  		</router-link>
	  		<router-link to="/duanzi">
	  			 <div class="cell1">
		  			 <img src="http://image.uc.cn/s/uae/g/view/808987214446b8085634d5f382f7be1f" />
		  			 <h3>GIF图</h3>
		  			 <p>动图虽贱，注意流量哦</p>
	  		   </div>
	  		</router-link>
	  		<router-link to="/jingxuan">
	  			 <div class="cell1 cell2">
		  			 <img src="http://image.uc.cn/s/uae/g/view/25807e7185dc19e00e6cb5b76bc33966" />
		  			 <h3>冷笑话</h3>
		  			 <p>每日必更新，不吐槽会死</p>
	  		   </div>
	  		</router-link>
		  	
	</div>
</template>
<script>
	export default {
		name:'search1',
		data(){
			return{
				
			}
		}
	}

</script>
<style scoped="scoped">
	*{margin: 0;padding: 0;}
    .cell1{
    	display: flex;
    	flex-direction: column;
    	justify-content: center;
    	width: 50%;
    	float: left;
    	box-sizing: border-box;
    	text-align: center;
    	height: 150px;
    	border-right: 1px solid #CCCCCC;
    	border-bottom:1px solid #CCCCCC;
    	
    }
    .cell2{
    	border-right: none;
    }
	.cell1 img{
		display: block;
		width:70px;
		margin: 0 auto;
		height: 70px;
		margin-top:25px
	}
	.cell1 h3{
		font-size: 16px;
		height: 30px;
		line-height: 30px;
		
	}
	.cell1 p{
		font-size: 12px;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		height: 20px;
	}
</style>