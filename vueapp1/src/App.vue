<template>
  <div id="app">
  
  <c-header :bgc="bgc"></c-header>
  <div id="content">
    <router-view ></router-view>
  </div>
   <c-footer :menu="menu" @changeBg="color"></c-footer>

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
          bgColor:"pink",
        },
                {
            path:"/photo",
             name:"照片",
          bgColor:"black",
        },
      ],
      bgc:""
      
      
    }
        
   }, 
 components:{
  CHeader,
  CFooter
 },
   methods:{
    color(bg){ 
      console.log(bg);
      this.bgc=bg;
    }
  },
}
</script>
<style scoped>

#content{
  
  margin: 1rem 0;
  
}
</style>




