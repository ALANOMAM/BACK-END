const { createApp } = Vue;

createApp({
    data() {
        return {
            //dove stanno tutti i miei album
            listaDischi:[],

            //dove sta solo l'oggetto corrispondente all'album selezionato
            elementoDisplay:[],
            
        }
    },

    methods: {
       //la funzione che mi genera il display quando clicco 
        selctAlbum(albumIndex){
            this.listaDischi[this.currentIndex]
            //questo mi da in console l'index dell'album selezionato
            //console.log(albumIndex)
          
        //faccio una chiamata axios che mi prende tutti i miei albumtramite il link
        //una volta presi tutti però riempie il mio array "elementoDisplay" solo con un oggetto
        //l'oggetto che corrisponde all'indice dell'album cliccato.
           axios.get('./server.php').then(res => {
          console.log(res.data[albumIndex]);
         this.elementoDisplay = res.data[albumIndex]
            
        });

        }
        
    },

    mounted() {

        axios.get('./server.php').then(res => {
            // console.log(res.data);
         this.listaDischi = res.data 
            
        });

    },
}).mount('#app');