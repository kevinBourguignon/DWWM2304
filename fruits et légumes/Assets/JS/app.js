const app = {
    data() {
        return {
            legumos: [],
            asc: true,
            
        }
    },
    async mounted() {
        let response = await fetch('./legumos.json')
        this.legumos = await response.json()
        console.log(this.legumos)  

    },
    methods: {
        trier(event) {
            let attribut = event.target.id

            let fonctiontri = (a,b) => {
                if(a[attribut] > b[attribut]) {
                    return 1
                }
                else if (a[attribut] < b[attribut]) {
                    return -1
                }
                else{
                    return 0
                }
            }
            this.legumos.sort(fonctiontri)

            if(this.asc == false){
                this.legumos.reverse()
            }
            this.asc = !this.asc
        },
      
        
    },
}

Vue.createApp(app).mount('#app')