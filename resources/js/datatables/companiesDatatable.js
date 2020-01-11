import toastr from 'toastr'

let companiesTable;

/**
 * Initializes the Module
 */
const init = () => {
    setupTable();
    bindDom();
}

/**
 * Bind DOM
 *
 * Binds any events in one convenient location
 */
const bindDom = () => {
   $('#companies_datatable').on('click', '.delete', removeCompany)
}

/**
 * Setup Table
 *
 * Initializes and configs the companies DataTable
 */
const setupTable = () => {
    companiesTable = $('#companies_datatable').DataTable({
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

/**
 * Remove Company
 *
 * Makes an delete axios call to server to remove
 * company from the system database
 */
const removeCompany = (e) => {

    let $rowId = $(e.target).closest('tr').attr('id');

    axios.delete(`/companies/${$rowId}`)
        .then((response) => {
            companiesTable.draw(false)
            toastr.success('Company removed successfully')
        })
        .catch((error) => {
            toastr.error('Error - please try again.')
        })
}

export default {
    init
};
