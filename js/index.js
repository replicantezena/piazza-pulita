let t = 0;

function animaPortone() {
    t += 0.02;
    const pulse = 0.5 + Math.sin(t) * 0.5;

    // luce centrale
    const luce = document.querySelector('.portone-luce');
    if (luce) {
        luce.style.opacity = 0.3 + pulse * 0.4;
    }

    // simboli
    document.querySelectorAll('.simbolo').forEach((s, i) => {
        s.style.opacity = 0.4 + Math.sin(t + i) * 0.4;
    });

    requestAnimationFrame(animaPortone);
}

animaPortone();
