const express = require('express');
const path = require('path');
const app = express();
const PORT = 8000;

// Serve i file statici dalla cartella 'public' (nella stessa directory)
app.use(express.static(path.join(__dirname, './public')));

// Route di fallback
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, './public/index.html'));
});

app.listen(PORT, '0.0.0.0', () => {
    console.log(`🚀 Server attivo su http://elvio-x55a.local:${PORT}`);
    console.log(`📂 File statici serviti da: ${path.join(__dirname, './public')}`);
});
