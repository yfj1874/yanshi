const path =require('path');
module.export = {
    entry:{
        mode:'development',
        'xx':'./src/index.js'
    },
    output:{
        
        path:pathh.resolve(__dirname,'/dist'),
        filename:'[name].js'
    }
}