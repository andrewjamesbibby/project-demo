
let companiesTable;

const init = () => {
    setupTable();
    bindDom();
}

const bindDom = () => {
    $('#companies_datatable').on('click', '.delete', removeCompany)
}

const setupTable = () => {
    companiesTable = $('#companies_datatable').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: "/datatables/companies",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'actions', name: 'actions'},
        ]
    });
}

const removeCompany = () => {

    alert('yo');

}

const redraw = () => {
    companiesTable.draw(false)
}

const datatable = {
    init,
    redraw,
}

export default datatable;
