import './modules/typeWriter.js';
import './modules/burgerMenu.js';
import { fetchData, postData } from "./modules/TheDataMiner.js";


(() => {

    Vue.component("thumnail-card", {

        props:["item"],
        template:`<img @click="logClicked" :src="'images/' + item.images" alt="item images">`,

        mounted:function(){
            console.log(`loaded a ${this.item.name}'s image`);
        },

        methods:{
            logClicked(){
                console.log("Image Clicked ", this.item.name);
                this.$emit("showmydata", this.item);
            }
        }
    });

    let vue_em = new Vue({

        data:{
            text: "click on images for more details",
            message:"My Design Portfolio",
            removeAFormat:true,
            show_bio_data: false,

            carModels:[],

            currentModelData: {}
        },

        mounted:function()
        {
            console.log("Vue is mounted, trying fetch for initial data");

            fetchData("./includes/index.php")
            .then(data=>{
                    data.forEach(prof=>this.carModels.push(prof));
                })
                .catch(err=>console.error(err));

        },

        methods:
        {

            thumbSelected(item){
                console.log("Thumbnail Selected: ", item.name);
                // this.show_bio_data = this.show_bio_data ? false:true;
                this.show_bio_data = true;
                this.removeAFormat = false;
                this.currentModelData = item;
            }
        }

    }).$mount("#app");

})();