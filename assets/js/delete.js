window.addEventListener('load', (el) => {
    var del = document.querySelectorAll('.del-link');
    del.forEach(element => {
        element.addEventListener('click', (e) => {
            var xml = new XMLHttpRequest();
            xml.addEventListener('load', (e) => {
                document.querySelector('#row' + element.id).remove();
            });
            xml.open('GET', 'http://localhost/siproject/pcg/delete/' + element.id, true);
            xml.send();
        })
    });
});