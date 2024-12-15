import './bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss'

// import Bootstrap JS 
//(non era presente nel file. nel nostro caso serve se voglio aggiungere il modal che compare quando vogliamo eliminare il comic )
import '~bootstrap/js/index.esm.js'

//precompilazione immagini
import.meta.glob([
    '../img/**'
    ])