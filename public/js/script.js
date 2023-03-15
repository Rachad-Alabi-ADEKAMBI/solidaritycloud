
const { createApp } = Vue

createApp({
  data() {
    return {
        cars: [],

    }
},
mounted: function() {
   this.getCars(); //admin
},
methods: {
     displayAdd(){
        this.showBtn = false;
    },
    getCars(){
        alert('ok');
    },

    format(num){
    let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
    return res;
},
    getImgUrl(pic) {
    return "public/img/" + pic;
},
}
  }).mount('#app')