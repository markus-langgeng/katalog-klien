import MediumEditor from '../medium-editor.min.js';

export function medium () {
    let editor = new MediumEditor('.editable', {
        anchor: {
            linkValidation: true,
            targetCheckbox: true,
            targetCheckboxText: 'Open in new window'
        },
        autoLink : true,
    })

    console.log(editor.elements[0].innerHTML)
    let output = document.querySelector(".output")

    output.innerHTML = editor.elements[0].innerHTML

}

