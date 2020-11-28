import './modules/typeWriter.js';
import './modules/burgerMenu.js';
import { fetchData, postData } from "./modules/TheDataMiner.js";


(() =>{

    Vue.component("thumnail-card", {

        show_bio_data: false,

        currentModelData: {},

        props:["item"],
        template:`<img @click.prevent="thumbSelected(item)" :src="'images/' + item.images" alt="item images">`,

        mounted:function(){
            console.log(`loaded a ${this.item.name}'s image`);
            // console.log(`${this.item.images}`);
        },

        methods:{
            thumbSelected(item){
                console.log("Thumbnail Selected: ", item.name);
                
            }
        }
    });

    let vue_em = new Vue({

        data:{
            message: "Hello Vue!",
            removeAFormat:true,
            show_bio_data: false,

            myWork:[],

            myWorkData: {}
        },

        mounted:function()
        {
            console.log("Vue is mounted, trying fetch for initial data");

            fetchData("./includes/index.php")
            .then(data=>{
                    data.forEach(myData=>this.myWork.push(myData));
                })
                .catch(err=>console.error(err));
        },

        methods:{
            imgClicked(item)
            {
                console.log("Image Selected ", item.name);
            }
        }

    }).$mount("#app");

})();