const inputKeyword = document.querySelector('input[name=keywords]');
const tableContainer = document.querySelector('.table-container');

inputKeyword.addEventListener('keyup', async function (e) {

    const XML = new XMLHttpRequest();
    XML.onreadystatechange = function () {
        if (XML.readyState === 4 && XML.status === 200) {
            tableContainer.innerHTML = XML.responseText;
        }
    }

    XML.open('GET', `assets/fetch/students.php?keywords=${inputKeyword.value}`, true);
    XML.send();


})
