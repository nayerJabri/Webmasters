const ajouter = document.getElementById('ajout')
const reference = document.getElementById('reference')
const nom = document.getElementById('nom')
const categorie = document.getElementById('categorie')
const prix = document.getElementById('prix')
const description = document.getElementById('description')
const image = document.getElementById('image')
const date = document.getElementById('date')
const erreur = document.getElementById('erreur')
var date= Date.now();
ajouter.addEventListener('submit' , (e) => {    
    let messages = []
    if(description.value.length < 10 )
    {
        messages.push("description doit etre superieur à 10 caracteres\n")
    }
    if(reference.value.length > 8 )
    {
        messages.push("la taille de la reference ne doit pas depasser 8 \n")
    }    
    if(messages.length > 0 )
    {
        e.preventDefault()
        erreur.innerText = messages.join('')
    }  


})

function isInputNumber(evt){
                
    var ch = String.fromCharCode(evt.which);
    
    if(!(/[0-9]/.test(ch))){
        evt.preventDefault();
    }
}




