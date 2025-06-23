function getAttributeList(element, attributeType = 'class') {
    if (!element) return [];

    let value = "";

    switch (attributeType) {
        case 'class':
            value = element.className;
            break;
        case 'id':
            value = element.id;
            break;
        case 'title':
            value = element.title;
            break;
        default:
            value = element.getAttribute(attributeType) || "";
    }

    return value.trim().split(/\s+/);
}

// Exemple d'utilisation

/*


// Exemple : ok 
const monElement = document.getElementById("monElement");

const classes = getAttributeList(monElement, 'class');
const identifiant = getAttributeList(monElement, 'id');
const titres = getAttributeList(monElement, 'title');

console.log("Classes :", classes);      // ["element_1", "element_2"]
console.log("ID :", identifiant);       // ["monElement"]
console.log("Title :", titres);         // ["titre_1", "titre_2"]
*/


/*

<div class="element_1 element_2" id="monElement"></div>
<div class="element_1 element_2" id="monElement" title="titre_1 titre_2"></div>

*/

