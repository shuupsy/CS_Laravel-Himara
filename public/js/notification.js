let moreBtn = document.querySelectorAll('.moreBtn')
let modalWindow = document.querySelectorAll('.modalWindow')

for(let i=0; i < moreBtn.length; i++){
    moreBtn[i].addEventListener("click", () => { // au clic

        if (modalWindow[i].classList.contains('hidden') == false) { // Checker la condition pour fermer le modal au 2ème clic
            modalWindow[i].classList.add('hidden');
        }
        else {
            for (let i = 0; i < modalWindow.length; i++) { // Réinitialisation des autres modals
                modalWindow[i].classList.add('hidden') // Cacher tous les modals
            }
            modalWindow[i].classList.remove('hidden') // Afficher le modal de la notif sélectionnée
        }
    })
}

