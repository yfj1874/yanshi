<template>
  <div id="app">
  
  <c-header :obj="obj"></c-header>
  <div id="content">
    <router-view ></router-view>
  </div>
   <c-footer :menu="menu" @changeBg="color" :color="obj.bgColor"></c-footer>

  </div>
</template>
<script>
import CHeader from "@/components/CHeader.vue";
import CFooter from "@/components/CFooter.vue";
export default {
     
     data(){
    return{
      menu:[
        {
          path:"/movie",
          name:"电影",
          bgColor:"red",
        },
                {
            path:"/music",
          name:"音乐",
          bgColor:"green",
        },
                {
            path:"/book",
             name:"书籍",
          bgColor:"#4abcd8",
        },
                {
            path:"/photo",
             name:"照片",
          bgColor:"#96c2f1",
        },
      ],
      obj:{
          path:"/movie",
          name:"电影",
          bgColor:"red",
      }
      
      
    }
        
   }, 
 components:{
  CHeader,
  CFooter
 },
   methods:{
    color(obj){ 
      this.obj=obj;
    }
  },
  created(){
    let result=this.menu.filter((obj,index)=>{
      return obj.path==this.$route.path;

    });
    if(result.length){
      this.obj=result[0];
    }
    
  }
}
</script>
<style scoped>

#content{
  
  margin: 1rem 0;
  
}
</style>




