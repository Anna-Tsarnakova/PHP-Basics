function removeProgrammingLang() {
    var parent = document.getElementById('parent-programming');
    parent.removeChild(parent.childNodes[parent.childNodes.length - 1]);
}

function addProgrammingLang() {
    var parent = document.getElementById('parent-programming');
    var newElement = document.createElement('div');
    newElement.innerHTML = '<input type="text" name="programming-lang[]">' + ' ' +
    '<select name="levels[]">' +
    '<option value="Beginner">Beginner</option>' +
    '<option value="Programmer">Programmer</option>' +
    '<option value="Ninja">Ninja</option>' +
    '</select>';

    parent.appendChild(newElement);
}

function removeLang() {
    var parent = document.getElementById('parent-languages');
    parent.removeChild(parent.childNodes[parent.childNodes.length - 1]);
}

function addLang() {
    var parent = document.getElementById('parent-languages');
    var newElement = document.createElement('div');
    newElement.innerHTML = '<input type="text" name="languages[]"> ' + ' ' +
    '<select name="comprehension[]"> ' +
    '<option value="" selected>-Comprehension-</option>' +
    '<option value="Beginner">Beginner</option>' +
    '<option value="Pre-Intermediate">Pre-Intermediate</option>' +
    '<option value="Intermediate">Intermediate</option>' +
    '<option value="Upper-Intermediate">Upper-Intermediate</option>' +
    '<option value="Advanced">Advanced</option>' +
    '</select>' + ' ' +
    '<select name="reading[]">' +
    '<option value="" selected>-Reading-</option>' +
    '<option value="Beginner">Beginner</option>' +
    '<option value="Pre-Intermediate">Pre-Intermediate</option>' +
    '<option value="Intermediate">Intermediate</option>' +
    '<option value="Upper-Intermediate">Upper-Intermediate</option>' +
    '<option value="Advanced">Advanced</option>' +
    '</select> ' + ' ' +
    '<select name="writing[]">' +
    '<option value="" selected>-Writing-</option>' +
    '<option value="Beginner">Beginner</option>' +
    '<option value="Pre-Intermediate">Pre-Intermediate</option>' +
    '<option value="Intermediate">Intermediate</option>' +
    '<option value="Upper-Intermediate">Upper-Intermediate</option>' +
    '<option value="Advanced">Advanced</option>' +
    '</select>';

    parent.appendChild(newElement);
}