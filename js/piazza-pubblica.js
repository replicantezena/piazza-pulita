function inviaMessaggio() {
    const testo = document.getElementById("messaggio").value;
    if (!testo.trim()) return;

    const chat = document.getElementById("chat");

    const div = document.createElement("div");
    div.classList.add("messaggio");
    div.innerHTML = `
    <div>${testo}</div>
    <div class="reazioni">
    <span onclick="reagisci(this)">⭐</span>
    <span onclick="reagisci(this)">🙂</span>
    <span onclick="reagisci(this)">😒</span>
    </div>
    `;

    chat.appendChild(div);
    document.getElementById("messaggio").value = "";
    chat.scrollTop = chat.scrollHeight;
}

function reagisci(elem) {
    elem.style.opacity = "1";
}
