require('./bootstrap');


const resultentry = document.getElementById('resultentry');
const addres = document.getElementById('addresult');

addres.addEventListener('click', ()=>{
    const el = document.createElement('tr');
    el.innerHTML = 
    `<td>
        <select class="form-select" aria-label="Default select example">
            <option selected value="Bangla">Bangla</option>
            <option value="English">English</option>
        </select>
    </td>
    <td>
        <input type="number" class="form-control" value="10" name="number">
    </td>
    <td>
        <button class="btn btn-small btn-danger">Delete</button>
    </td>
    `
    resultentry.appendChild(el);
})

