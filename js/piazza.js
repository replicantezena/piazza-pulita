setTimeout(() => {
    const frase = document.querySelector('.frase-nebbia');
    frase.classList.add('visibile');

    // Dopo 4 secondi dalla comparsa, svanisce
    setTimeout(() => {
        frase.classList.add('svanisce');

        // Dopo la scomparsa della frase, appare il pulsante
        setTimeout(() => {
            document.querySelector('.entra-piazza').style.opacity = 1;
        }, 2000);

    }, 4000);

}, 3000);
