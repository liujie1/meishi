<template id='index'>
	<div>
	<ul
	  v-infinite-scroll="loadMore"
	  infinite-scroll-disabled="loading"
	  infinite-scroll-distance="10">
	  <li v-for="item in list">{{ item }}</li>
	</ul>
	</div>
</template>

<script>
export default{
	name:'index',
	data() {
      return {
      
        list:[]
      }
    },
    methods: {
     
      loadMore() {
		  this.loading = true;
		  setTimeout(() => {
		    let last = this.list[this.list.length - 1];
		    for (let i = 1; i <= 20; i++) {
		      this.list.push(last + i);
		    }
		    this.loading = false;
		  }, 2500);
		}
    }
    
  
}
</script>

<style scoped>
	li{
		height: .6rem;border: 1px solid #ddd;
	}
</style>