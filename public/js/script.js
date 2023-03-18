
const { createApp } = Vue

createApp({
  data() {
    return {
        showHome: false,
        showContracts: false,
        showBlaster: false,
        showClone: false,
        showWeb: false,
        mot: 'IMMOBILIER BENIN',
            indexLettre: 0,
    motAffiche: ''
    }
},
created() {
  setInterval(() => {
    if (this.indexLettre < this.mot.length) {
      this.motAffiche += this.mot[this.indexLettre];
      this.indexLettre++;
    }
  }, 200);
},
mounted: function() {
   this.displayHome();
},


methods: {
    displayHome(){
      alert('ok');
        this.showHome = true;
        this.showContracts = false,
        this.showBlaster = false,
        this.showClone = false,
        this.showWeb =  false
    },
    proceed(){
        alert('Ce nom de domaine est disponible acatuellement');

     },
     displayContracts(){
        this.showContracts = true;
        this.showHome = false;
     },
     displayBlaster(){
       this.showBlaster = true;
       this.showHome = false;
     },
     displayWeb(){
        this.showWeb = true;
        this.showHome = false;
     },
     displayClone(){
        this.showClone = true;
        this.showHome = false;
     },
    format(num){
    let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
    return res;
},
    getImgUrl(pic) {
    return "public/img/" + pic;
}
  },

  }).mount('#app')