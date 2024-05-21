document.addEventListener("DOMContentLoaded", function() {
    var check = document.querySelector(".check");

    // Verificar si el elemento existe
    if (check) {
        // Cargar el estado guardado en localStorage y ajustar el checkbox
        if (localStorage.getItem('idioma') === 'jp') {
            check.checked = true;
        } else {
            check.checked = false;
        }

        check.addEventListener('click', function() {
            let id = check.checked;
            if (id) {
                localStorage.setItem('idioma', 'jp');
                redirigirPagina('jp');
            } else {
                localStorage.setItem('idioma', 'es');
                redirigirPagina('es');
            }
        });
    }

    // Función para redirigir según el idioma
    function redirigirPagina(idioma) {
        let currentPath = window.location.pathname;
        let currentFile = currentPath.substring(currentPath.lastIndexOf('/') + 1);

        if (idioma === 'jp') {
            if (!currentPath.includes('jp/')) {
                location.href = "jp/" + currentFile;
            }
        } else {
            if (currentPath.includes('jp/')) {
                location.href = "../" + currentFile;
            }
        }
    }

    // Redirigir automáticamente si el idioma en localStorage no coincide con la URL actual
    let idiomaActual = localStorage.getItem('idioma');
    if (idiomaActual === 'jp' && !window.location.pathname.includes('jp/')) {
        redirigirPagina('jp');
    } else if (idiomaActual === 'es' && window.location.pathname.includes('jp/')) {
        redirigirPagina('es');
    }
});