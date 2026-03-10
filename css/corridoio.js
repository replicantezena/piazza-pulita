function arrivoAllaPiazza() {
    document.body.style.transition = 'opacity 1.6s ease';
    document.body.style.opacity = '0';

    setTimeout(() => {
        window.location.href = 'piazza.html';
    }, 1600);
}

// durata del viaggio nel corridoio
setTimeout(arrivoAllaPiazza, 8500);
