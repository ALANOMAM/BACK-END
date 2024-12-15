import express from 'express'

const app = express(); //creato l'app express

const PORT = process.env.PORT || 3000 
// qui andiamo dentro un file "env" dove ci aspettiamo di trovare una variabile chiamata "PORT" con un valore,
// questo valore lo prendiamo me lo salviamo dentro una variabile "PORT" qui, e se il file env è vuoto, passiamo 3000 come valore al port

//equivalente del mio database,qui salvo i miei users
const mockUsers = [
    {id: 1, username:'andy', displayname:'Andy'},
    {id: 2, username:'alan', displayname:'Alan'},
    {id: 3, username:'debora', displayname:'Debora'},
    {id: 4, username:'giada', displayname:'Giada'},
    {id: 5, username:'francesca', displayname:'Francesca'},
    {id: 6, username:'thomas', displayname:'Thomas'},
    {id: 7, username:'kevin', displayname:'Kevin'},
    {id: 8, username:'sofia', displayname:'Sofia'},
    {id: 9, username:'leo', displayname:'Leo'},
]

//ROTTA dove faccio una chiamata di tipo get "request" contiene i miei dati mentre "response" mi da la possibilità di pushare dei dati
app.get("/", (request,response) =>{
    response.send("response manda dati") //quindi se attivo il server e vado su "localhost:3000" vedrò scritto il testo tra parentesi
    //response.send({msg: "messagio json"})
    //response.status(201).send({msg: "messagio json"})
})

//ALTRA ROTTA che creo dove se vai su "localhost:3000/api/users" vedrai un array degli oggetti che ho messo sotto
app.get('/api/users', (request, response)=>{
    //console.log(request.query) 
   
    //PEZZO AGGIUNTO PER LA QUERY START
    const{query:{filter,value},
} = request
//se filter e value non sono definiti
if(!filter && !value) return response.send(mockUsers)
 //if the "username" includes the "value" that we are trying to filter it will return an array 
 if(filter && value)  return response.send(mockUsers.filter((user)=> user[filter].includes(value)))
    //PEZZO AGGIUNTO PER LA QUERY END

// dopo avere fatto il pezzo sopra, se su postman o sul browser scrivo "localhost:3000/api/users?filter=username&value=an"
//avrò un array di tutti gli utenti avendo username che contiene "an", cioè "alan", "andy" e "francesca"

})

//creo una rotta in cui uso i parametri, in particola l'id
app.get('/api/users/:id', (request,response) => {
  //console.log(request.params) //  se scrivo "localholst:3000//api/users/:1" nel link e carico la pagina dove c'e il mio link mi compare "{ id: '1' }" nel terminale 
  const parsedId = parseInt(request.params.id)
  console.log(parsedId)// se scrivo "localholst:3000//api/users/:1" nel link e carico la pagina dove c'e il mio link mi compare "1" nel terminale

  if(isNaN(parsedId)) return response.status(400).send({ msg: 'Bad request. Invalid ID'}) // se nell'id metto qualcosa che non sia un numero

  //il pezzo sotto mi returna lo user che corrisponde all'id selezionato se cerco o sul browser o su postman
  const findUser = mockUsers.find((user)=> user.id === parsedId)
  if(!findUser) return response.sendStatus(404)
    return response.send(findUser)

})

app.listen(PORT, () =>{ 
    console.log(`running on port ${PORT}`)
})